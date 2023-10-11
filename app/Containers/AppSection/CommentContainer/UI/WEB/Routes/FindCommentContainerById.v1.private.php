<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\FindCommentContainerByIdController;
use Illuminate\Support\Facades\Route;

Route::get('comment-containers/{id}', [FindCommentContainerByIdController::class, 'show'])
    ->middleware(['auth:web']);

