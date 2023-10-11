<?php

use App\Containers\AppSection\UserContainer\UI\WEB\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::Post('/verification/check/submit', [CreateUserController::class, 'run']);
