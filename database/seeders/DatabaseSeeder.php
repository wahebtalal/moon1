<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(SettingsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CacheTableSeeder::class);
        $this->call(FontsTableSeeder::class);
    }
}
