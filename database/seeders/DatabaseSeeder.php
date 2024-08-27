<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1= User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',

        ]);

        $role = Role::create(['name' => 'admin']);
        $user1->assignRole($role);

    }
}
