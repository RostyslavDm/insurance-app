<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['client', 'agent', 'manager', 'admin'];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['name' => $role],
                ['is_active' => true, 'active_from' => now()]
            );
        }
    }
}