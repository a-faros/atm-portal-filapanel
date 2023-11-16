<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\AssetClassResource\Pages;
use App\Models\AssetClass;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AssetClassResource extends Resource
{
    protected static ?string $model = AssetClass::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('class')->numeric()->required()->label('Class'),
                Forms\Components\TextInput::make('description')->required()->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')->searchable(),
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
            'index' => Pages\ListAssetClasses::route('/'),
            'create' => Pages\CreateAssetClass::route('/create'),
            'edit' => Pages\EditAssetClass::route('/{record}/edit'),
        ];
    }
}
