<?php

namespace App\Filament\Employee\Resources\PostResource\Pages;

use App\Filament\Employee\Resources\PostResource;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
