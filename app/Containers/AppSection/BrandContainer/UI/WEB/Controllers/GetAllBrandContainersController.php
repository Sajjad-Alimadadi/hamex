<?php

namespace App\Containers\AppSection\BrandContainer\UI\WEB\Controllers;

use App\Containers\AppSection\BrandContainer\Actions\GetAllBrandContainersAction;
use App\Containers\AppSection\BrandContainer\UI\WEB\Requests\GetAllBrandContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllBrandContainersController extends WebController
{
    public function index(GetAllBrandContainersRequest $request)
    {
        $brandcontainers = app(GetAllBrandContainersAction::class)->run($request);
        // ..
    }
}
