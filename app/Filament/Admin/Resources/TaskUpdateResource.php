<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TaskUpdateResource\Pages;
use App\Models\TaskUpdate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TaskUpdateResource extends Resource
{
    protected static ?string $model = TaskUpdate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('task_id')->nullable()->required()->label('Task')->relationship('task', 'name'),
                Forms\Components\Textarea::make('update')->required()->label('Update'),
                Forms\Components\TextInput::make('picture')->required()->label('Update'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('picture')->searchable(),
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
            'index' => Pages\ListTaskUpdates::route('/'),
            'create' => Pages\CreateTaskUpdate::route('/create'),
            'edit' => Pages\EditTaskUpdate::route('/{record}/edit'),
        ];
    }
}
