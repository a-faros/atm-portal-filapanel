<?php

namespace App\Filament\Employee\Resources\JobPositionResource\Pages;

use App\Filament\Employee\Resources\JobPositionResource;
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
