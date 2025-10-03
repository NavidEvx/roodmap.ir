<?php

namespace App\Filament\Resources\RoadmapCards\Pages;

use App\Filament\Resources\RoadmapCards\RoadmapCardResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRoadmapCard extends EditRecord
{
    protected static string $resource = RoadmapCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
