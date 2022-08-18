@php
        $navigationItems = [
            ['label' => 'About', 'href' => '#about' ],
            ['label' => 'Projects', 'href' => '/projects' ],
            ['label' => 'Coding Tutorials', 'href' => '#coding-tutorials' ],
            ['label' => 'Testimonials', 'href' => '#testimonials' ],
            ['label' => 'Contact', 'href' => '#contact' ],
        ]
    @endphp
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La moumou</title>


        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>

    <body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-white-100 dark:bg-white-900 pt-4">
        <x-layout.navbar :items="$navigationItems">

        </x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
