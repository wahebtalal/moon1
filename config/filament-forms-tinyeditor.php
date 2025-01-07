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
            'plugins' => '  advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount visualchars visualblocks codesample advcode advlist advtable anchor autocorrect autolink autosave casechange charmap checklist codesample directionality editimage emoticons export footnotes formatpainter help image insertdatetime link linkchecker lists media mediaembed mergetags nonbreaking pagebreak permanentpen powerpaste searchreplace table tableofcontents tinymcespellchecker typography visualblocks visualchars wordcount',
            'toolbar' => 'accordion undo redo removeformat | formatselect  | fontsizeinput | fontselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | lineheight| numlist bullist | forecolor  | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'upload_directory' => null,
            'custom_configs' => [
                'fontsize_formats' => '8vmin 10vmin 11vmin 12vmin 13vmin 14vmin 15vmin 16vmin 17vmin 18vmin 19vmin 20vmin 21vmin 22vmin 23vmin 24vmin 25vmin 26vmin 27vmin 28vmin 29vmin 30vmin 32vmin 34vmin 36vmin 38vmin 40vmin 42vmin 44vmin 46vmin 48vmin 50vmin 52vmin 54vmin 56vmin 58vmin 60vmin 62vmin 64vmin 66vmin 68vmin 70vmin 72vmin 74vmin 76vmin 78vmin 80vmin 82vmin 84vmin 86vmin 88vmin 90vmin 92vmin 94vmin 96vmin 98vmin 100vmin',
                'font_size_input_default_unit'=> "vmin"

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
