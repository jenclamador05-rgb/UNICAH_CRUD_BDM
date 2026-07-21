<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('sale_id')
                    ->relationship('sale', 'id')
                    ->label('Venta')
                    ->required(),
                Select::make('method')
                    ->label('Método de pago')
                    ->options([
                        'Efectivo' => 'Efectivo',
                        'Tarjeta' => 'Tarjeta',
                        'Transferencia' => 'Transferencia',
                    ])
                    ->required(),
                TextInput::make('amount')
                    ->label('Monto')
                    ->numeric()
                    ->required(),
                DateTimePicker::make('payment_date')
                    ->label('Fecha de pago')
                    ->required(),
            ]);
    }
}
