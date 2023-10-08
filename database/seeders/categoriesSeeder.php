<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Watch',
            'slug'=>'New',
            'description'=>'Watch',
            'status'=>'1',
             'popular'=>'1',
            'image'=>'1696737435.jpg',
             'meta_title'=>'Latest',
            'meta_description'=>'2023',
             'meta_keywords'=>'Expensive',

        ]);
    }
}
