<?php

namespace App\Containers\AppSection\UserContainer\Actions;


use App\Containers\AppSection\UserContainer\Data\Repositories\UserRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Exception;

class VerificationAction extends ParentAction
{
    public function __construct(
        protected UserRepository $repository
    ) {
    }


    /**
     * @param $data
     * @return mixed
     * @throws NotFoundException
     */
    public function run($data): mixed
    {
        try {
            return $this->repository->SendOTP($data);
        } catch (Exception $e) {
            throw new NotFoundException();
        }
    }
}
