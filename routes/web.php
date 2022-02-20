<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'FeedbackForm');

Route::post('/feedback/store', [FeedbackController::class, 'store']);
