<?php

namespace App\Containers\AppSection\UserContainer\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class LogoutController extends WebController
{
    public function run(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        session()->forget('user');
        session()->forget('otp-mobile');
        session()->forget('otp-check');
        return view('appSection@indexContainer::Index');
    }
}
