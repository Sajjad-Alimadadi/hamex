<?php

namespace App\Containers\AppSection\AdvertisementContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class AdvertisementRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
