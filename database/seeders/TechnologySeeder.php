<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'JavaScript', 'PHP', 'C++'];
        foreach ($data as $category) {
            $new_category = new Technology();
            $new_category->name = $category;
            $new_category->slug = Str::slug($category, "-");
            $new_category->save();
        }
    }
}
