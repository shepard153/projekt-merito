<div>
  <x-slot name="title">
      {{ __('Strona główna') }}
  </x-slot>

  <section class="mt-6 py-20">
    <div class="mx-auto grid max-w-2xl items-start gap-x-16 gap-y-8 px-6 lg:max-w-7xl lg:grid-cols-2">
      @foreach ($this->posts->get('featured') as $featuredPost)
        <a class="group relative" href="{{ route('post.show', $featuredPost->getAttribute('slug')) }}" wire:navigate preload="preload">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="{{ str_contains($featuredPost->getAttribute('image'), 'placeholder') ? $featuredPost->getAttribute('image') : asset('storage/' . $featuredPost->getAttribute('image')) }}"
                 alt="Text"
                 class="h-full w-full rounded-lg object-cover" loading="lazy">
          </div>

          <div class="mt-6 flex items-center gap-3">
            <span class="inline-flex rounded-full px-4 py-2 text-xs font-bold leading-4 border border-emerald-600 text-emerald-600">
              {{ $featuredPost->getAttribute('author')->getAttribute('name') }}
            </span>
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            {{ $featuredPost->getAttribute('title') }}
          </h3>
        </a>
      @endforeach
    </div>
  </section>

  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl">
    <hr class="border-gray-600/30">
  </div>

  <section class="py-20">
    <div class="mx-auto w-full max-w-2xl px-6 lg:max-w-7xl">
      <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3">
        <h2 class="text-3xl font-bold sm:text-4xl lg:text-[40px]">{{ __('Najnowsze artykuły') }}</h2>
        <a href="{{ route('blog') }}" wire:navigate
                     class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 font-bold text-emerald-600 hover:text-emerald-700">
          {{ __('Zobacz wszystkie') }} →
        </a>
      </div>

      <div class="mt-12 grid gap-x-8 gap-y-12 lg:grid-cols-3">
        @foreach ($this->posts->get('recent') as $recentPost)
          <a class="group relative" href="{{ route('post.show', $recentPost->getAttribute('slug')) }}" wire:navigate>
            <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
              <img src="{{ str_contains($recentPost->getAttribute('image'), 'placeholder') ? $recentPost->getAttribute('image') : asset('storage/' . $recentPost->getAttribute('image')) }}"
                   alt="ALT" class="h-full w-full rounded-lg object-cover"
                   loading="lazy">
            </div>

            <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
              {{ $recentPost->getAttribute('title') }}
            </h3>
          </a>
        @endforeach
      </div>
    </div>
  </section>
</div>