<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RutasResource\Pages;
use App\Filament\Resources\RutasResource\RelationManagers;
use App\Models\Rutas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RutasResource extends Resource
{
    protected static ?string $model = Rutas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('salida_aeropuerto_id')
                    ->relationship('salidaAeropuerto', 'nombre')
                    ->required(),
                Forms\Components\Select::make('llegada_aeropuerto_id')
                    ->relationship('llegadaAeropuerto', 'nombre')
                    ->required(),
                Forms\Components\TextInput::make('distancia')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('salidaAeropuerto.nombre')->label('Aeropuerto de Salida'),
                Tables\Columns\TextColumn::make('llegadaAeropuerto.nombre')->label('Aeropuerto de Llegada'),
                Tables\Columns\TextColumn::make('distancia'),
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
            'index' => Pages\ListRutas::route('/'),
            'create' => Pages\CreateRutas::route('/create'),
            'edit' => Pages\EditRutas::route('/{record}/edit'),
        ];
    }
}
