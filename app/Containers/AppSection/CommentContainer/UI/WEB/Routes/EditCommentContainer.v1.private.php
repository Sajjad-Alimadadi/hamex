<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\UpdateCommentContainerController;
use Illuminate\Support\Facades\Route;

Route::get('comment-containers/{id}/edit', [UpdateCommentContainerController::class, 'edit'])
    ->middleware(['auth:web']);

