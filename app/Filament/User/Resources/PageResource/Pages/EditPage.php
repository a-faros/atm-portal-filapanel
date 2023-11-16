<?php

namespace App\Filament\User\Resources\PageResource\Pages;

use App\Filament\User\Resources\PageResource;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
