<?php

namespace App\Containers\AppSection\AdvertisementContainer\UI\WEB\Controllers;

use App\Containers\AppSection\AdvertisementContainer\Actions\GetAllAdvertisementContainersAction;
use App\Containers\AppSection\AdvertisementContainer\UI\WEB\Requests\GetAllAdvertisementContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllAdvertisementContainersController extends WebController
{
    public function index(GetAllAdvertisementContainersRequest $request)
    {
        $advertisementcontainers = app(GetAllAdvertisementContainersAction::class)->run($request);
        // ..
    }
}
