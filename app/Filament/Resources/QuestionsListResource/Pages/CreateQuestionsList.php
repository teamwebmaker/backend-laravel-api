<?php

namespace App\Filament\Resources\QuestionsListResource\Pages;

use App\Filament\Resources\QuestionsListResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateQuestionsList extends CreateRecord
{
    protected static string $resource = QuestionsListResource::class;
}
