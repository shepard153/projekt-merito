<div>
  <x-slot name="title">
    {{ __('Blog') }}
  </x-slot>

  <div class="mx-auto w-full max-w-2xl px-6 lg:max-w-7xl">
    <!-- Search bar -->
    <div class='flex items-center mb-3 text-gray-400 focus-within:text-gray-600'>
      <div class="relative flex w-2/3 mx-auto">
        <x:heroicon-o-magnifying-glass class="absolute mt-3 ml-3 w-5 h-5 pointer-events-none"/>
        <input wire:model.live="search"
               value='{{ \Request::get("search") }}'
               type="text"
               class="w-full pr-3 pl-10 py-2 placeholder-gray-500 text-black border-b-2"
               autocomplete="off"
        />
      </div>
    </div>

    {{ $posts->links() }}

    <!-- Posts list -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 py-12">
      @forelse($posts as $post)
        <div class="relative p-12 border border-slate-300 shadow-2xl">
          <div class="flex justify-center max-h-96">

            <!-- Post image -->
            <img class="object-contain"
                 src="{{ str_contains($post->getAttribute('image'), 'placeholder') ? $post->getAttribute('image') : asset('storage/' . $post->getAttribute('image')) }}"
                 alt="{{ $post->getAttribute('title') }}"
            />
          </div>
          <div class="mb-8 py-3">
            <!-- Post title -->
            <h3 class="py-4 font-semibold text-3xl">
              <a href='{{ route('post.show', ['slug' => $post->getAttribute('slug')]) }}'>{{ $post->getAttribute('title') }}</a>
            </h3>

            <!-- Post meta -->
            <div class="flex justify-between py-2">
              <span>{{ __('Author: :author', ['author' => $post->getAttribute('author')->getAttribute('name')]) }}</span>
              <span>{{ date('d.m.Y ', strtotime($post->getAttribute('updated_at'))) }}</span>
            </div>

            <!-- Post trimmed content -->
            <p class="py-2">{{ mb_strimwidth(strip_tags($post->getAttribute('content')), 0, 400, "...") }}</p>
          </div>

          <!-- Read more button -->
          <div class="absolute inset-x-0 bottom-8 text-center">
            <a href="{{ route('post.show', ['slug' => $post->getAttribute('slug')]) }}"
               class="px-4 py-2 text-white bg-emerald-600 shadow-sm shadow-black/50 hover:shadow-inner hover:shadow-black/25">{{ __('Czytaj dalej') }}</a>
          </div>
        </div>
      @empty
        <!-- No posts message -->
        <div class="col-span-1 sm:col-span-2 lg:col-span-3">
          <div class='alert alert-danger'>{{ __('Brak postów do wyświetlenia') }}</div>
        </div>
      @endforelse
    </div>

    {{ $posts->links() }}
  </div>
</div>
