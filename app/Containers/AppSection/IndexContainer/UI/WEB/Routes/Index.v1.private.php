<?php

use App\Containers\AppSection\IndexContainer\UI\WEB\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'run']);

