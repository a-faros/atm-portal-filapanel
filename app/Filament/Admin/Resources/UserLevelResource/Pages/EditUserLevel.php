<?php

namespace App\Filament\Admin\Resources\UserLevelResource\Pages;

use App\Filament\Admin\Resources\UserLevelResource;
use Filament\Resources\Pages\EditRecord;

class EditUserLevel extends EditRecord
{
    protected static string $resource = UserLevelResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
