<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Campo opcional para el título o descripción breve
                Forms\Components\TextInput::make('titulo')
                    ->label('Título')
                    ->maxLength(255),
                // Campo para la imagen: se usará FileUpload y se guardará en la carpeta "banners"
                Forms\Components\FileUpload::make('imagen')
                    ->label('Imagen del Banner')
                    ->image()
                    ->disk('banners_public')
                    ->directory('')
                    ->required(),
                // Campo opcional para un enlace
                Forms\Components\TextInput::make('link')
                    ->label('Enlace')
                    ->url(),
                // Campo para definir el orden
                Forms\Components\TextInput::make('orden')
                    ->label('Orden')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->limit(30),
                Tables\Columns\TextColumn::make('link')
                    ->limit(30),
                Tables\Columns\TextColumn::make('orden'),
                Tables\Columns\ImageColumn::make('imagen')
                    ->label('Imagen')
                    ->disk('banners_public')
                    ->height(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Agregas esta línea para que aparezca el botón Eliminar
                \Filament\Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()->orderBy('orden');
    }

}
