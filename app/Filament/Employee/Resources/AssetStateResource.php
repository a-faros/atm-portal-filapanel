<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\AssetStateResource\Pages;
use App\Models\AssetState;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AssetStateResource extends Resource
{
    protected static ?string $model = AssetState::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('state')->label('State'),
                Forms\Components\TextInput::make('substate')->required()->label('Substate'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('state')->searchable(),
                Tables\Columns\TextColumn::make('substate')->searchable(),
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
            'index' => Pages\ListAssetStates::route('/'),
            'create' => Pages\CreateAssetState::route('/create'),
            'edit' => Pages\EditAssetState::route('/{record}/edit'),
        ];
    }
}
