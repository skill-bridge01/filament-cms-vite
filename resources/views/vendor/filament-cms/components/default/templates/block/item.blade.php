@props(['data' => []])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    $theme = FilamentCms::getCurrentTheme();
    $type = $data['type'] ?? null;
    $itemData = $data['data'] ?? [];
    $itemContent = $itemData['content'] ?? null;
@endphp

<div class="row mb-4">
    @switch($type)
        @case('heading')
            @php
                $headingLevel = $itemData['level'] ?? null;
            @endphp
                <x-dynamic-component
                    component="filament-cms::{{$theme}}.templates.elements.heading"
                    :level="$headingLevel">
                    {{ $itemContent }}
                </x-dynamic-component>
            @break

        @case('paragraph')
            @if ($itemContent)
                {!! $itemContent !!}
            @endif
            @break
        @case('image')
            @php
                $imageSrc = $itemData['src'] ?? null;
                $imageUrl = $imageSrc ? \Illuminate\Support\Facades\Storage::url($imageSrc) : null;
            @endphp
            <div>
                <x-dynamic-component
                    component="filament-cms::{{$theme}}.templates.elements.image"
                    class="h-4 w-4"
                    :src="$imageUrl"
                    :alt="$itemData['alt'] ?? null"
                />
            </div>
            @break
        @default
    @endswitch
</div>
