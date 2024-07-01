
@php
    $menu = \SolutionForest\FilamentCms\Facades\FilamentCms::getNavigation('footer') ?? [];
@endphp
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <ul class="flex items-center pb-4">

            @foreach ($menu as $item)
                @php
                    $url = $item->url ?? '#';
                    if ($queryString = request()->getQueryString()) {
                        $url .= '?' . $queryString;
                    }
                @endphp
                <li class="group relative mr-6 mb-1">
                    <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
                    <a href="{{ $url }}" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">{{ $item->title }}</a>
                </li>
            @endforeach
        </ul>
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>
    </footer>
</div>
