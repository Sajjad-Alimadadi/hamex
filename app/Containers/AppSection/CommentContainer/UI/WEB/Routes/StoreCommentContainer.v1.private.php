<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\CreateCommentContainerController;
use Illuminate\Support\Facades\Route;

Route::post('comment-containers/store', [CreateCommentContainerController::class, 'store'])
    ->middleware(['auth:web']);

