<?php

namespace App\Filament\Employee\Resources\JobPositionResource\Pages;

use App\Filament\Employee\Resources\JobPositionResource;
use Filament\Resources\Pages\EditRecord;

class EditJobPosition extends EditRecord
{
    protected static string $resource = JobPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
