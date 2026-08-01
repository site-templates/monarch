<x-layouts.post
    :title="$posts->title"
    :description="$posts->description"
    :category="$posts->category"
    :dateFormatted="$posts->dateFormatted"
    :readTime="$posts->readTime"
    :author="$posts->author"
    :image="$posts->image"
    :imageAlt="$posts->imageAlt"
    :slug="$posts->slug"
    :entries="$entries"
>{!! $posts->content !!}</x-layouts.post>
