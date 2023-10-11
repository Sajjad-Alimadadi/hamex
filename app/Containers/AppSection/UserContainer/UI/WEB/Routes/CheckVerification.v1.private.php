<?php

use App\Containers\AppSection\UserContainer\UI\WEB\Controllers\CheckVerificationController;
use Illuminate\Support\Facades\Route;

Route::post('/verification/check', [CheckVerificationController::class, 'run']);

