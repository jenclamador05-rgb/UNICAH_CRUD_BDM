<?php

namespace App\Filament\Resources\EmployeePositions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class EmployeePositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                TextInput::make('description'),
            ]);
    }
}
