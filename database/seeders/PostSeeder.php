<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->title = $faker->realText(50);
            $post->cover_image = 'storage_img/' .$faker->image('public/storage/storage_img', category: 'Posts', fullPath: false);
            $post->slug = Str::slug($post->title, '-');
            $post->content = $faker->realText();
            $post->save();
        }
    }
}