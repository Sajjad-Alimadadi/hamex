<?php

namespace App\Containers\AppSection\ChildrenContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\ChildrenContainer\Tasks\GetAllChildrenContainersTask;
use App\Containers\AppSection\ChildrenContainer\UI\WEB\Requests\GetAllChildrenContainersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllChildrenContainersAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllChildrenContainersRequest $request): mixed
    {
        return app(GetAllChildrenContainersTask::class)->run();
    }
}
