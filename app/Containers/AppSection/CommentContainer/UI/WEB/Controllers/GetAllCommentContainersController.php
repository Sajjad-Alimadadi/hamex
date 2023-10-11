<?php

namespace App\Containers\AppSection\CommentContainer\UI\WEB\Controllers;

use App\Containers\AppSection\CommentContainer\Actions\GetAllCommentContainersAction;
use App\Containers\AppSection\CommentContainer\UI\WEB\Requests\GetAllCommentContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllCommentContainersController extends WebController
{
    public function index(GetAllCommentContainersRequest $request)
    {
        $commentcontainers = app(GetAllCommentContainersAction::class)->run($request);
        // ..
    }
}
