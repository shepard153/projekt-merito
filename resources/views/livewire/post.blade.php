<div class="mx-auto max-w-2xl items-start px-6 lg:max-w-7xl">
  <x-slot name="title">
      {{ $title }}
  </x-slot>

  <img class="mx-auto" src="{{ $post->getAttribute('image') }}" alt={{ $post->getAttribute('image') }}""/>

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
</div>
