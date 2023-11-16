<?php

namespace App\Filament\User\Resources\UserLevelResource\Pages;

use App\Filament\User\Resources\UserLevelResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserLevel extends CreateRecord
{
    protected static string $resource = UserLevelResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
