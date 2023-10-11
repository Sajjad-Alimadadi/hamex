<?php

namespace App\Containers\AppSection\UniversityContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\UniversityContainer\Tasks\GetAllUniversityContainersTask;
use App\Containers\AppSection\UniversityContainer\UI\WEB\Requests\GetAllUniversityContainersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllUniversityContainersAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllUniversityContainersRequest $request): mixed
    {
        return app(GetAllUniversityContainersTask::class)->run();
    }
}
