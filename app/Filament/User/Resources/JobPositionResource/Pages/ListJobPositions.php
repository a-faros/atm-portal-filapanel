<?php

namespace App\Filament\User\Resources\JobPositionResource\Pages;

use App\Filament\User\Resources\JobPositionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJobPositions extends ListRecords
{
    protected static string $resource = JobPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
