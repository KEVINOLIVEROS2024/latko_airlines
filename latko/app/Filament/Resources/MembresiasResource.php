<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembresiasResource\Pages;
use App\Filament\Resources\MembresiasResource\RelationManagers;
use App\Models\Membresias;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembresiasResource extends Resource
{
    protected static ?string $model = Membresias::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nombre')
                ->required()
                ->maxLength(100),
            Forms\Components\TextInput::make('descripcion')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('puntos_requeridos')
                ->required()
                ->numeric(),
        
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('descripcion'),
                Tables\Columns\TextColumn::make('puntos_requeridos'),
           
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
            'index' => Pages\ListMembresias::route('/'),
            'create' => Pages\CreateMembresias::route('/create'),
            'edit' => Pages\EditMembresias::route('/{record}/edit'),
        ];
    }
}
