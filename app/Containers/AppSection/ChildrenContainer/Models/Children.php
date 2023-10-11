<?php

namespace App\Containers\AppSection\ChildrenContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Children extends ParentModel
{
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Children';
}
