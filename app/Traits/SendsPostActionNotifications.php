<?php

namespace App\Traits;

use Filament\Notifications\Notification;

trait SendsPostActionNotifications
{
    /**
     * @param string|null $title
     * @param string $message
     * @return void
     */
    public function sendErrorNotification(string $title = null, string $message = ''): void
    {
        $title = $title ?? __('Wystąpił błąd!');

        Notification::make()
            ->title($title)
            ->body($message)
            ->color('danger')
            ->danger()
            ->send();
    }

    /**
     * @param string|null $title
     * @param string $message
     * @return void
     */
    public function sendSuccessNotification(string $title = null, string $message = ''): void
    {
        $title = $title ?? __('Operacja zakończona sukcesem');

        Notification::make()
            ->title($title)
            ->body($message)
            ->seconds(5)
            ->color('success')
            ->success()
            ->send();
    }
}
