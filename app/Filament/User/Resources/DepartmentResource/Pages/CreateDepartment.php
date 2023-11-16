<?php

namespace App\Filament\User\Resources\DepartmentResource\Pages;

use App\Filament\User\Resources\DepartmentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
