<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('lastname')->required()->label('Lastname'),
                Forms\Components\TextInput::make('firstname')->required()->label('Firstname'),
                Forms\Components\TextInput::make('middlename'),
                Forms\Components\TextInput::make('username')->required()->label('Username'),
                Forms\Components\Select::make('user_id')->nullable()->relationship('user', 'name'),
                Forms\Components\Textarea::make('address')->label('Address'),
                Forms\Components\DatePicker::make('birth_date')->required()->label('Birthdate'),
                Forms\Components\DatePicker::make('date_hired')->required()->label('Date_hired'),
                Forms\Components\TextInput::make('picture'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lastname')->searchable(),
                Tables\Columns\TextColumn::make('firstname')->searchable(),
                Tables\Columns\TextColumn::make('middlename')->searchable(),
                Tables\Columns\TextColumn::make('username')->searchable(),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
