<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.login')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div>
  <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
    {{ __('Zapomniałeś hasła? Nie ma problemu. Po prostu podaj nam swój adres e-mail, a wyślemy Ci link do resetowania hasła, który pozwoli Ci wybrać nowe.') }}
  </div>

  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')"/>

  <form wire:submit="sendPasswordResetLink">
    <!-- Email Address -->
    <div>
      <x-input-label for="email" :value="__('Email')"/>
      <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required
                    autofocus/>
      <x-input-error :messages="$errors->get('email')" class="mt-2"/>
    </div>

    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
         href="{{ route('home') }}" wire:navigate>
        {{ __('Powrót do strony głównej') }}
      </a>

      <x-primary-button class="ms-3">
        {{ __('Wyślij link resetujący') }}
      </x-primary-button>
    </div>
  </form>
</div>
