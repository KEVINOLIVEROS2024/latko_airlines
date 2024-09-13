<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VuelosResource\Pages;
use App\Filament\Resources\VuelosResource\RelationManagers;
use App\Models\Vuelos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VuelosResource extends Resource
{
    protected static ?string $model = Vuelos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('ruta_id')
                    ->relationship('ruta', 'id')
                    ->required(),
                Forms\Components\Select::make('avion_id')
                    ->relationship('avion', 'modelo')
                    ->required(),
                Forms\Components\DateTimePicker::make('hora_salida')
                    ->required(),
                Forms\Components\DateTimePicker::make('hora_llegada')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('ruta.id')->label('Ruta'),
                Tables\Columns\TextColumn::make('avion.modelo')->label('Avión'),
                Tables\Columns\TextColumn::make('hora_salida')->label('Hora de salida'),
                Tables\Columns\TextColumn::make('hora_llegada')->label('Hora de llegada'),
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
            'index' => Pages\ListVuelos::route('/'),
            'create' => Pages\CreateVuelos::route('/create'),
            'edit' => Pages\EditVuelos::route('/{record}/edit'),
        ];
    }
}
