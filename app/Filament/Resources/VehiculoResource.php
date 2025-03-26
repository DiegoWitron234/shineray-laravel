<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehiculoResource\Pages;
use App\Filament\Resources\VehiculoResource\RelationManagers;
use App\Models\Vehiculo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehiculoResource extends Resource
{
    protected static ?string $model = Vehiculo::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('modelo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('precio')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('descripcion')
                    ->rows(3)
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('imagen')
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory(''),
                // Nuevo campo para la imagen de catálogo
                Forms\Components\FileUpload::make('catalogo')
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory(''),
                Forms\Components\FileUpload::make('detalles')
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory(''),
                Forms\Components\TextInput::make('carga')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('motor')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('rendimiento')
                    ->numeric()
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('modelo')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('precio')->sortable(),
            ])
            ->filters([
                // Puedes agregar filtros si lo deseas
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
            'index' => Pages\ListVehiculos::route('/'),
            'create' => Pages\CreateVehiculo::route('/create'),
            'edit' => Pages\EditVehiculo::route('/{record}/edit'),
        ];
    }
}
