<?php

namespace App\Containers\AppSection\CriticismContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\CriticismContainer\Tasks\GetAllCriticismContainersTask;
use App\Containers\AppSection\CriticismContainer\UI\WEB\Requests\GetAllCriticismContainersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCriticismContainersAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllCriticismContainersRequest $request): mixed
    {
        return app(GetAllCriticismContainersTask::class)->run();
    }
}
