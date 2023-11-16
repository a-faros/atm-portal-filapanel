<?php

namespace App\Filament\Employee\Resources\CommentResource\Pages;

use App\Filament\Employee\Resources\CommentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateComment extends CreateRecord
{
    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
