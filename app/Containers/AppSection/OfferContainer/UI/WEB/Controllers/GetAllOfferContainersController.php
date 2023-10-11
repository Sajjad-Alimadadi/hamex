<?php

namespace App\Containers\AppSection\OfferContainer\UI\WEB\Controllers;

use App\Containers\AppSection\OfferContainer\Actions\GetAllOfferContainersAction;
use App\Containers\AppSection\OfferContainer\UI\WEB\Requests\GetAllOfferContainersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllOfferContainersController extends WebController
{
    public function index(GetAllOfferContainersRequest $request)
    {
        $offercontainers = app(GetAllOfferContainersAction::class)->run($request);
        // ..
    }
}
