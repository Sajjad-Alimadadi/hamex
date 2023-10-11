<?php

namespace App\Containers\AppSection\IndexContainer\UI\WEB\Controllers;

use App\Containers\AppSection\IndexContainer\Actions\SearchAction;
use App\Containers\AppSection\IndexContainer\UI\WEB\Requests\SearchRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SearchController extends WebController
{
    public function run(SearchRequest $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'search' => $request->post('search'),
        ]);
        $result = app(SearchAction::class)->run($data);
        return view('appSection@indexContainer::Index', ['result' => $result]);
    }
}
