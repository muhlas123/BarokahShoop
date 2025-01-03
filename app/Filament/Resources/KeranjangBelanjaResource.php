<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeranjangBelanjaResource\Pages;
use App\Filament\Resources\KeranjangBelanjaResource\RelationManagers;
use App\Models\KeranjangBelanja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class KeranjangBelanjaResource extends Resource
{
    protected static ?string $model = KeranjangBelanja::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->label('id pengguna')
                    ->required(),
                Forms\Components\TextInput::make('produk_id')
                    ->label('id produk')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('produk_id'),    
            ])
            ->filters([
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
            'index' => Pages\ListKeranjangBelanjas::route('/'),
            'create' => Pages\CreateKeranjangBelanja::route('/create'),
            'edit' => Pages\EditKeranjangBelanja::route('/{record}/edit'),
        ];
    }
}
