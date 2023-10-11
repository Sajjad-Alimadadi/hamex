<?php

namespace App\Containers\AppSection\UniversityContainer\Data\Factories;

use App\Containers\AppSection\UniversityContainer\Models\University;
use App\Ship\Parents\Factories\Factory as ParentFactory;
use Faker\Factory;

class UniversityFactory extends ParentFactory
{
    protected $model = University::class;

    public function definition(): array
    {
        $fakers = Factory::create('fa_IR');
        return [
            'name'        => $fakers->name(),
            'description' => $fakers->address(),
        ];
    }
}
