<?php

namespace App\Containers\AppSection\ChildrenContainer\UI\WEB\Controllers;

use App\Containers\AppSection\ChildrenContainer\Actions\GetAllChildrenContainersAction;
use App\Containers\AppSection\ChildrenContainer\UI\WEB\Requests\GetAllChildrenContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllChildrenContainersController extends WebController
{
    public function index(GetAllChildrenContainersRequest $request)
    {
        $childrencontainers = app(GetAllChildrenContainersAction::class)->run($request);
        // ..
    }
}
