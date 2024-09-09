<?php

namespace App\Filament\Resources\QuestionsListResource\Pages;

use App\Filament\Resources\QuestionsListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuestionsLists extends ListRecords
{
    protected static string $resource = QuestionsListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
