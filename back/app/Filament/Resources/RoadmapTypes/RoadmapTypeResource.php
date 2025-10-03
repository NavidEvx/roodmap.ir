<?php

namespace App\Filament\Resources\RoadmapTypes;

use App\Filament\Resources\RoadmapTypes\Pages\CreateRoadmapType;
use App\Filament\Resources\RoadmapTypes\Pages\EditRoadmapType;
use App\Filament\Resources\RoadmapTypes\Pages\ListRoadmapTypes;
use App\Filament\Resources\RoadmapTypes\Schemas\RoadmapTypeForm;
use App\Filament\Resources\RoadmapTypes\Tables\RoadmapTypesTable;
use App\Models\RoadmapType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RoadmapTypeResource extends Resource
{
    protected static ?string $model = RoadmapType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'RoadmapType';

    public static function form(Schema $schema): Schema
    {
        return RoadmapTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RoadmapTypesTable::configure($table);
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
            'index' => ListRoadmapTypes::route('/'),
            'create' => CreateRoadmapType::route('/create'),
            'edit' => EditRoadmapType::route('/{record}/edit'),
        ];
    }
}
