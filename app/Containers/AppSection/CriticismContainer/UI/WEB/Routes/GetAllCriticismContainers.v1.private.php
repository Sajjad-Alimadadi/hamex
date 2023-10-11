<?php

use App\Containers\AppSection\CriticismContainer\UI\WEB\Controllers\GetAllCriticismContainersController;
use Illuminate\Support\Facades\Route;

Route::get('criticism-containers', [GetAllCriticismContainersController::class, 'index'])
    ->middleware(['auth:web']);

