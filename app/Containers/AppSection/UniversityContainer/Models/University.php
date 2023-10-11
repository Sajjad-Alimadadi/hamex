<?php

namespace App\Containers\AppSection\UniversityContainer\Models;

use App\Containers\AppSection\UniversityContainer\Data\Factories\UniversityFactory;
use App\Ship\Parents\Factories\Factory;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class University extends ParentModel
{

    use HasFactory;

    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'University';

    public static function newFactory(): ?Factory
    {
        return new UniversityFactory();
    }
}
