<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\BlogController;
use App\Http\Controllers\Api\V1\ContactController;
use App\Http\Controllers\Api\V1\QuestionsListController;

Route::prefix('v1')->group(function () {
    // TODO => Events Resource Router Group
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{event}', [EventController::class, 'show']);

    // TODO => Blogs Resource Router Group
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/{blog}', [BlogController::class, 'show']);

    // TODO => Questions Resource Router Group
    Route::get('/questions', [QuestionsListController::class, 'index']);
    Route::get('/questions/{question}', [QuestionsListController::class, 'show']);

    // TODO => Contacts Resource Router Group
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::get('/contacts/{contact}', [ContactController::class, 'show']);
    // Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});