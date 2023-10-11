<?php

use App\Containers\AppSection\OfferContainer\UI\WEB\Controllers\GetAllOfferContainersController;
use Illuminate\Support\Facades\Route;

Route::get('offer-containers', [GetAllOfferContainersController::class, 'index'])
    ->middleware(['auth:web']);

