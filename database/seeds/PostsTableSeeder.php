<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use Psy\Util\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        Posts::truncate();

        for ($i=0; $i<30; $i++)

        {
            Posts::insert([
                'post_title'=>$faker->sentence(4),
                'post_content'=>$faker->sentence(30),
                'post_images'=>$i.'img.jpg'
            ]);
        }

    }
}
