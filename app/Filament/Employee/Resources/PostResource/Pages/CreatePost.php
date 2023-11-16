<?php

namespace App\Filament\Employee\Resources\PostResource\Pages;

use App\Filament\Employee\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
