<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Adidas'
        ]);
        Brand::create([
            'name' => 'Nike'
        ]);
        Brand::create([
            'name' => 'Specs'
        ]);
        Brand::create([
            'name' => 'Puma'
        ]);
    }
}
