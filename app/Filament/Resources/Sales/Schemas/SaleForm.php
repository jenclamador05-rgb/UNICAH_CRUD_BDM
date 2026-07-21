<?php

namespace App\Filament\Resources\Sales\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;

class SaleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->relationship('customer', 'first_name')
                    ->label('Cliente')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Usuario')
                    ->required(),
                DatePicker::make('sale_date')
                    ->label('Fecha de venta')
                    ->required(),
                TextInput::make('subtotal')
                    ->numeric()
                    ->required(),
                TextInput::make('tax')
                    ->label('Impuesto')
                    ->numeric()
                    ->required(),
                TextInput::make('total')
                    ->numeric()
                    ->required(),
            ]);
    }
}
