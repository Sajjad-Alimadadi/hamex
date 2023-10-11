<?php

namespace App\Containers\AppSection\BrandContainer\Models;

use App\Containers\AppSection\BrandContainer\Data\Factories\BrandFactory;
use App\Containers\BackSection\ExamContainer\Data\Factories\QuestionFactory;
use App\Ship\Parents\Factories\Factory;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends ParentModel
{
    use HasFactory;

    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];
    protected string $resourceKey = 'Brand';

    /**
     * A resource key to be used in the serialized responses.
     */

    public static function newFactory(): ?Factory
    {
        return new BrandFactory();
    }
}
