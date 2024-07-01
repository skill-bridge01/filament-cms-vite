@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;
    use SolutionForest\FilamentCms\Support\Utils;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */

    $theme = FilamentCms::getCurrentTheme();

    $links = Utils::getDataType('link')->get();

@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">
    @if ($page)
        @php
            $title = $page->title;
            $content = data_get($page->data, 'content', null);
        @endphp
        <div class="border-b border-grey-lighter py-16 lg:py-20">
            <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                {{ $title }}
            </h1>
            <div class="pt-3 font-body text-xl font-light text-primary dark:text-white">
                @if ($content)

                @endif
                {!! $content !!}
            </div>
        </div>
        <div class="py-16 lg:pb-20">
            <div class="flex items-center pb-6">
                <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
                    Links
                </h3>
            </div>
            <div>
                @foreach ($links as $link)
                    @php
                        $linkTitle = $link->title;
                        $url = data_get($link->data, 'url');
                        $description = data_get($link->data, 'description');
                    @endphp

                <a href=" {{ $url }} " target="_blank" class="mb-6 flex items-center justify-between border border-grey-lighter px-4 py-4 sm:px-6">
                    <span class="w-9/10 pr-8">
                        <h4 class="font-body text-lg font-semibold text-primary dark:text-white">
                            {{ $linkTitle }}
                        </h4>
                        <p class="font-body font-light text-primary dark:text-white">
                            {{ $description }}
                        </p>
                    </span>
                </a>
                @endforeach

            </div>
        </div>
    @endif
</x-dynamic-component>
