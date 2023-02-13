<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('logo/favicon.ico') }}">

        <title> Prime IT Club @isset($title) | {{ $title }} @endisset </title>

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <!-- Tailwind UI -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


        <!-- Js -->
        <script src="{{ asset('/js/custom.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>


        <!-- Alpine -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Flowbite css -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

        <!-- Swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

        <!-- Navbar font -->
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Poppins:wght@300&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap");
        </style>

        @stack('styles')

    </head>

    <body class="antialiased" style="font-family: Poppins, sans-serif;">

    {{ $slot }}

    @stack('scripts')

    </body>
</html>
