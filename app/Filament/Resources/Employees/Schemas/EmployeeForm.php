<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                  Select::make('position_id')
                    ->relationship('position', 'name')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Usuario del sistema')
                    ->searchable()
                    ->preload(),
                TextInput::make('dni')
                    ->label('Identidad')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(20),
                TextInput::make('first_name')
                    ->label('Nombres')
                    ->required(),
                TextInput::make('last_name')
                    ->label('Apellidos')
                    ->required(),
                TextInput::make('phone')
                    ->label('Teléfono')
                    ->tel(),
                TextInput::make('email')
                    ->email(),
                TextInput::make('address')
                    ->label('Dirección'),
                DatePicker::make('birth_date')
                    ->label('Fecha de nacimiento'),
                TextInput::make('salary')
                    ->label('Salario')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Toggle::make('status')
                    ->default(true),
            ]);
    }
}
