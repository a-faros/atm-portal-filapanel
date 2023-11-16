<?php

namespace App\Filament\Admin\Resources\AssetStateResource\Pages;

use App\Filament\Admin\Resources\AssetStateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssetStates extends ListRecords
{
    protected static string $resource = AssetStateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
