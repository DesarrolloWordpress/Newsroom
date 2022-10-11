<?php

use App\Category;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        Storage::makeDirectory('posts');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        factory(Category::class, 5)->create();
        factory(Tag::class, 15)->create();
        $this->call(PostSeeder::class);
    }
}
