<?php

namespace App\Containers\AppSection\UserContainer\Data\Repositories;

use App\Containers\AppSection\UserContainer\Models\User;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserRepository extends ParentRepository
{

    public function SendOTP($data): mixed
    {
        session::put('otp-mobile', $data['mobile']);
        return Http::get("https://raygansms.com/AutoSendCode.ashx?Username=alimadadi&Password=@Sajjad1376&Mobile=" . $data['mobile'] . "&Footer=homex");
    }

    public function CheckOTP($data): mixed
    {
        $response = Http::asForm()->post('https://raygansms.com/CheckSendCode.ashx', [
            'Username' => 'alimadadi',
            'Password' => '@Sajjad1376',
            'Mobile'   => session('otp-mobile'),
            'Code'     => $data['otp'],
        ]);

        if ($response->json() === true) {

            session::put('otp-check', $data['mobile']);
            if ( User::query()->where(['mobile' => $data['mobile']])->first()) {
                dd('yes');
//                return view('appSection@indexContainer::Index');
            }
        }

        return $response->json();
    }

}
