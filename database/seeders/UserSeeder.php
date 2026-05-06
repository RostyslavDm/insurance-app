<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Admin User',   'email' => 'admin@insurance.com',   'role' => 'admin'],
            ['name' => 'Manager User', 'email' => 'manager@insurance.com', 'role' => 'manager'],
            ['name' => 'Agent User',   'email' => 'agent@insurance.com',   'role' => 'agent'],
            ['name' => 'Client User',  'email' => 'client@insurance.com',  'role' => 'client'],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name'     => $userData['name'],
                    'password' => Hash::make('password123'),
                ]
            );
            $user->update(['created_by' => $user->id]);

            $role = Role::where('name', $userData['role'])->first();
            $alreadyHasRole = $user->roles()
                ->where('name', $userData['role'])
                ->whereNull('user_roles.revoked_at')
                ->exists();

            if ($role && !$alreadyHasRole) {
                $user->roles()->attach($role->id, ['assigned_at' => now()]);
            }
        }
    }
}