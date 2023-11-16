<?php

namespace App\Filament\Admin\Resources\MakerResource\Pages;

use App\Filament\Admin\Resources\MakerResource;
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
