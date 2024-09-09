<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\QuestionsList;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionsListResource;
use App\Http\Requests\StoreQuestionsListRequest;
use App\Http\Requests\UpdateQuestionsListRequest;
use Illuminate\Http\Request;

class QuestionsListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return QuestionsListResource::collection(QuestionsList::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionsListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsList $question)
    {
        return QuestionsListResource::make($question);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionsListRequest $request, QuestionsList $questionsList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsList $questionsList)
    {
        //
    }
}
