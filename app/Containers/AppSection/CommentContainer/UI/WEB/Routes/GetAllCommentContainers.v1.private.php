<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\GetAllCommentContainersController;
use Illuminate\Support\Facades\Route;

Route::get('comment-containers', [GetAllCommentContainersController::class, 'index'])
    ->middleware(['auth:web']);

