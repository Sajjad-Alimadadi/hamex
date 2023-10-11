<?php

use App\Containers\AppSection\IndexContainer\UI\WEB\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::post('/', [SearchController::class, 'run'])->middleware(['check.user']);;

