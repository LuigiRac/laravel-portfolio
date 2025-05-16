<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

Route::get('project', [ProjectController::class, 'index']);

Route::get('project/{project}', [ProjectController::class, 'show']);