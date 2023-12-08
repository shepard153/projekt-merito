<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Volt\Component;

new #[Layout('layouts.login')] class extends Component {
    public LoginForm $form;

    #[Url]
    public string $withReturn = '';

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        if ($this->withReturn) {
            $this->redirect(
                route('post.show', ['slug'=> $this->withReturn]),
                navigate: true
            );
        } else {
            $this->redirect(
                session('url.intended', RouteServiceProvider::HOME),
                navigate: true
            );
        }
    }
}; ?>

<div>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')"/>

  <form wire:submit="login">
    <!-- Email Address -->
    <div>
      <x-input-label for="email" :value="__('Email')"/>
      <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required
                    autofocus autocomplete="username"/>
      <x-input-error :messages="$errors->get('email')" class="mt-2"/>
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Hasło')"/>

      <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="current-password"/>

      <x-input-error :messages="$errors->get('password')" class="mt-2"/>
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
      <label for="remember" class="inline-flex items-center">
        <input wire:model="form.remember" id="remember" type="checkbox"
               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ms-2 text-sm text-gray-600">{{ __('Zapamiętaj') }}</span>
      </label>
    </div>

    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
         href="{{ route('home') }}" wire:navigate>
        {{ __('Strony główna') }}
      </a>

      @if (Route::has('password.request'))
        <a class="ms-3 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
           href="{{ route('password.request') }}" wire:navigate>
          {{ __('Zapomniane hasło?') }}
        </a>
      @endif

      <x-primary-button class="ms-3">
        {{ __('Zaloguj') }}
      </x-primary-button>
    </div>
  </form>
</div>
