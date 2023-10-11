<?php

namespace App\Containers\AppSection\BrandContainer\Data\Seeders;

use App\Containers\AppSection\BrandContainer\Models\Brand;
use App\Ship\Parents\Seeders\Seeder;

class BrandSeeder_1 extends Seeder
{
    public function run(): void
    {
        Brand::factory(500)->create();
    }
}
