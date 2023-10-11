<?php

namespace App\Containers\AppSection\UserContainer\UI\WEB\Controllers;

use App\Containers\AppSection\UserContainer\Actions\VerificationAction;
use App\Containers\AppSection\UserContainer\UI\WEB\Requests\VerificationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class VerificationController extends WebController
{
    public function run(VerificationRequest $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'mobile' => $request->post('mobile'),
        ]);
        $result = app(VerificationAction::class)->run($data);
        return view('appSection@userContainer::Verification', ['result' => $result]);
    }
}
