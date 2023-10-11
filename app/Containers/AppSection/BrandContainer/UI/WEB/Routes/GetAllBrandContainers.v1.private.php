<?php

use App\Containers\AppSection\BrandContainer\UI\WEB\Controllers\GetAllBrandContainersController;
use Illuminate\Support\Facades\Route;

Route::get('brand-containers', [GetAllBrandContainersController::class, 'index'])
    ->middleware(['auth:web']);

