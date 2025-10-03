<?php

namespace App\Filament\Resources\RoadmapCards\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RoadmapCardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('roadmap_step_id')
                    ->relationship('step', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle')
                    ->default(null),
                TextInput::make('icon')
                    ->default(null),
                TextInput::make('bg_color')
                    ->default(null),
            ]);
    }
}
