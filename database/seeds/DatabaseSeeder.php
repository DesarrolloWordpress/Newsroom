<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        \App\Models\User::factory(5)->create();
        \App\Models\Category::factory(7)->create();
        \App\Models\Post::factory(35)->create();

        // post_tag table has no Model so to seed it we need our own logic
        for ($i = 0; $i < 1500; $i++) {
            DB::table('post_tag')->insertOrIgnore([
                'post_id' => mt_rand(1, 35),
                'tag_id' => mt_rand(1, 5),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
