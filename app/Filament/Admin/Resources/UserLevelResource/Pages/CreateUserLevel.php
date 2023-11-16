<?php

namespace App\Filament\Admin\Resources\UserLevelResource\Pages;

use App\Filament\Admin\Resources\UserLevelResource;
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
