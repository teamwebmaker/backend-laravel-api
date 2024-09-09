<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DictionaryResource\Pages;
use App\Filament\Resources\DictionaryResource\RelationManagers;
use App\Models\Content;
use App\Models\Dictionary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DictionaryResource extends Resource
{
    protected static ?string $model = Dictionary::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('content_id')->options(Content::all()-> pluck('title', 'id')) -> required(),
                Textarea::make('item') -> required(),
                TextInput::make('thumbnail')-> default(null)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('item'),
                ImageColumn::make('thumbnail')
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
            'index' => Pages\ListDictionaries::route('/'),
            'create' => Pages\CreateDictionary::route('/create'),
            'edit' => Pages\EditDictionary::route('/{record}/edit'),
        ];
    }    
}
