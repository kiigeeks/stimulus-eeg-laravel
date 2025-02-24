<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\Management;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('Super09876'),
            'roles' => 'SUPERADMIN',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Admin 01',
            'email' => 'admin01@mail.com',
            'password' => bcrypt('Admin01123'),
            'roles' => 'ADMIN',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Admin 02',
            'email' => 'admin02@mail.com',
            'password' => bcrypt('Admin02123'),
            'roles' => 'ADMIN',
            'is_active' => false,
        ]);

        Event::create([
            'name' => 'Star Group',
            'is_active' => true,
        ]);

        Management::create([
            'name' => 'Top',
            'is_active' => true,
        ]);
        Management::create([
            'name' => 'Middle',
            'is_active' => true,
        ]);
        Management::create([
            'name' => 'Low',
            'is_active' => true,
        ]);
    }
}
