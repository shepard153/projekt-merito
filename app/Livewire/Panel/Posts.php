<?php

namespace App\Livewire\Panel;

use App\Models\Post;
use App\Traits\SendsPostActionNotifications;
use Exception;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Posts extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    use SendsPostActionNotifications;

    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.panel.posts');
    }

    /**
     * @param Table $table
     * @return Table
     * @throws Exception
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(Post::query())
            ->defaultSort('created_at', 'desc')
            ->emptyStateDescription('')
            ->columns([
                TextColumn::make('title')
                    ->label(__('Tytuł posta'))
                    ->limit(30),
                TextColumn::make('slug')
                    ->limit(30),
                TextColumn::make('author.name')
                    ->label(__('Autor')),
                IconColumn::make('status')
                    ->label(__('Status'))
                    ->alignCenter()
                    ->icon(fn (string $state): string => match ($state) {
                        'draft'     => 'heroicon-o-pencil',
                        'published' => 'heroicon-o-check-circle',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'draft'     => 'info',
                        'published' => 'success',
                        default     => 'gray',
                    })
                    ->tooltip(fn (string $state): string => match ($state) {
                        'draft'     => __('Szkic'),
                        'published' => __('Opublikowany'),
                    }),
                IconColumn::make('is_featured')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label(__('Utworzono'))
            ])
            ->filters([
                SelectFilter::make('author_id')
                    ->label(__('Autor'))
                    ->searchable()
                    ->preload()
                    ->relationship('author', 'name'),
                SelectFilter::make('status')
                    ->options([
                        'draft'     => __('Szkic'),
                        'published' => __('Opublikowany'),
                    ])
            ])
            ->headerActions([
                CreateAction::make('createPost')
                    ->label(__('Utwórz post'))
                    ->color('success')
                    ->form($this->postFormFields())
                    ->mutateFormDataUsing(function (array $data): array {
                        return $this->mutateFormData($data);
                    })
                    ->createAnother(false)
            ])
            ->actions([
                Action::make('viewPost')
                    ->label(__('Podgląd'))
                    ->icon('heroicon-o-eye')
                    ->color('primary')
                    ->url(fn (Post $post) => route('post.show', $post->slug)),
                ActionGroup::make([
                    EditAction::make('editPost')
                        ->label(__('Edytuj'))
                        ->icon('heroicon-o-pencil')
                        ->color('primary')
                        ->form($this->postFormFields())
                        ->fillForm(function (Post $post) {
                            $data = $post->toArray();
                            $data['publish'] = $post->getAttribute('status') === 'published';

                            return $data;
                        })
                        ->mutateFormDataUsing(function (array $data): array {
                            return $this->mutateFormData($data);
                        }),
                    DeleteAction::make('deletePost')
                        ->label(__('Usuń'))
                        ->icon('heroicon-o-trash')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->modalDescription(__('Czy na pewno chcesz usunąć ten post?'))
                ])->link()
                ->label(__('Akcje'))
            ]);
    }

    /**
     * @return array
     */
    private function postFormFields(): array
    {
        return [
            TextInput::make('title')
                ->label(__('Tytuł'))
                ->required()
                ->maxLength(255),
            FileUpload::make('image')
                ->label(__('Zdjęcie główne'))
                ->image()
                ->disk('public')
                ->directory('post-images')
                ->required(),
            RichEditor::make('content')
                ->label(__('Treść'))
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('post-images')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
            Checkbox::make('is_featured')
                ->label(__('Oznacz jako promowany'))
                ->default(false),
            Checkbox::make('publish')
                ->label(__('Opublikuj'))
                ->default(false),
        ];
    }

    /**
     * @param array $data
     * @return array
     */
    private function mutateFormData(array $data): array
    {
        $data['slug'] = Str::slug($data['title']);
        $data['author_id'] = auth()->id();
        $data['status'] = $data['publish'] ? 'published' : 'draft';

        return $data;
    }
}
