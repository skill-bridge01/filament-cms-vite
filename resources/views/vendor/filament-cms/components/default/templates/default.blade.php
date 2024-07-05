@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */
    $content = data_get($page?->data, 'content', null);

    $theme = FilamentCms::getCurrentTheme();

    $tags = $page?->tags ?? collect([]);
@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">
    @if ($tags)
        <div class="flex gap-2">
            @foreach ($tags as $tag)
                <span data-slug="{{$tag->slug ?? null}}" class="bg-black font-body inline-block mb-5 px-2 py-1 rounded-full sm:mb-8 text-sm text-white">
                    {{ $tag->title }}
                </span>
            @endforeach
        </div>
    @endif
    @if ($content)
        {!! $content !!}
    @endif
</x-dynamic-component>
