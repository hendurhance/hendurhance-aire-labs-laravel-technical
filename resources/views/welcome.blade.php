<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel Technical Assessment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/tailwind.min.css" />
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body class="antialiased">
        <section class="container grid place-items-center min-h-screen relative bg-cover bg-center bg-no-repeat z-10 overflow-hidden">
            <img src="/graphics/Accent.svg" class="blob-right">
            <img src="/graphics/Accent.svg" class="blob-left">
            <div class="blob-left"></div>
            @livewire('testimonial-component')
        </section>
    <body>
</html>
