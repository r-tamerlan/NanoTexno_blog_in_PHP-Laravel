<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert(['category_name'=>'Travel','category_slug'=>'travel']);
        DB::table('categories')->insert(['category_name'=>'Technology','category_slug'=>'technology']);
        DB::table('categories')->insert(['category_name'=>'Work','category_slug'=>'work']);
        DB::table('categories')->insert(['category_name'=>'Future','category_slug'=>'future']);
        DB::table('categories')->insert(['category_name'=>'Design','category_slug'=>'design']);
        DB::table('categories')->insert(['category_name'=>'Startups','category_slug'=>'startups']);
        DB::table('categories')->insert(['category_name'=>'Programming','category_slug'=>'programming']);
        DB::table('categories')->insert(['category_name'=>'Business','category_slug'=>'business']);
    }
}
