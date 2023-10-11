<?php

namespace App\Containers\AppSection\UniversityContainer\Data\Seeders;

use App\Containers\AppSection\UniversityContainer\Models\University;
use App\Ship\Parents\Seeders\Seeder;

class UniversitySeeder_2 extends Seeder
{
    public function run(): void
    {
        University::factory(40)->create();
    }
}
