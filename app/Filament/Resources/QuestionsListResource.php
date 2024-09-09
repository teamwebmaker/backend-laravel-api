<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionsListResource\Pages;
use App\Filament\Resources\QuestionsListResource\RelationManagers;
use App\Models\QuestionsList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionsListResource extends Resource
{
    protected static ?string $model = QuestionsList::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('question') -> required(),
                Textarea::make('answer') -> required(),
                Select::make('visible')->options(['1' => 'On','0' => 'Off'])->default('1')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('question'),
                TextColumn::make('answer'),
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
            'index' => Pages\ListQuestionsLists::route('/'),
            'create' => Pages\CreateQuestionsList::route('/create'),
            'edit' => Pages\EditQuestionsList::route('/{record}/edit'),
        ];
    }    
}
