<?php

namespace App\Livewire\Panel;

use App\Models\User;
use App\Traits\SendsPostActionNotifications;
use Exception;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Users extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    use SendsPostActionNotifications;

    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.panel.users');
    }

    /**
     * @param Table $table
     * @return Table
     * @throws Exception
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(User::withTrashed()->whereHas('roles', fn ($query) => $query->where('name', 'user')))
            ->defaultSort('created_at', 'desc')
            ->emptyStateDescription('')
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')
                    ->label(__('Imię'))
                    ->searchable()
                    ->limit(30),
                TextColumn::make('email')
                    ->label(__('Autor')),
                TextColumn::make('created_at')
                    ->label(__('Data rejestracji')),
                IconColumn::make('deleted_at')
                    ->label(__('Status'))
                    ->alignCenter()
                    ->icon(fn (string $state): string => match (gettype($state)) {
                        'string' => 'heroicon-o-trash',
                        default  => '',
                    })
                    ->color(fn (string $state): string => match (gettype($state)) {
                        'string' => 'danger',
                        default  => '',
                    })
                    ->tooltip(fn (?string $state): string => match (gettype($state)) {
                        'string' => __('Usunięty'),
                        default  => '',
                    }),
            ])
            ->actions([
                DeleteAction::make('deleteUser')
                    ->label(__('Usuń'))
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->modalHeading(fn (User $user): string => __('Usuń :name', ['name' => $user->getAttribute('name')])),
                RestoreAction::make('restoreUser')
                    ->color('success')
                    ->record(fn (User $user): User => $user)
                    ->modalHeading(fn (User $user): string => __('Przywróć :name', ['name' => $user->getAttribute('name')])),
            ]);
    }
}
