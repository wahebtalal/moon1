<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FontsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fonts')->delete();
        
        \DB::table('fonts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Name' => '["Cairo Play","Noto Kufi Arabic","Reem Kufi","Rubik","Ruwudu","Tajawal"]',
                'url' => 'https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&family=Reem+Kufi:wght@400..700&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruwudu:wght@400;500;600;700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap',
                'file' => NULL,
                'css' => '@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 200;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1EnYq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 300;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1zHYq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1knYq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1oHYq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 600;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1THEq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1dXEq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 800;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1EnEq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Cairo Play\';
font-style: normal;
font-weight: 900;
font-display: swap;
src: url(https://fonts.gstatic.com/s/cairoplay/v7/wXKEE3QSpo4vpRz_mz6FP-8iaauCLt_Hjopv3miu5IvcJo49mOo1O3Eq9w.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 100;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh5v3obP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 200;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh7v34bP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 300;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh4x34bP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh5v34bP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh5d34bP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 600;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh6x2IbP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh6I2IbP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 800;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh7v2IbP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Noto Kufi Arabic\';
font-style: normal;
font-weight: 900;
font-display: swap;
src: url(https://fonts.gstatic.com/s/notokufiarabic/v21/CSRp4ydQnPyaDxEXLFF6LZVLKrodhu8t57o1kDc5Wh7G2IbP.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Reem Kufi\';
font-style: normal;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/reemkufi/v21/2sDPZGJLip7W2J7v7wQZZE1I0yCmYzzQtuZnEGE.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Reem Kufi\';
font-style: normal;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/reemkufi/v21/2sDPZGJLip7W2J7v7wQZZE1I0yCmYzzQttRnEGE.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Reem Kufi\';
font-style: normal;
font-weight: 600;
font-display: swap;
src: url(https://fonts.gstatic.com/s/reemkufi/v21/2sDPZGJLip7W2J7v7wQZZE1I0yCmYzzQtjhgEGE.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Reem Kufi\';
font-style: normal;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/reemkufi/v21/2sDPZGJLip7W2J7v7wQZZE1I0yCmYzzQtgFgEGE.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 300;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8sDE0Uw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tdE0Uw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tvE0Uw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 600;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8uDFEUw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8u6FEUw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 800;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8vdFEUw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: italic;
font-weight: 900;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8v0FEUw.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 300;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYi1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4i1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYi1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 600;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 800;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-h4-1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Rubik\';
font-style: normal;
font-weight: 900;
font-display: swap;
src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-ro-1UA.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Ruwudu\';
font-style: normal;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/ruwudu/v4/syky-y1tj6UzRKfNlQ.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Ruwudu\';
font-style: normal;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/ruwudu/v4/sykx-y1tj6UzRKf1YSm3_g.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Ruwudu\';
font-style: normal;
font-weight: 600;
font-display: swap;
src: url(https://fonts.gstatic.com/s/ruwudu/v4/sykx-y1tj6UzRKf1TS63_g.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Ruwudu\';
font-style: normal;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/ruwudu/v4/sykx-y1tj6UzRKf1KS-3_g.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 200;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iurf6YBj_oCad4k1l_6gLrY.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 300;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iurf6YBj_oCad4k1l5qjLrY.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 400;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iura6YBj_oCad4k1rzY.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 500;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iurf6YBj_oCad4k1l8KiLrY.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 700;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iurf6YBj_oCad4k1l4qkLrY.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 800;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iurf6YBj_oCad4k1l5anLrY.ttf) format(\'truetype\');
}
@font-face {
font-family: \'Tajawal\';
font-style: normal;
font-weight: 900;
font-display: swap;
src: url(https://fonts.gstatic.com/s/tajawal/v10/Iurf6YBj_oCad4k1l7KmLrY.ttf) format(\'truetype\');
}
body {
--google-font-color-cairoplay:none;
}
',
                'type' => 'google',
                'created_at' => '2025-01-05 14:44:57',
                'updated_at' => '2025-01-05 14:44:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'Name' => '["KO Rubbama Black Expanded"]',
                'url' => NULL,
                'file' => 'fonts/01JGVEV7F42MT39GBJ02N8BDGB.ttf',
                'css' => '@font-face {
font-family: \'KO Rubbama Black Expanded\';
src: url(\'/storage/fonts/01JGVEV7F42MT39GBJ02N8BDGB.ttf\');
}',
                'type' => 'file',
                'created_at' => '2025-01-05 14:45:29',
                'updated_at' => '2025-01-05 14:45:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}