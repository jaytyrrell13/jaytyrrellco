<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        {{-- <link rel="icon" href="/favicon.ico"> --}}
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="text-gray-800 flex flex-col justify-between min-h-screen bg-white leading-normal font-sans border-t-4 border-blue-500">
        <header class="flex items-center py-8 border-b border-gray-100" role="banner">
            <div class="container flex items-center max-w-4xl mx-auto px-4">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center border-0">
                        <h1 class="text-xl text-gray-800 hover:text-blue-500 font-normal my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">
                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full">
            <div class="bg-gray-050 py-8 border-b border-gray-100 mb-8">
                <div class="max-w-4xl mx-auto px-4">
                    @yield('hero')
                </div>
            </div>

            <div class="max-w-4xl mx-auto px-4">
                @yield('body')
            </div>
        </main>

        <footer class="bg-white text-center text-xs mt-12 p-4" role="contentinfo">
            &copy; Jay Tyrrell {{ date('Y') }}. Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a> and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>. Hosted on <a href="https://www.netlify.com/" target="_blank">Netlify</a>.
        </footer>

        @stack('scripts')
    </body>
</html>
