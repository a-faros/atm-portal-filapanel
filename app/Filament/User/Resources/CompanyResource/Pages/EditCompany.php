<?php

namespace App\Filament\User\Resources\CompanyResource\Pages;

use App\Filament\User\Resources\CompanyResource;
use Filament\Resources\Pages\EditRecord;

class EditCompany extends EditRecord
{
    protected static string $resource = CompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
