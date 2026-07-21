<?php

namespace App\Filament\Resources\PurchaseOrders\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;

class PurchaseOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('supplier_id')
                    ->relationship('supplier', 'company_name')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Usuario')
                    ->required(),
                DatePicker::make('purchase_date')
                    ->label('Fecha de compra')
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
