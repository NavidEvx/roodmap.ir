<?php

namespace App\Filament\Resources\Roadmaps\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RoadmapForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('roadmap_type_id')
                    ->relationship('type', 'name')
                    ->required(),
                TextInput::make('title')->required(),
                TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Textarea::make('description')->rows(3),
            ]);
    }
}
