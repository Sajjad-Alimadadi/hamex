<?php

namespace App\Containers\AppSection\UserContainer\Actions;


use App\Containers\AppSection\UserContainer\Data\Repositories\UserRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Exception;

class GetMobileAction extends ParentAction
{
    public function __construct(
        protected UserRepository $repository
    ) {
    }


    /**
     * @return mixed
     * @throws NotFoundException
     */
    public function run(): mixed
    {
        try {
            return 0;
        } catch (Exception $e) {
            throw new NotFoundException();
        }
    }
}
