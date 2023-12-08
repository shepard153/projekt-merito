<div class="mx-auto max-w-2xl items-start px-6 lg:max-w-7xl">
  <x-slot name="title">
    {{ $title }}
  </x-slot>

  <img class="mx-auto"
       src="{{ str_contains($post->getAttribute('image'), 'placeholder') ? $post->getAttribute('image') : asset('storage/' . $post->getAttribute('image')) }}"
       alt={{ $post->getAttribute('image') }}""
  />

  <div class="flex flex-col space-y-4 py-8">
    <div>
      {{ $post->getAttribute('author')->getAttribute('name') }}
    </div>
    <div>
      {{ \Carbon\Carbon::parse($post->getAttribute('published_at'))->format('d.m.Y') }}
    </div>
  </div>

  <div class="flex flex-col py-8">
    {!! $post->getAttribute('content') !!}
  </div>

  <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
    <div class="max-w-2xl mx-auto px-4">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">{{ __('Komentarze (:count)', ['count' => $post->getAttribute('comments')->count()]) }}</h2>
      </div>

      @if (auth()->user()?->can('create comments'))
        <form class="mb-6" wire:submit="addComment">
          <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
            <label for="comment" class="sr-only">{{ __('Twój komentarz') }}</label>
            <textarea id="comment" rows="6" wire:model="comment"
                      class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                      placeholder="{{ ('Twój komentarz...') }}" required></textarea>
          </div>

          <button type="submit" wire:loading.class="opacity-50" wire:target="addComment"
                  class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-emerald-700 rounded-lg focus:ring-4 focus:ring-emerald-200 hover:bg-emerald-800">
            <span wire:loading wire:target="addComment" class="inline-flex">
              <x-heroicon-o-arrow-path class="animate-spin w-4 h-4 mr-2"/>
            </span>

            <span  wire:loading wire:target="addComment">
              {{ __('Dodawanie komentarza...') }}
            </span>

            <span wire:loading.class="hidden" wire:target="addComment">
              {{ __('Dodaj komentarz') }}
            </span>
          </button>
        </form>
      @else
        <div class="mb-3 text-base bg-white rounded-lg">
          <p class="text-gray-500">{{ __('Musisz być zalogowany, aby dodać komentarz.') }}</p>
          <a href="{{ route('login', ['withReturn' => $post->getAttribute('slug')]) }}"
             class="inline-flex items-center py-2.5 px-4 mt-4 text-xs font-medium text-center text-white bg-emerald-700 rounded-lg focus:ring-4 focus:ring-emerald-200 hover:bg-emerald-800">
            {{ __('Zaloguj się') }}
          </a>
        </div>
      @endif

      @foreach ($post->getAttribute('comments')->sortByDesc('created_at') as $comment)
        <article class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg">
          <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
              <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold"><img
                        class="mr-2 w-6 h-6 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                        alt="{{ $comment->getAttribute('author')?->getAttribute('name') ?? __('Użytkownik nieznany') }}">
                {{ $comment->getAttribute('author')?->getAttribute('name') ?? __('Użytkownik nieznany') }}
              </p>
              <p class="text-sm text-gray-600">
                <time pubdate
                      datetime="{{ $comment->getAttribute('created_at')->format('Y-m-d') }}"
                      title="{{ $comment->getAttribute('created_at')->format('d F Y') }}">
                  {{ $comment->getAttribute('created_at')->format('d F Y') }}
                </time>
              </p>
            </div>

            @if (auth()->id() === $comment->getAttribute('user_id') || auth()->user()?->can('delete comments'))
              <button wire:click="deleteComment({{ $comment->getAttribute('id') }})"
                      class="inline-flex items-center p-2 text-sm font-medium text-center text-red-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                      type="button">
                <x-heroicon-o-trash class="w-5 h-5" wire:loading.class="hidden" wire:target="deleteComment({{ $comment->getAttribute('id') }})" />
                <x-heroicon-o-arrow-path class="animate-spin w-5 h-5 mr-2 text-red-500" wire:loading wire:target="deleteComment({{ $comment->getAttribute('id') }})" />
                <span class="sr-only">{{ __('Usuń komentarz') }}</span>
              </button>
            @endif
          </footer>

          <p class="text-gray-500">{{ $comment->getAttribute('content') }}</p>
        </article>
      @endforeach
    </div>
  </section>
</div>
