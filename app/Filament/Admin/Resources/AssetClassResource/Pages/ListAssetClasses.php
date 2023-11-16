<?php

namespace App\Filament\Admin\Resources\AssetClassResource\Pages;

use App\Filament\Admin\Resources\AssetClassResource;
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
