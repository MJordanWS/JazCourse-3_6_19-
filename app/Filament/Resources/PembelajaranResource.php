<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembelajaranResource\Pages;
use App\Filament\Resources\PembelajaranResource\RelationManagers;
use App\Models\Pembelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PembelajaranResource extends Resource
{
    protected static ?string $model = Pembelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('paket_belajar_id')
                    ->relationship('paketbelajar', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paketbelajar.name'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description')->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPembelajarans::route('/'),
            'create' => Pages\CreatePembelajaran::route('/create'),
            'edit' => Pages\EditPembelajaran::route('/{record}/edit'),
        ];
    }
}
