<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
        'cate_id'=>'1',
        'name'=>'Apple',
        'slug'=>'Latest version',
        'small_description'=>'New Arrival & Trending item',
        'description'=>'series9',
        'oraginal_price'=>'18000',
        'selling_price'=>'25000',
        'image'=>'1696739635.webp',
        'qty'=>'10',
        'tax'=>'2000',
        'status'=>'1',
        'trending'=>'1',
        'meta_title'=>'2023',
        'meta_keywords'=>'Series9',
        'meta_description'=>'trending series',

        ]);
    }
}
