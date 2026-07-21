<?php

namespace App\Filament\Resources\ActivityLogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ActivityLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Usuario')
                    ->required(),
                TextInput::make('module')
                    ->label('Módulo')
                    ->required(),
                TextInput::make('action')
                    ->label('Acción')
                    ->required(),
                Textarea::make('description')
                    ->label('Descripción'),
                TextInput::make('ip')
                    ->label('IP'),
            ]);
    }
}
