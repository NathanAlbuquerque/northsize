<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Dev NS',
            'hierarchy' => 'Administrador',
            'email' => 'dev@ns.com',
            'password' => bcrypt('dvns'),
            'photo' => 'login-user.png',
        ]);

        \App\Models\Banner::factory(10)->create();
    }
}
