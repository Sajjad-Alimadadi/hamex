<?php

namespace App\Containers\AppSection\AdvertisementContainer\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\AdvertisementContainer\Data\Repositories\AdvertisementRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllAdvertisementContainersTask extends ParentTask
{
    public function __construct(
        protected AdvertisementRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria()->repository->paginate();
    }
}
