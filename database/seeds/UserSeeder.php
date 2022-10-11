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
        $admin = User::updateOrCreate(['id' => '1'], [
            'name' => 'Daniel Bueno Esparza',
            'email' => 'web.practicante@reyma.com.mx',
            'password' => bcrypt('12345')
        ]);

        $admin->assignRole('Administrador');

        $editor = User::updateOrCreate(['id' => '2'], [
            'name' => 'Editor',
            'email' => 'web.editor@reyma.com.mx',
            'password' => bcrypt('12345')
        ]);

        $editor->assignRole('Editor');

        $users = factory(User::class, 50)->create();
        foreach ($users as $user) {
            $user->assignRole('User');
        }
    }
}
