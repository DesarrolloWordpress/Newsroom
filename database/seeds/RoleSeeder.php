<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleEditor = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'admin.home']);

        Permission::create(['name' => 'admin.categories.index']);
        Permission::create(['name' => 'admin.categories.create']);
        Permission::create(['name' => 'admin.categories.edit']);
        Permission::create(['name' => 'admin.categories.destroy']);

        Permission::create(['name' => 'admin.tags.index']);
        Permission::create(['name' => 'admin.tags.create']);
        Permission::create(['name' => 'admin.tags.edit']);
        Permission::create(['name' => 'admin.tags.destroy']);

        Permission::create(['name' => 'admin.posts.index']);
        Permission::create(['name' => 'admin.posts.create']);
        Permission::create(['name' => 'admin.posts.edit']);
        Permission::create(['name' => 'admin.posts.destroy']);

        Permission::create(['name' => 'cliente.post.descargar.si']);
        Permission::create(['name' => 'cliente.post.descargar.no']);

        Permission::create(['name' => 'cliente.posts.index']);
    }
}
