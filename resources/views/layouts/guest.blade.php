<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

  <!-- Scripts -->
  @filamentStyles
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialised min-h-screen bg-white font-sans text-black relative bg-gradient-to-r from-gray-100 to-white">
  <livewire:layout.navigation/>

  <!-- Page Heading -->
  <header class="pb-24 sm:pb-32 lg:max-w-7xl items-center lg:grid-cols-2 relative mx-auto grid w-full max-w-2xl gap-x-16 gap-y-12 px-6 pt-10">
    <div>
      <h1 class="text-5xl font-bold sm:text-6xl">{{ $title }}</h1>
      <p class="mt-4 text-gray-600">
        {{ $description ?? '' }}
      </p>
    </div>
  </header>

  <!-- Page Content -->
  <main>
    @livewire('notifications')

    {{ $slot }}

    @filamentScripts
  </main>

  <!-- Footer -->
  <livewire:layout.footer/>
</body>
</html>
