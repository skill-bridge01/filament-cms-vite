@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */

    $theme = FilamentCms::getCurrentTheme();
@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">
    @if ($page)
        @php
            $title = $page->title;
            $content = data_get($page->data, 'content', null);
            $author = data_get($page->data, 'author', null);
        @endphp
        <div class="row">

            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="blog-post-title mb-1">{{ $title }}</h2>
                    @if ($author)
                        <p class="blog-post-meta">by <a href="#">{{ $author }}</a></p>
                    @endif

                    <hr>

                    {!! $content !!}
                </article>
            </div>

        </div>
    @endif
</x-dynamic-component>
