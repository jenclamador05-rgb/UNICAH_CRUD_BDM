<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
             TextInput::make('company_name')
                    ->label('Nombre de la empresa')
                    ->required(),
                TextInput::make('contact_name')
                    ->label('Nombre de contacto'),
                TextInput::make('phone')
                    ->label('Teléfono')
                    ->tel(),
                TextInput::make('email')
                    ->email(),
                TextInput::make('address')
                    ->label('Dirección'),
                Toggle::make('status')
                    ->default(true),
            ]);
    }
}
