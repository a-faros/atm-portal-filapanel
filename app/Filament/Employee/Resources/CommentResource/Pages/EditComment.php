<?php

namespace App\Filament\Employee\Resources\CommentResource\Pages;

use App\Filament\Employee\Resources\CommentResource;
use Filament\Resources\Pages\EditRecord;

class EditComment extends EditRecord
{
    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
