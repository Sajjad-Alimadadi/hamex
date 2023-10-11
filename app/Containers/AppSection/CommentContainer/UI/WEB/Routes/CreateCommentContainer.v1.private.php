<?php

use App\Containers\AppSection\CommentContainer\UI\WEB\Controllers\CreateCommentContainerController;
use Illuminate\Support\Facades\Route;

Route::get('comment-containers/create', [CreateCommentContainerController::class, 'create'])
    ->middleware(['auth:web']);

