<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehiculoResource\Pages;
use App\Models\Vehiculo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VehiculoResource extends Resource
{
    protected static ?string $model = Vehiculo::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipo')
                    ->maxLength(255),
                Forms\Components\TextInput::make('modelo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('precio')
                    ->numeric(),
                Forms\Components\Textarea::make('descripcion')
                    ->rows(3)
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('imagen')
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory('imagen_inicio'),
                // Imagen para catálogo
                Forms\Components\FileUpload::make('catalogo')
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory('catalogo'),
                // Imagen con datos (detalles)
                Forms\Components\FileUpload::make('detalles')
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory('detalles'),
                // Múltiples imágenes de detalles/información
                Forms\Components\FileUpload::make('detalles_imagenes')
                    ->multiple()
                    ->image()
                    ->disk('vehiculos_public')
                    ->directory('detalles_imagenes')
                    ->maxFiles(10)
                    ->reorderable(),

                Forms\Components\TextInput::make('carga')
                    ->numeric(),
                Forms\Components\TextInput::make('motor')
                    ->numeric(),
                Forms\Components\TextInput::make('rendimiento')
                    ->numeric(),
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
