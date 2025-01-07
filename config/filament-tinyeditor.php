<?php

return [
    'version' => [
        'tiny' => '7.3.0',
        'language' => [
            // https://cdn.jsdelivr.net/npm/tinymce-i18n@latest/
            'version' => '24.7.29',
            'package' => 'langs7',
        ],
        'licence_key' => env('TINY_LICENSE_KEY', 'no-api-key'),
    ],
    'provider' => 'cloud', // cloud|vendor
     'direction' => 'rtl',
    /**
     * change darkMode: 'auto'|'force'|'class'|'media'|false|'custom'
     */
    'darkMode' => 'auto',

    /** cutsom */
    'skins' => [
        // oxide, oxide-dark, tinymce-5, tinymce-5-dark
        'ui' => 'oxide',

        // dark, default, document, tinymce-5, tinymce-5-dark, writer
        'content' => 'default'
    ],

    'profiles' => [
        'default' => [
            'plugins' => 'accordion autoresize codesample directionality advlist link image lists preview pagebreak searchreplace wordcount code fullscreen insertdatetime media table emoticons',
            'toolbar' => 'undo redo removeformat | fontfamily fontsize fontsizeinput font_size_formats styles | bold italic underline | rtl ltr | alignjustify alignleft aligncenter alignright | numlist bullist outdent indent | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'upload_directory' => null,
        ],

        'simple' => [
            'plugins' => 'autoresize directionality emoticons link wordcount',
            'toolbar' => 'removeformat | bold italic | rtl ltr | numlist bullist | link emoticons',
            'upload_directory' => null,
        ],

        'minimal' => [
            'plugins' => 'link wordcount',
            'toolbar' => 'bold italic link numlist bullist',
            'upload_directory' => null,
        ],

        'full' => [
            'plugins' => 'accordion autoresize codesample directionality advlist autolink link image lists charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media table emoticons help',
            'toolbar' => 'undo redo removeformat | fontfamily fontsize fontsizeinput font_size_formats styles | bold italic underline | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist outdent indent accordion | forecolor backcolor | blockquote table toc hr | image link anchor media codesample emoticons | visualblocks print preview wordcount fullscreen help',
            'upload_directory' => null,
            'custom_configs' => [
//                'fontsize_formats' => '8vmin 10vmin 11vmin 12vmin 13vmin 14vmin 15vmin 16vmin 17vmin 18vmin 19vmin 20vmin 21vmin 22vmin 23vmin 24vmin 25vmin 26vmin 27vmin 28vmin 29vmin 30vmin 32vmin 34vmin 36vmin 38vmin 40vmin 42vmin 44vmin 46vmin 48vmin 50vmin 52vmin 54vmin 56vmin 58vmin 60vmin 62vmin 64vmin 66vmin 68vmin 70vmin 72vmin 74vmin 76vmin 78vmin 80vmin 82vmin 84vmin 86vmin 88vmin 90vmin 92vmin 94vmin 96vmin 98vmin 100vmin',
//                'font_size_input_default_unit'=> "vmin",
//                'font_css'=>'http://moon1.test/font/font.css'

//                'content_style' => '@import url(\'https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&family=Reem+Kufi:wght@400..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap\')',
//                'content_style' => '@import url(\''.url('/font/css').'\')',
//                'font_formats' => implode(';',array_map(
//                    function ($item){
//                        return $item.':'.$item;
//                    },
//                    array_values(array_unique(array_merge(array_map(function ($item){
//                    return $item['name'];
//                }, Outerweb\Settings\Models\Setting::firstWhere('key','fonts')->value
//                    ))))[0]))

            ]
        ],
    ],

    /**
     * this option will load optional language file based on you app locale
     * example:
     * languages => [
     *      'fa' => 'https://cdn.jsdelivr.net/npm/tinymce-i18n@24.7.29/langs7/fa.min.js',
     *      'es' => 'https://cdn.jsdelivr.net/npm/tinymce-i18n@24.7.29/langs7/es.min.js',
     *      'ja' => asset('assets/ja.min.js')
     * ]
     */
    'languages' => [],

    'extra' => [
        'toolbar' => [
             'fontsize' => '10px 12px 13px 14px 16px 18px 20px',
             'fontfamily' => 'Tahoma=tahoma,arial,helvetica,sans-serif;',
        ]
    ]
];
