<?php

namespace App\Filament\Admin\Resources\UserLevelResource\Pages;

use App\Filament\Admin\Resources\UserLevelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserLevels extends ListRecords
{
    protected static string $resource = UserLevelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
