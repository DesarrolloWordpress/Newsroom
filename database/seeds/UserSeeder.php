<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel Bueno Esparza',
            'email' => 'danielbe2016@mail.com',
            'password' => bcrypt('12345')
        ]);

        factory(User::class, 50)->create();
    }
}
