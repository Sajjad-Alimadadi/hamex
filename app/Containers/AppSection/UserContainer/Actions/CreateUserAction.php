<?php

namespace App\Containers\AppSection\UserContainer\Actions;

use App\Containers\AppSection\UserContainer\Data\Repositories\UserRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class CreateUserAction extends ParentAction
{
    public function __construct(
        protected UserRepository $repository
    ) {
    }

    /**
     * @param array $data
     * @return LengthAwarePaginator|Collection|mixed
     * @throws CreateResourceFailedException
     */
    public function run(array $data)
    {
        try {
            if ($data['typeperson'] === "normal" || $data['typeperson'] === "expert") {
                $data['mobile'] = session('otp-mobile');
                $data['university_id'] = null;
                $data['grade'] = null;
                $data['branch'] = null;
                $data['semester'] = null;
                $data['type'] = $data['typeperson'];
                unset($data['typeperson']);
            } else {

                if( $data['branch'] === null ){
                    throw  ValidationException::withMessages(['user' => 'درصورتی که بازدید کننده تور دانشگاهی هستید ، اطلاعات مربوط به دانشگاه خود را وارد کنید']);
                }

                $data['mobile'] = session('otp-mobile');
                $data['type'] = $data['typeperson'];
                unset($data['typeperson']);
            }

            session::put('user', $data['mobile']);
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
