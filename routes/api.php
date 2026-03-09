<?php

use App\Http\Controllers\Api\MeetingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/meetings', [MeetingController::class, 'getMeetings']);
Route::post('/check-meeting', [MeetingController::class, 'checkMeeting']);