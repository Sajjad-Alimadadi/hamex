<?php

namespace App\Containers\AppSection\OfferContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Offer extends ParentModel
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
    protected string $resourceKey = 'Offer';
}
