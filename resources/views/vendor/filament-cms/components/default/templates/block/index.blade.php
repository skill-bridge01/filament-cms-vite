@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */

    $items = data_get($page?->data, 'block_items', []);
    $theme = FilamentCms::getCurrentTheme();
@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">
    @foreach ($items as $item)
        <x-dynamic-component
            component="filament-cms::{{$theme}}.templates.block.item"
            :data="$item"
        />
    @endforeach
</x-dynamic-component>
