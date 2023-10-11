<?php

namespace App\Containers\AppSection\OfferContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\OfferContainer\Tasks\GetAllOfferContainersTask;
use App\Containers\AppSection\OfferContainer\UI\WEB\Requests\GetAllOfferContainersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllOfferContainersAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllOfferContainersRequest $request): mixed
    {
        return app(GetAllOfferContainersTask::class)->run();
    }
}
