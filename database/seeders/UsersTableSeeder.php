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
                'remember_token' => 'EPHZhnhZL1uGnyMWgnLpvq9HiQjpLdaVqFwx7orMlwWmYeFvU6vuzNjl11Hv',
                'created_at' => '2024-12-05 15:37:25',
                'updated_at' => '2024-12-05 15:37:25',
            ),
        ));
        
        
    }
}