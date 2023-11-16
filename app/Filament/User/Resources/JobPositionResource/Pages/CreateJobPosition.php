<?php

namespace App\Filament\User\Resources\JobPositionResource\Pages;

use App\Filament\User\Resources\JobPositionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJobPosition extends CreateRecord
{
    protected static string $resource = JobPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
