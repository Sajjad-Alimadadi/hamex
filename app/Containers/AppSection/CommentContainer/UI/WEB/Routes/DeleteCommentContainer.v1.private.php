<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\DeleteCommentContainerController;
use Illuminate\Support\Facades\Route;

Route::delete('comment-containers/{id}', [DeleteCommentContainerController::class, 'destroy'])
    ->middleware(['auth:web']);

