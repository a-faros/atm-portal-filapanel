<?php

namespace App\Filament\Admin\Resources\MakerResource\Pages;

use App\Filament\Admin\Resources\MakerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMaker extends CreateRecord
{
    protected static string $resource = MakerResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
