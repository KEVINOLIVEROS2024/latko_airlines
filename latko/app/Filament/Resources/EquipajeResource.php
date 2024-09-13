<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipajeResource\Pages;
use App\Filament\Resources\EquipajeResource\RelationManagers;
use App\Models\Equipaje;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EquipajeResource extends Resource
{
    protected static ?string $model = Equipaje::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('reserva_id')
                ->relationship('reserva', 'id')
                ->required(),
            Forms\Components\TextInput::make('peso')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('tipo')
                ->required()
                ->maxLength(255),
      
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('reserva.id')->label('Reserva ID'),
                Tables\Columns\TextColumn::make('peso')->suffix(' kg'),
                Tables\Columns\TextColumn::make('tipo'),
           
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
            'index' => Pages\ListEquipajes::route('/'),
            'create' => Pages\CreateEquipaje::route('/create'),
            'edit' => Pages\EditEquipaje::route('/{record}/edit'),
        ];
    }
}
