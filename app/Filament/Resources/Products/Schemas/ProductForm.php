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
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->required(),
                Select::make('unit_id')
                    ->relationship('unit', 'name')
                    ->required(),
                TextInput::make('code')
                    ->label('Código')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('name')
                    ->label('Nombre')
                    ->required(),
                Textarea::make('description')
                    ->label('Descripción'),
                TextInput::make('purchase_price')
                    ->label('Precio de compra')
                    ->numeric()
                    ->required(),
                TextInput::make('sale_price')
                    ->label('Precio de venta')
                    ->numeric()
                    ->required(),
                TextInput::make('stock')
                    ->numeric()
                    ->default(0)
                    ->required(),
                TextInput::make('minimum_stock')
                    ->label('Stock mínimo')
                    ->numeric()
                    ->default(5)
                    ->required(),
                Toggle::make('status')
                    ->default(true),
            ]);
    }
}
