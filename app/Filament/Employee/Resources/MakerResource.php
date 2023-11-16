<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\MakerResource\Pages;
use App\Models\Maker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MakerResource extends Resource
{
    protected static ?string $model = Maker::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('make')->required()->label('Make'),
                Forms\Components\TextInput::make('model')->required()->label('Model'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('make')->searchable(),
                Tables\Columns\TextColumn::make('model')->searchable(),
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
            'index' => Pages\ListMakers::route('/'),
            'create' => Pages\CreateMaker::route('/create'),
            'edit' => Pages\EditMaker::route('/{record}/edit'),
        ];
    }
}
