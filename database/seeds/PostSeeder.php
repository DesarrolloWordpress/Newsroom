<?php

use App\File;
use App\Post;
use App\Image;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class, 350)->create();
        foreach ($posts as $post) {
            factory(Image::class, 1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
            factory(File::class, 1)->create([
                'fileable_id' => $post->id,
                'fileable_type' => Post::class
            ]);
            $post->tags()->attach([
                rand(1, 7),
                rand(8, 15),
            ]);
        }
    }
}
