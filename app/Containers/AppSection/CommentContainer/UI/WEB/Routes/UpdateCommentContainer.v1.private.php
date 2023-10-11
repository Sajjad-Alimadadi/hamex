<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\UpdateCommentContainerController;
use Illuminate\Support\Facades\Route;

Route::patch('comment-containers/{id}', [UpdateCommentContainerController::class, 'update'])
    ->middleware(['auth:web']);

