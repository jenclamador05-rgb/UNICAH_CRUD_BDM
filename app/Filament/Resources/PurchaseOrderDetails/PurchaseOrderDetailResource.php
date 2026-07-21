<?php

namespace App\Filament\Resources\PurchaseOrderDetails;

use App\Filament\Resources\PurchaseOrderDetails\Pages\CreatePurchaseOrderDetail;
use App\Filament\Resources\PurchaseOrderDetails\Pages\EditPurchaseOrderDetail;
use App\Filament\Resources\PurchaseOrderDetails\Pages\ListPurchaseOrderDetails;
use App\Filament\Resources\PurchaseOrderDetails\Schemas\PurchaseOrderDetailForm;
use App\Filament\Resources\PurchaseOrderDetails\Tables\PurchaseOrderDetailsTable;
use App\Models\PurchaseOrderDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PurchaseOrderDetailResource extends Resource
{
    protected static ?string $model = PurchaseOrderDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return PurchaseOrderDetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PurchaseOrderDetailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPurchaseOrderDetails::route('/'),
            'create' => CreatePurchaseOrderDetail::route('/create'),
            'edit' => EditPurchaseOrderDetail::route('/{record}/edit'),
        ];
    }
}
