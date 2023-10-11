<?php

use App\Containers\AppSection\UniversityContainer\UI\WEB\Controllers\GetAllUniversityContainersController;
use Illuminate\Support\Facades\Route;

Route::get('university-containers', [GetAllUniversityContainersController::class, 'index'])
    ->middleware(['auth:web']);

