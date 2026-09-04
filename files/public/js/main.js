/*
    Monarch — the four small behaviours the design needs. No dependencies.

    1. Scroll reveals for [data-reveal] elements.
    2. The menu capsule: open/close, Escape, outside click, focus return.
    3. A data-scrolled flag on the header so the capsules deepen their shadow.
    4. Duplicating the marquee row so the loop is seamless.

    Pages change in place (data-instant-navigation on <body>): the menu and
    header (2, 3) bind once; the reveals and the marquee (1, 4) live inside
    <main> and are torn down and set up again per page through setUp(root).
*/
(function () {
    'use strict';

    var root = document.documentElement;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    // What the current <main> owns — released before the next one is set up.
    var revealObserver = null;

    // Closes the menu capsule; wired by initMenu once the capsule is found.
    var closeMenu = function () {};

    /* ---------------------------------------------------------------- 1 */

    function initReveals(scope) {
        var targets = scope.querySelectorAll('[data-reveal]');

        if (!targets.length) {
            return;
        }

        if (reduceMotion.matches || !('IntersectionObserver' in window)) {
            targets.forEach(function (el) {
                el.classList.add('is-visible');
            });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
        );

        targets.forEach(function (el) {
            observer.observe(el);
        });

        revealObserver = observer;
    }

    /* ---------------------------------------------------------------- 2 */

    function initMenu() {
        var button = document.querySelector('[data-menu-button]');
        var panel = document.querySelector('[data-menu-panel]');

        if (!button || !panel) {
            return;
        }

        function setOpen(open) {
            root.classList.toggle('menu-open', open);
            button.setAttribute('aria-expanded', open ? 'true' : 'false');
            panel.setAttribute('aria-hidden', open ? 'false' : 'true');
        }

        function isOpen() {
            return root.classList.contains('menu-open');
        }

        button.addEventListener('click', function (event) {
            event.stopPropagation();
            setOpen(!isOpen());
        });

        document.addEventListener('click', function (event) {
            if (isOpen() && !panel.contains(event.target) && !button.contains(event.target)) {
                setOpen(false);
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && isOpen()) {
                setOpen(false);
                button.focus();
            }
        });

        // Following a link should never leave the panel open behind the page.
        panel.addEventListener('click', function (event) {
            if (event.target.closest('a')) {
                setOpen(false);
            }
        });

        closeMenu = function () {
            setOpen(false);
        };

        setOpen(false);
    }

    /* ---------------------------------------------------------------- 3 */

    function initHeaderState() {
        var header = document.getElementById('header');

        if (!header) {
            return;
        }

        function sync() {
            if (window.scrollY > 12) {
                header.setAttribute('data-scrolled', '');
            } else {
                header.removeAttribute('data-scrolled');
            }
        }

        sync();
        window.addEventListener('scroll', sync, { passive: true });
    }

    /* ---------------------------------------------------------------- 4 */

    function initMarquee(scope) {
        scope.querySelectorAll('[data-marquee-track]').forEach(function (track) {
            if (track.dataset.marqueeReady) {
                return;
            }

            track.dataset.marqueeReady = 'true';

            // The CSS slides the track exactly half its width, so the row has
            // to appear twice for the loop to land back where it started.
            Array.prototype.slice.call(track.children).forEach(function (child) {
                var clone = child.cloneNode(true);
                clone.setAttribute('aria-hidden', 'true');
                track.appendChild(clone);
            });
        });
    }

    /* ------------------------------------------------- inside <main> */

    function tearDown() {
        if (revealObserver) {
            revealObserver.disconnect();
            revealObserver = null;
        }
    }

    function setUp(scope) {
        tearDown();
        initReveals(scope);
        initMarquee(scope);
    }

    function boot() {
        initMenu();
        initHeaderState();
        setUp(document);

        document.addEventListener('instant:navigated', function (event) {
            closeMenu();
            setUp(event.detail.main);
        });
    }

    // This file is deferred, so the page is already parsed.
    boot();
})();
