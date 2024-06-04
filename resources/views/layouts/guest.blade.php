<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    body {
        background-color: #b1dfa6;
    }

    .com_title {
        font-size: 50px;
        font-weight: 900;
    }

    .pt-100 {
        padding-top: 50px;
    }

    .min-h-screen-coustom {
        min-height: 60vh;
    }

    .box-header {
        background-color: #197213;
        border: 10px;
        color: white;
    }

    .logo-area {
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: center;
        align-content: center;
    }

    .logo-area img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }
</style>

<body class="font-sans text-gray-900 antialiased">
    <h1 class="com_title text-center box-header">LKSS HUMAN RESOURCE CENTER (LKSS-HRC)</h1>

    <div class="min-h-screen-coustom flex flex-col sm:justify-center items-center pt-6 sm:pt-0  dark:bg-gray-900">
        <div class="logo-area">
            <div class="logo">
                <img src="../../assets/img/avatars/logo.jpg" alt class="h-auto rounded-circle " />
            </div>
        </div>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
