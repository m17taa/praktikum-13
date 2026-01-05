<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),

            TextInput::make('name')
                ->required()
                ->maxLength(255),

            Textarea::make('description'),

            TextInput::make('price')
                ->numeric()
                ->required(),

            TextInput::make('stock')
                ->numeric()
                ->required(),

            Toggle::make('is_active')
                ->default(true),
        ]);
    }
}