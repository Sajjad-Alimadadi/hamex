<?php

use App\Containers\AppSection\AdvertisementContainer\UI\WEB\Controllers\GetAllAdvertisementContainersController;
use Illuminate\Support\Facades\Route;

Route::get('advertisement-containers', [GetAllAdvertisementContainersController::class, 'index'])
    ->middleware(['auth:web']);

