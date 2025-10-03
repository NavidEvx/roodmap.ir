<?php

namespace App\Filament\Resources\RoadmapTypes\Pages;

use App\Filament\Resources\RoadmapTypes\RoadmapTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRoadmapType extends EditRecord
{
    protected static string $resource = RoadmapTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
