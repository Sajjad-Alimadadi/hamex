<?php

namespace App\Containers\AppSection\CommentContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class CommentRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
