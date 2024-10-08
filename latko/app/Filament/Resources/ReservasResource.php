<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservasResource\Pages;
use App\Filament\Resources\ReservasResource\RelationManagers;
use App\Models\Reservas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservasResource extends Resource
{
    protected static ?string $model = Reservas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('cliente_id')
                    ->relationship('cliente', 'nombre')
                    ->required(),
                Forms\Components\Select::make('vuelo_id')
                    ->relationship('vuelo', 'id')
                    ->required(),
                Forms\Components\TextInput::make('asientos_reservados')
                    ->required(),
                Forms\Components\Select::make('estado')
                    ->options([
                        'confirmado' => 'Confirmado',
                        'cancelado' => 'Cancelado',
                    ])
                    ->required(),
           ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('cliente.nombre')->label('Cliente'),
                Tables\Columns\TextColumn::make('vuelo.id')->label('Vuelo'),
                Tables\Columns\TextColumn::make('asientos_reservados'),
                Tables\Columns\TextColumn::make('estado'),
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
            'index' => Pages\ListReservas::route('/'),
            'create' => Pages\CreateReservas::route('/create'),
            'edit' => Pages\EditReservas::route('/{record}/edit'),
        ];
    }
}
