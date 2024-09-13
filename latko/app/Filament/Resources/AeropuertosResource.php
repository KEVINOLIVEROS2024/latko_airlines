<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AeropuertosResource\Pages;
use App\Filament\Resources\AeropuertosResource\RelationManagers;
use App\Models\Aeropuertos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AeropuertosResource extends Resource
{
    protected static ?string $model = Aeropuertos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('codigo')
                ->required()
                ->maxLength(10),
            Forms\Components\TextInput::make('nombre')
                ->required()
                ->maxLength(100),
            Forms\Components\TextInput::make('ciudad')
                ->required()
                ->maxLength(50),
            Forms\Components\TextInput::make('pais')
                ->required()
                ->maxLength(50),
       
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('codigo'),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('ciudad'),
                Tables\Columns\TextColumn::make('pais'),
           
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
            'index' => Pages\ListAeropuertos::route('/'),
            'create' => Pages\CreateAeropuertos::route('/create'),
            'edit' => Pages\EditAeropuertos::route('/{record}/edit'),
        ];
    }
}
