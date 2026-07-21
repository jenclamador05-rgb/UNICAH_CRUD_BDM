<?php

namespace App\Filament\Resources\PurchaseOrderDetails\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class PurchaseOrderDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('purchase_order_id')
                    ->relationship('purchaseOrder', 'id')
                    ->label('Orden de compra')
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