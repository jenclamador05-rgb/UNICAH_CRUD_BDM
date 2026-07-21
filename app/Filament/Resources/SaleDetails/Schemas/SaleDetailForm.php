<?php

namespace App\Filament\Resources\SaleDetails\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class SaleDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('sale_id')
                    ->relationship('sale', 'id')
                    ->label('Venta')
                    ->required(),
                Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required(),
                TextInput::make('quantity')
                    ->label('Cantidad')
                    ->numeric()
                    ->required(),
                TextInput::make('price')
                    ->label('Precio')
                    ->numeric()
                    ->required(),
                TextInput::make('subtotal')
                    ->numeric()
                    ->required(),
            ]);
    }
}