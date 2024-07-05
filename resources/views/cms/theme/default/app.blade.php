@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var ?\SolutionForest\FilamentCms\SEO\Support\SEOData $seo */

    $theme = FilamentCms::getCurrentTheme();
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @if ($seo)
            {!! seo($seo) !!}
        @endif
        @stack('beforeCoreStyles')
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
            }
        </script>
        @stack('styles')
    </head>

    <!-- <body class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"> -->
    <body>    
        <!-- @section('header')
            @include("cms.theme.{$theme}.header")
        @show

        <div class="container mx-auto py-6 lg:py-10">
            @yield('content')
        </div>

        @section('footer')
            @include("cms.theme.{$theme}.footer")
        @show

        @stack('beforeCoreScripts')
        @stack('scripts') -->
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>
