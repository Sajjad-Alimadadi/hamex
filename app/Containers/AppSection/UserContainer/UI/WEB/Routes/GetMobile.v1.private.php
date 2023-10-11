<?php

use App\Containers\AppSection\UserContainer\UI\WEB\Controllers\GetAllUserContainersController;
use App\Containers\AppSection\UserContainer\UI\WEB\Controllers\GetMobileController;
use Illuminate\Support\Facades\Route;

Route::get('/mobile', [GetMobileController::class, 'run']);

