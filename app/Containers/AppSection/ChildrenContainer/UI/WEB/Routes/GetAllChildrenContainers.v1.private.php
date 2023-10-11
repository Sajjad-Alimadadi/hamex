<?php

use App\Containers\AppSection\ChildrenContainer\UI\WEB\Controllers\GetAllChildrenContainersController;
use Illuminate\Support\Facades\Route;

Route::get('children-containers', [GetAllChildrenContainersController::class, 'index'])
    ->middleware(['auth:web']);

