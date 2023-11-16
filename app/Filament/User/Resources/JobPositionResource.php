<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\JobPositionResource\Pages;
use App\Models\JobPosition;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JobPositionResource extends Resource
{
    protected static ?string $model = JobPosition::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required()->label('Title'),
                Forms\Components\Select::make('department_id')->nullable()->required()->label('Department')->relationship('department', 'name'),
                Forms\Components\Select::make('user_id')->nullable()->label('User')->relationship('user', 'name'),
                Forms\Components\Toggle::make('is_team_asset_mgr'),
                Forms\Components\Toggle::make('is_team_people_mgr'),
                Forms\Components\Toggle::make('is_project_mgr'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),

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
            'index' => Pages\ListJobPositions::route('/'),
            'create' => Pages\CreateJobPosition::route('/create'),
            'edit' => Pages\EditJobPosition::route('/{record}/edit'),
        ];
    }
}
