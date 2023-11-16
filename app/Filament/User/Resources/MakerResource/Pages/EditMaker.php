<?php

namespace App\Filament\User\Resources\MakerResource\Pages;

use App\Filament\User\Resources\MakerResource;
use Filament\Resources\Pages\EditRecord;

class EditMaker extends EditRecord
{
    protected static string $resource = MakerResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
