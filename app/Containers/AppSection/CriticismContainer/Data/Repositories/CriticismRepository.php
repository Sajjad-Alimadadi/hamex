<?php

namespace App\Containers\AppSection\CriticismContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class CriticismRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
