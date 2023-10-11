<?php

namespace App\Containers\AppSection\AdvertisementContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\AdvertisementContainer\Tasks\GetAllAdvertisementContainersTask;
use App\Containers\AppSection\AdvertisementContainer\UI\WEB\Requests\GetAllAdvertisementContainersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllAdvertisementContainersAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllAdvertisementContainersRequest $request): mixed
    {
        return app(GetAllAdvertisementContainersTask::class)->run();
    }
}
