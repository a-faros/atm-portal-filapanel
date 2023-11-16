<?php

namespace App\Filament\User\Resources\AssetClassResource\Pages;

use App\Filament\User\Resources\AssetClassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssetClasses extends ListRecords
{
    protected static string $resource = AssetClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
