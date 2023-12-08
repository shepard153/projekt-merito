<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-6 py-6 md:gap-8 md:py-10">
  <div class="xl:gap-18 flex items-center gap-16">
    <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 hover:-translate-y-1 hover:opacity-70 focus-visible:ring-offset-2">
      <img class="lg:h-18 lg:w-18 h-12 w-12 sm:h-16 sm:w-16 scale-150" width="87" height="86"
           src="https://img.freepik.com/premium-vector/letter-s-thunder-logo-design_8586-128.jpg?w=2000" alt="Logo">
    </a>
    <div class="hidden items-center gap-4 sm:flex md:gap-8">
      <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600">
        Strona główna
      </x-nav-link>

      <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')" wire:navigate
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600">
        Blog
      </x-nav-link>
    </div>
  </div>
  <div class="xl:gap-18 flex items-center gap-16">
    <div class="hidden items-center gap-4 md:gap-8 lg:flex">
      @if (auth()->user()?->can('access panel'))
        <x-nav-link :href="route('panel')"
                    class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600"
        >
          Panel
        </x-nav-link>
      @elseif (auth()->user())
        <x-nav-link wire:click="logout"
                    class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600"
        >
          Wyloguj
        </x-nav-link>
      @else
        <x-nav-link :href="route('login')"
                    class="cursor-pointer inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600"
        >
          Zaloguj
        </x-nav-link>

        <x-nav-link :href="route('register')"
                    class="cursor-pointer inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600"
        >
          Zarejestruj
        </x-nav-link>
      @endif
    </div>
  </div>
</div>