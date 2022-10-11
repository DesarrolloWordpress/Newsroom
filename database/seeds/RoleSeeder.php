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
        /*
        * ROLES
        */
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleEditor = Role::create(['name' => 'Editor']);
        $roleUser = Role::create(['name' => 'User']);

        /*
        * PERMISSION
        */
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

        Permission::create(['name' => 'admin.gallery.index']);
        Permission::create(['name' => 'admin.gallery.create']);
        Permission::create(['name' => 'admin.gallery.edit']);
        Permission::create(['name' => 'admin.gallery.destroy']);

        Permission::create(['name' => 'user.post.descargar.si']);
        Permission::create(['name' => 'user.post.descargar.no']);

        Permission::create(['name' => 'user.posts.index']);

        /**
         * Asignar permisos a rol usuario
         */
        $roleUser->givePermissionTo('user.post.descargar.si');
        $roleUser->givePermissionTo('user.posts.index');

        /**
         * Asignar permisos a rol editor
         */
        $roleEditor->givePermissionTo('admin.home');

        $roleEditor->givePermissionTo('admin.categories.index');
        $roleEditor->givePermissionTo('admin.categories.create');
        $roleEditor->givePermissionTo('admin.categories.edit');

        $roleEditor->givePermissionTo('admin.tags.index');
        $roleEditor->givePermissionTo('admin.tags.create');
        $roleEditor->givePermissionTo('admin.tags.edit');

        $roleEditor->givePermissionTo('admin.posts.index');
        $roleEditor->givePermissionTo('admin.posts.create');
        $roleEditor->givePermissionTo('admin.posts.edit');

        $roleEditor->givePermissionTo('admin.gallery.index');
        $roleEditor->givePermissionTo('admin.gallery.create');
        $roleEditor->givePermissionTo('admin.gallery.edit');

        $roleEditor->givePermissionTo('user.post.descargar.si');

        $roleEditor->givePermissionTo('user.posts.index');

        /**
         * Asignar permisos a rol administrador
         */
        $roleAdmin->givePermissionTo('admin.home');

        $roleAdmin->givePermissionTo('admin.categories.index');
        $roleAdmin->givePermissionTo('admin.categories.create');
        $roleAdmin->givePermissionTo('admin.categories.edit');
        $roleAdmin->givePermissionTo('admin.categories.destroy');

        $roleAdmin->givePermissionTo('admin.tags.index');
        $roleAdmin->givePermissionTo('admin.tags.create');
        $roleAdmin->givePermissionTo('admin.tags.edit');
        $roleAdmin->givePermissionTo('admin.tags.destroy');

        $roleAdmin->givePermissionTo('admin.posts.index');
        $roleAdmin->givePermissionTo('admin.posts.create');
        $roleAdmin->givePermissionTo('admin.posts.edit');
        $roleAdmin->givePermissionTo('admin.posts.destroy');

        $roleAdmin->givePermissionTo('admin.gallery.index');
        $roleAdmin->givePermissionTo('admin.gallery.create');
        $roleAdmin->givePermissionTo('admin.gallery.edit');
        $roleAdmin->givePermissionTo('admin.gallery.destroy');

        $roleAdmin->givePermissionTo('user.post.descargar.si');

        $roleAdmin->givePermissionTo('user.posts.index');
    }
}
