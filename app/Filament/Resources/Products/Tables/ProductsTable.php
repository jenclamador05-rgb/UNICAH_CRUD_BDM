<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('code')->label('Código')->searchable(),
                TextColumn::make('name')->label('Nombre')->searchable(),
                TextColumn::make('category.name')->label('Categoría'),
                TextColumn::make('brand.name')->label('Marca'),
                TextColumn::make('unit.abbreviation')->label('Unidad'),
                TextColumn::make('sale_price')->label('Precio venta')->money('HNL'),
                TextColumn::make('stock')->label('Stock'),
                IconColumn::make('status')->boolean(),
            ])
            ->filters([])
            ->recordActions([EditAction::make()])
            ->toolbarActions([
                BulkActionGroup::make([DeleteBulkAction::make()]),
            ]);
    }
}

