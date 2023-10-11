<?php

namespace App\Containers\AppSection\UniversityContainer\UI\WEB\Controllers;

use App\Containers\AppSection\UniversityContainer\Actions\GetAllUniversityContainersAction;
use App\Containers\AppSection\UniversityContainer\UI\WEB\Requests\GetAllUniversityContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllUniversityContainersController extends WebController
{
    public function index(GetAllUniversityContainersRequest $request)
    {
        $universitycontainers = app(GetAllUniversityContainersAction::class)->run($request);
        // ..
    }
}
