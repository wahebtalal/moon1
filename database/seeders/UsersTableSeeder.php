<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'waheb',
                'email' => 'w@w.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$AHdCURKsWOd5se5k4aiODuzuSWPSems39.ZQqRQq2NewTkVeMY9ji',
                'remember_token' => 'mxaB6XFMFR7Mm1xxDjeOmK5PZ005L0xlOEpXYZNn3oQJpNyQZ4eLvxjWj85X',
                'created_at' => '2024-12-05 15:37:25',
                'updated_at' => '2024-12-05 15:37:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Super',
                'email' => 'super@super.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$W/Ljsc/DtvJ1ohnFtWDkQe.Pd7ohJllMO1a4t6TVg7O3/fSGaBBni',
                'remember_token' => NULL,
                'created_at' => '2025-01-05 15:18:38',
                'updated_at' => '2025-01-05 15:18:38',
            ),
        ));
        
        
    }
}