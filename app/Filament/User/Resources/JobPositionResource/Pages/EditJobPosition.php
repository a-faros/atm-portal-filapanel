<?php

namespace App\Filament\User\Resources\JobPositionResource\Pages;

use App\Filament\User\Resources\JobPositionResource;
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
