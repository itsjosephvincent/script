<?php

use App\Http\Controllers\ScriptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/run-script', [ScriptController::class, 'store']);
