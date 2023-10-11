<?php

use App\Containers\AppSection\UserContainer\UI\WEB\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::post('/verification', [VerificationController::class, 'run']);

