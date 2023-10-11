<?php

use App\Containers\AppSection\UserContainer\UI\WEB\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/logout', [LogoutController::class, 'run']);
