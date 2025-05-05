<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SucursalResource\Pages;
use App\Filament\Resources\SucursalResource\RelationManagers;
use App\Models\Sucursal;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SucursalResource extends Resource
{
    protected static ?string $model = Sucursal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Catálogos';
    //protected static ?string $navigationIcon = 'heroicon-o-location-marker';
    protected static ?string $navigationLabel = 'Sucursales';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),

                TextInput::make('correo')
                    ->label('Correo electrónico')
                    ->email()
                    ->maxLength(255),

                TextInput::make('telefono')
                    ->label('Teléfono')
                    ->tel()
                    ->maxLength(50),

                TextInput::make('codigo_postal')
                    ->label('Código Postal')
                    ->maxLength(10),

                TextInput::make('direccion')
                    ->label('Dirección')
                    ->maxLength(500),

                TextInput::make('latitud')
                    ->label('Latitud')
                    ->required()
                    ->numeric()
                    ->step('0.0000001')
                    ->placeholder('19.432608'),

                TextInput::make('longitud')
                    ->label('Longitud')
                    ->required()
                    ->numeric()
                    ->step('0.0000001')
                    ->placeholder('-99.133209'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('nombre')->label('Nombre')->searchable()->sortable(),
                TextColumn::make('correo')->label('Correo'),
                TextColumn::make('telefono')->label('Teléfono'),
                TextColumn::make('codigo_postal')->label('C.P.'),
                TextColumn::make('direccion')->label('Dirección')->limit(50),
                //TextColumn::make('latitud')->label('Latitud')->sortable(),
                //TextColumn::make('longitud')->label('Longitud')->sortable(),
                TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime('d/m/Y H:i'),
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
            'index' => Pages\ListSucursals::route('/'),
            'create' => Pages\CreateSucursal::route('/create'),
            'edit' => Pages\EditSucursal::route('/{record}/edit'),
        ];
    }
}
