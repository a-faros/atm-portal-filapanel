<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\UserLevelResource\Pages;
use App\Models\UserLevel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserLevelResource extends Resource
{
    protected static ?string $model = UserLevel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
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
            'index' => Pages\ListUserLevels::route('/'),
            'create' => Pages\CreateUserLevel::route('/create'),
            'edit' => Pages\EditUserLevel::route('/{record}/edit'),
        ];
    }
}
