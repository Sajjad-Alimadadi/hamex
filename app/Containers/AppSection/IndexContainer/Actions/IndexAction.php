<?php

namespace App\Containers\AppSection\IndexContainer\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Exception;

class IndexAction extends ParentAction
{
    public function __construct(
//        protected IndexRepository $repository
    )
    {
    }


    /**
     * @return mixed
     * @throws NotFoundException
     */
    public function run(): mixed
    {
        try {
//            $result['cat'] = Cat::query()->with(['blog'])->orderBy('id', 'DESC')->get();
            return "0";
        } catch (Exception $e) {
            throw new NotFoundException();
        }
    }
}
