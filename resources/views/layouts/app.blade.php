<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'dev-Minimal-Challenge') }}</title>

    <link rel="icon"
        href="https://media.licdn.com/dms/image/C4D0BAQHYqJ6Ip702gA/company-logo_200_200/0/1604590139795?e=1680134400&v=beta&t=m3qm5-z8oaop_fz-tNzpTwubd3ITLBryvVUOdRgQ9kA"
        type="image/" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-height-navigation">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="background-geral">
            {{ $slot }}
        </main>
    </div>
</body>

</html>


<style>
    .min-height-navigation {
        height: 67vh !important;
    }

    .background-geral {
        background-color: #374151;
    }
</style>
