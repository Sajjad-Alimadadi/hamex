<?php

namespace App\Containers\AppSection\UserContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class User extends ParentModel
{
    protected $table = 'users';
    protected $fillable = [
        'id',
        'university_id',
        'mobile',
        'name',
        'family',
        'grade',
        'branch',
        'semester',
        'type',
        'is_active'
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'User';
}
