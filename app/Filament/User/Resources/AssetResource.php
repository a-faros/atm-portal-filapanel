<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\AssetResource\Pages;
use App\Models\Asset;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('asset_number')->numeric()->required()->label('Asset_number'),
                Forms\Components\Select::make('asset_class_id')->nullable()->required()->label('Asset_class')->relationship('assetClass', 'name'),
                Forms\Components\TextInput::make('short_description')->required()->label('Short_description'),
                Forms\Components\TextInput::make('description')->label('Description'),
                Forms\Components\Select::make('object_id')->nullable()->required()->label('Object')->relationship('object', 'name'),
                Forms\Components\Select::make('make_id')->nullable()->required()->label('Make')->options([]),
                Forms\Components\Select::make('asset_state_id')->nullable()->label('Asset_state')->relationship('assetState', 'name'),
                Forms\Components\TextInput::make('maintained_by'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('short_description')->searchable(),
                Tables\Columns\TextColumn::make('description')->searchable(),
                Tables\Columns\TextColumn::make('maintained_by')->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}
