<?php

namespace App\Containers\AppSection\UserContainer\UI\WEB\Controllers;

use App\Containers\AppSection\UserContainer\Actions\GetMobileAction;
use App\Containers\AppSection\UserContainer\UI\WEB\Requests\GetMobileRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetMobileController extends WebController
{
    public function run(GetMobileRequest $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $result = app(GetMobileAction::class)->run();
        return view('appSection@userContainer::GetMobile', ['result' => $result]);
    }
}
