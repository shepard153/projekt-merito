<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Usuń konto') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Po usunięciu konta wszystkie jego zasoby i dane zostaną trwale usunięte. Przed usunięciem konta pobierz wszystkie dane lub informacje, które chcesz zachować.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Usuń konto') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="deleteUser" class="p-6">

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Czy na pewno chcesz usunąć swoje konto?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Po usunięciu konta wszystkie jego zasoby i dane zostaną trwale usunięte. Wpisz swoje hasło, aby potwierdzić, że chcesz trwale usunąć swoje konto.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Hasło') }}" class="sr-only" />

                <x-text-input
                    wire:model="password"
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Hasło') }}"
                />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Anuluj') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Usuń konto') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
