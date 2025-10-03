<?php

namespace App\Filament\Resources\RoadmapCards\Pages;

use App\Filament\Resources\RoadmapCards\RoadmapCardResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRoadmapCards extends ListRecords
{
    protected static string $resource = RoadmapCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
