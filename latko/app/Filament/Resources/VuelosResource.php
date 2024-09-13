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
                Forms\Components\Select::make('route_id')
                ->relationship('route', 'departure_airport')
                ->required(),
            Forms\Components\Select::make('aircraft_id')
                ->relationship('aircraft', 'model')
                ->required(),
            Forms\Components\DateTimePicker::make('departure_time')
                ->required(),
            Forms\Components\DateTimePicker::make('arrival_time')
                ->required(),
      
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('route.departureAirport.name')->label('Departure Airport'),
                Tables\Columns\TextColumn::make('route.arrivalAirport.name')->label('Arrival Airport'),
                Tables\Columns\TextColumn::make('aircraft.model'),
                Tables\Columns\TextColumn::make('departure_time'),
                Tables\Columns\TextColumn::make('arrival_time'),
            
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
