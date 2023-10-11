<?php

namespace App\Containers\AppSection\BrandContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\BrandContainer\Tasks\GetAllBrandContainersTask;
use App\Containers\AppSection\BrandContainer\UI\WEB\Requests\GetAllBrandContainersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllBrandContainersAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllBrandContainersRequest $request): mixed
    {
        return app(GetAllBrandContainersTask::class)->run();
    }
}
