<?php

namespace App\Filament\User\Resources\EmployeeResource\Pages;

use App\Filament\User\Resources\EmployeeResource;
use Filament\Resources\Pages\EditRecord;

class EditEmployee extends EditRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
