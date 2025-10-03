<?php

namespace App\Filament\Resources\RoadmapCards;

use App\Filament\Resources\RoadmapCards\Pages\CreateRoadmapCard;
use App\Filament\Resources\RoadmapCards\Pages\EditRoadmapCard;
use App\Filament\Resources\RoadmapCards\Pages\ListRoadmapCards;
use App\Filament\Resources\RoadmapCards\Schemas\RoadmapCardForm;
use App\Filament\Resources\RoadmapCards\Tables\RoadmapCardsTable;
use App\Models\RoadmapCard;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RoadmapCardResource extends Resource
{
    protected static ?string $model = RoadmapCard::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'RoadmapCard';

    public static function form(Schema $schema): Schema
    {
        return RoadmapCardForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RoadmapCardsTable::configure($table);
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
            'index' => ListRoadmapCards::route('/'),
            'create' => CreateRoadmapCard::route('/create'),
            'edit' => EditRoadmapCard::route('/{record}/edit'),
        ];
    }
}
