<?php

namespace App\Containers\AppSection\UserContainer\UI\WEB\Controllers;

use App\Containers\AppSection\UserContainer\Actions\CreateUserAction;
use App\Containers\AppSection\UserContainer\UI\WEB\Requests\CreateUserRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateUserController extends WebController
{
    public function run(CreateUserRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'        => $request->post('_token'),
            'university_id' => $request->post('university_id'),
            'name'          => $request->post('name'),
            'family'        => $request->post('family'),
            'grade'         => $request->post('grade'),
            'branch'        => $request->post('branch'),
            'semester'      => $request->post('semester'),
            'typeperson'    => $request->post('typeperson'),
        ]);
        $result = app(CreateUserAction::class)->run($data);
        return view('appSection@userContainer::SuccessVerification');
    }

}
