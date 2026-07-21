<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Usuario')
                    ->required(),
                TextInput::make('description')
                    ->label('Descripción')
                    ->required(),
                TextInput::make('amount')
                    ->label('Monto')
                    ->numeric()
                    ->required(),
                DatePicker::make('expense_date')
                    ->label('Fecha de gasto')
                    ->required(),
            ]);
    }
}
