<?php

namespace App\Filament\Employee\Resources\DepartmentResource\Pages;

use App\Filament\Employee\Resources\DepartmentResource;
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
