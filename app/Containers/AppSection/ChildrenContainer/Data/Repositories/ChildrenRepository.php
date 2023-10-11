<?php

namespace App\Containers\AppSection\ChildrenContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ChildrenRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
