<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $user = \App\Models\User::factory()->create([
            'name' => 'Akash Dutta',
            'email' => "akash.dutta@icagroup.in",
            'mobile' => "9836555023",
            'password' => Hash::make("SE~you@9062"),
        ]);
        $user->assignRole($role);
        
    }
}
