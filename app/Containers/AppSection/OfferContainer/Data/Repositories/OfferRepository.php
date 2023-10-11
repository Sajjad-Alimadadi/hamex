<?php

namespace App\Containers\AppSection\OfferContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class OfferRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
