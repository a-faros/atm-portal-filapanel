<?php

namespace App\Filament\Employee\Resources\CompanyResource\Pages;

use App\Filament\Employee\Resources\CompanyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCompany extends CreateRecord
{
    protected static string $resource = CompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
