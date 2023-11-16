<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\TaskResource\Pages;
use App\Models\Task;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('to_do')->required()->label('To_do'),
                Forms\Components\Select::make('task_status')->nullable()->required()->label('Task_status')->relationship('taskStatus', 'name'),
                Forms\Components\Select::make('activity_id')->nullable()->label('Activity')->relationship('activity', 'name'),
                Forms\Components\Select::make('process_id')->nullable()->label('Process')->relationship('process', 'name'),
                Forms\Components\Select::make('team_id')->nullable()->required()->label('Team')->relationship('team', 'name'),
                Forms\Components\Select::make('responsible')->nullable()->label('Responsible')->relationship('responsible', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('to_do')->searchable(),

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
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }
}
