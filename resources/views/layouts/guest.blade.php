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
    {{ $slot }}
  </main>

  <!-- Footer -->
  <footer class="relative overflow-hidden py-24 sm:py-32">
    <svg class="absolute bottom-0 right-0" width="603" height="419" viewBox="0 0 603 419" fill="none"
         xmlns="http://www.w3.org/2000/svg">
      <g opacity=".2" filter="url(#filter0_f_4_553)">
        <circle cx="462" cy="462" r="258" fill="#05960a"></circle>
      </g>
      <defs>
        <filter id="filter0_f_4_553" x="0" y="0" width="924" height="924" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
          <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
          <feGaussianBlur stdDeviation="102" result="effect1_foregroundBlur_4_553"></feGaussianBlur>
        </filter>
      </defs>
    </svg>

    <div class="relative mx-auto flex w-full max-w-2xl flex-col items-start justify-between gap-x-16 gap-y-12 px-6 lg:max-w-7xl lg:flex-row">
      <div class="lg:w-1/2">
        <h2 class="text-2xl font-bold lg:text-[28px]">Zapisz się do newslettera</h2>
        <div class="relative mt-10">
          <div class="relative overflow-hidden rounded-lg border border-gray-100 bg-white p-8 shadow-card">
            <span class="absolute inset-y-0 left-0 w-1 bg-emerald-600"></span>
            <div>
              <form method="POST">
                <div class="flex w-full flex-wrap items-stretch gap-4">
                  <label class="relative flex min-w-[240px] flex-1 items-center bg-white">
                    <span class="sr-only">Email</span>
                    <img src="https://picperf.io/https://laravel-news.com/images/icons/newsletter.svg"
                         alt="Newsletter icon" class="pointer-events-none absolute left-3 top-3">
                    <input name="email" type="text"
                           class="w-full rounded-lg border-gray-100 bg-transparent px-12 py-3 text-gray-600 placeholder-gray-600/50 transition focus:border-gray-100 focus:bg-gray-100/40 focus:outline-none focus:ring-2 focus:ring-emerald-600/80 focus:ring-offset-2"
                           placeholder="Email">
                  </label>

                  <button type="submit"
                          class="inline-flex items-center justify-center leading-none bg-emerald-600 border border-transparent rounded-lg font-bold text-base text-white hover:bg-emerald-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 focus-visible:ring-offset-2 disabled:bg-emerald-600/50 disabled:cursor-not-allowed transition ease-in-out duration-300 px-6 py-4">
                    Dołącz
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="mt-10 flex flex-wrap items-center gap-8">
          <p class="font-bold">Śledź nas także na</p>
          <div class="flex flex-wrap items-center gap-2 sm:flex-nowrap">
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://www.facebook.com/" target="_blank">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/facebook.svg" alt="Facebook"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>

            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://instagram.com/">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/instagram.svg" alt="Instagram"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>

            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://twitter.com/">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/x.svg" alt="X"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>

            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://www.linkedin.com/">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/linkedin.svg" alt="Linkedin"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>

            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://t.me/">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/telegram.svg" alt="Telegram"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>

            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://www.youtube.com/">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/youtube.svg" alt="Youtube"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>

            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
               href="https://www.threads.net/">
              <img loading="lazy" src="https://picperf.io/https://laravel-news.com/images/threads.svg" alt="Threads"
                   class="h-6 w-6 object-contain" rel="nofollow">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="relative mx-auto mt-20 flex w-full max-w-2xl flex-wrap justify-between gap-x-16 gap-y-12 px-6 lg:max-w-7xl">
      <p class="text-sm text-gray-600">
        © 2023
        <br>
        Sranie
      </p>
    </div>
  </footer>
</body>
</html>
