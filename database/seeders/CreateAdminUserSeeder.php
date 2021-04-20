<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456789')
        ]);
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);

        $profile = new Profile;
        $profile->name = 'Admin';
        $profile->lastname = 'Estudio2B'; 
        $profile->username = 'administrador'; 
        $profile->position = 'Admin'; 
        $profile->mail = 'admin@mail.com';
        $profile->phone = '12345678'; 
        $profile->country = 'country';
        $profile->state = 'state'; 
        $profile->city = 'city'; 
        $profile->address = 'address';
        $profile->start_date = '2020-01-01';

        $user->profile()->save($profile);
    }
}
