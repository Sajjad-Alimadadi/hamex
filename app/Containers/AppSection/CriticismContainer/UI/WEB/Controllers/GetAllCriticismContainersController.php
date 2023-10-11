<?php

namespace App\Containers\AppSection\CriticismContainer\UI\WEB\Controllers;

use App\Containers\AppSection\CriticismContainer\Actions\GetAllCriticismContainersAction;
use App\Containers\AppSection\CriticismContainer\UI\WEB\Requests\GetAllCriticismContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllCriticismContainersController extends WebController
{
    public function index(GetAllCriticismContainersRequest $request)
    {
        $criticismcontainers = app(GetAllCriticismContainersAction::class)->run($request);
        // ..
    }
}
