<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\ObjectResource\Pages;
use App\Models\Object;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ObjectResource extends Resource
{
    protected static ?string $model = Object::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')->numeric()->required()->label('Type'),
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
            'index' => Pages\ListObjects::route('/'),
            'create' => Pages\CreateObject::route('/create'),
            'edit' => Pages\EditObject::route('/{record}/edit'),
        ];
    }
}
