<?php

use App\Categorie;
use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = Categorie::all();

        foreach ($categories as $categorie) {
            $posts = factory(Post::class)->times(15)->make();

            $categorie->posts()->saveMany($posts);
        }
    }
}
