<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Post;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class PostResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static $model = Post::class;

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\Grid::make([
                    Components\TextInput::make('title')
                        ->autofocus()
                        ->required()
                        ->max(255)
                        ->placeholder(__('Title')),
                    Components\Textarea::make('description')
                        ->placeholder(__('Description')),
                    Components\FileUpload::make('image')
                        ->image(),
                    Components\RichEditor::make('content')
                        ->placeholder(__('Content')),
                ])->columns(1),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Image::make('image'),
                Columns\Text::make('title')
                    ->primary()
                    ->searchable()
                    ->sortable(),
                Columns\Text::make('updated_at')
                    ->sortable()
                    ->label('Last updated at'),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListPosts::routeTo('/', 'index'),
            Pages\CreatePost::routeTo('/create', 'create'),
            Pages\EditPost::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
