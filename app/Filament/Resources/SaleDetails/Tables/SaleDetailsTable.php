<?php

namespace App\Filament\Resources\SaleDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SaleDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('sale.id')->label('Venta #'),
                TextColumn::make('product.name')->label('Producto')->searchable(),
                TextColumn::make('quantity')->label('Cantidad'),
                TextColumn::make('price')->money('HNL'),
                TextColumn::make('subtotal')->money('HNL'),
            ])
            ->filters([])
            ->recordActions([EditAction::make()])
            ->toolbarActions([
                BulkActionGroup::make([DeleteBulkAction::make()]),
            ]);
    }
}
