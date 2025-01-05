<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_media')->delete();
        
        \DB::table('social_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'الفيسبوك',
                'url' => 'http://asmahosna.test/',
                'icon' => 'bi-facebook',
                'color' => '#0204f2',
                'floating' => 1,
                'created_at' => '2025-01-02 23:29:07',
                'updated_at' => '2025-01-03 00:43:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'واتساب',
                'url' => 'http://asmahosna.test/',
                'icon' => 'bi-whatsapp',
                'color' => '#09fa05',
                'floating' => 1,
                'created_at' => '2025-01-03 00:45:29',
                'updated_at' => '2025-01-03 00:45:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'البريد الالكتروني',
                'url' => 'mailto:wahebtalal@gmail.com',
                'icon' => 'bxl-gmail',
                'color' => '#d91f1f',
                'floating' => 0,
                'created_at' => '2025-01-03 01:57:00',
                'updated_at' => '2025-01-03 03:39:16',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'واتساب',
                'url' => 'https://h.com',
                'icon' => 'bi-whatsapp',
                'color' => '#e60ecc',
                'floating' => 0,
                'created_at' => '2025-01-04 15:39:41',
                'updated_at' => '2025-01-04 15:39:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}