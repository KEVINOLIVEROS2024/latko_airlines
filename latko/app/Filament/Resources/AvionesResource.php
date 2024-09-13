<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvionesResource\Pages;
use App\Filament\Resources\AvionesResource\RelationManagers;
use App\Models\Aviones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvionesResource extends Resource
{
    protected static ?string $model = Aviones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('numero_de_registro')
                ->required()
                ->unique()
                ->maxLength(20),
            Forms\Components\TextInput::make('modelo')
                ->required()
                ->maxLength(50),
            Forms\Components\TextInput::make('capacidad')
                ->required()
                ->numeric(),
        
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('numero_de_registro'),
                Tables\Columns\TextColumn::make('modelo'),
                Tables\Columns\TextColumn::make('capacidad'),
         
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAviones::route('/'),
            'create' => Pages\CreateAviones::route('/create'),
            'edit' => Pages\EditAviones::route('/{record}/edit'),
        ];
    }
}
