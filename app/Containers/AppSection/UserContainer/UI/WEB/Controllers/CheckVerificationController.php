<?php

namespace App\Containers\AppSection\UserContainer\UI\WEB\Controllers;

use App\Containers\AppSection\UserContainer\Actions\CheckVerificationAction;
use App\Containers\AppSection\UserContainer\UI\WEB\Requests\CheckVerificationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CheckVerificationController extends WebController
{
    public function run(CheckVerificationRequest $request): \Illuminate\Foundation\Application|View|Factory|Redirector|Application|RedirectResponse
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'otp' => $request->post('otp'),
        ]);
        $result = app(CheckVerificationAction::class)->run($data);
        if ($result === true) {
            return view('appSection@userContainer::CheckVerification', ['result' => $result]);
        } else {
            return redirect('/');
        }
    }
}
