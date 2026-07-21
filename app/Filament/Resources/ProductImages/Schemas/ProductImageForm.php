<?php

namespace App\Filament\Resources\ProductImages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class ProductImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required(),
                FileUpload::make('image')
                    ->label('Imagen')
                    ->image()
                    ->directory('product-images')
                    ->required(),
            ]);
    }
}