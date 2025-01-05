<?php
$fonts = "Noor=Noor;
 Cairo=Cairo, sans-serif;
 Tajawal=Tajawal, sans-serif;
 Noto Kufi Arabic=Noto Kufi Arabic, sans-serif;
 Reem Kufi=Reem Kufi, sans-serif;
  Andale Mono=andale mono,times;
   Arial=arial,helvetica,sans-serif;
   Arial Black=arial black,avant garde;
    Book Antiqua=book antiqua,palatino;
     Comic Sans MS=comic sans ms,sans-serif;
      Courier New=courier new,courier;
      Georgia=georgia,palatino;
       Helvetica=helvetica;
       Impact=impact,chicago;
       Oswald=oswald;
       Symbol=symbol;
       Tahoma=tahoma,arial,helvetica,sans-serif;
       Terminal=terminal,monaco;
        Times New Roman=times new roman,times;
         Trebuchet MS=trebuchet ms,geneva;
          Verdana=verdana,geneva;
           Webdings=webdings;
           Wingdings=wingdings,zapf dingbats;
           Roboto=Roboto, sans-serif;
            Open Sans=open sans, sans-serif;
            Montserrat=Montserrat, sans-serif;
            Lato=Lato, sans-serif;
            Poppins=Poppins, sans-serif;
             Raleway=Raleway, sans-serif;
              Ubuntu=Ubuntu, sans-serif;
               Merriweather=Merriweather, serif;
                Playfair Display=Playfair Display, serif;";
return [
    /*
    |--------------------------------------------------------------------------
    | Profiles
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of profiles to use it in your application.
    |
    */
'fonts'=>$fonts,
    'profiles' => [

//        'all' => [
//            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
//            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect fontselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
//            'upload_directory' => null,
//        ],
        'default' => [
            'plugins' => '  advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'accordion undo redo removeformat | formatselect fontsizeselect | fontsizeinput| fontselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor  | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'upload_directory' => null,
            'custom_configs' => [
                'fontsize_formats' => '8px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px',
                'font_size_input_default_unit'=> "pt"

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

//        'default1' => [
//            'plugins' => 'autoresize directionality emoticons link wordcount   ',
//            'toolbar' => 'removeformat |fontselect fontsizeselect |bold italic | rtl ltr |  forecolor   ',
//            'upload_directory' => null,
//        ],
//        'simple' => [
//            'plugins' => 'autoresize directionality emoticons link wordcount',
//            'toolbar' => 'removeformat | fontselect| bold italic | rtl ltr | link emoticons',
//            'upload_directory' => null,
//        ],
//
//        'template' => [
//            'plugins' => 'autoresize template',
//            'toolbar' => 'template',
//            'upload_directory' => null,
//        ],
        /*
        |--------------------------------------------------------------------------
        | Custom Configs
        |--------------------------------------------------------------------------
        |
        | If you want to add custom configurations to directly tinymce
        | You can use custom_configs key as an array
        |
        */

        /*
          'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'custom_configs' => [
                'allow_html_in_named_anchor' => true,
                'link_default_target' => '_blank',
                'codesample_global_prismjs' => true,
                'image_advtab' => true,
                'image_class_list' => [
                  [
                    'title' => 'None',
                    'value' => '',
                  ],
                  [
                    'title' => 'Fluid',
                    'value' => 'img-fluid',
                  ],
              ],
            ]
        ],
        */

    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of templates to use it in your application.
    |
    | https://www.tiny.cloud/docs/plugins/opensource/template/#templates
    |
    | ex: TinyEditor::make('content')->profiles('template')->template('example')
    */

    'templates' => [

        'example' => [
            // content
            ['title' => 'Some title 1', 'description' => 'Some desc 1', 'content' => 'My content'],
            // url
            ['title' => 'Some title 2', 'description' => 'Some desc 2', 'url' => 'http://localhost'],
        ],

    ],
];
