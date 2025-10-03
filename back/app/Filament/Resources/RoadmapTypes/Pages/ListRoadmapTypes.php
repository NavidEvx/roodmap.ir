<?php

namespace App\Filament\Resources\RoadmapTypes\Pages;

use App\Filament\Resources\RoadmapTypes\RoadmapTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRoadmapTypes extends ListRecords
{
    protected static string $resource = RoadmapTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
