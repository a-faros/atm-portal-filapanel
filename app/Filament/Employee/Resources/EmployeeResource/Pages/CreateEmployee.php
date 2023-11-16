<?php

namespace App\Filament\Employee\Resources\EmployeeResource\Pages;

use App\Filament\Employee\Resources\EmployeeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
