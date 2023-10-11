<?php

namespace App\Containers\AppSection\BrandContainer\Data\Factories;

use App\Containers\AppSection\BrandContainer\Models\Brand;
use App\Ship\Parents\Factories\Factory as ParentFactory;
use Faker\Factory;

class BrandFactory extends ParentFactory
{
    protected $model = Brand::class;

    public function definition(): array
    {
        $fakers = Factory::create('fa_IR');
        return [
            'name'        => $fakers->company(),
            'description' => $fakers->address(),
            'map'         => 'محل تصویر نقشه',
        ];
    }
}
