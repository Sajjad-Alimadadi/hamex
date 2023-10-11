<?php

namespace App\Containers\AppSection\IndexContainer\UI\WEB\Controllers;

use App\Containers\AppSection\IndexContainer\Actions\IndexAction;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends WebController
{
    public function run(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $result = app(IndexAction::class)->run();
        return view('appSection@indexContainer::Index', ['result' => $result]);
    }
}
