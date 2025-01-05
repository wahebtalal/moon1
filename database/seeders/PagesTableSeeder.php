<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Moon1 | موون1 ',
                'slug' => '/',
                'layout' => 'main',
                'blocks' => '[{"type":"label","data":{"title":"<p><span style=\\"font-family: \'Cairo Play\'; font-size: 38px; color: #ffffff;\\">\\u0645\\u0646 \\u0646\\u062d\\u0646\\ud83d\\ude1c<\\/span><\\/p>"}},{"type":"page-section","data":{"layout":"flex","columns":{"cc4deff0-3879-4ef4-9d5e-6fd792ce1016":{"breakpoint":"default","value":null}},"gap":"20","row_gap":null,"column_gap":null,"flex_alignment":"start","flex_direction":"row","flex_wrap":"nowrap","justify_content":"flex-start","justify_items":"start","blocks":[{"type":"static-content","data":{"content":"<p style=\\"text-align: justify;\\"><span style=\\"font-size: 24pt;\\"><strong>\\u0634\\u0631\\u0643\\u0629 \\u0644\\u0648\\u062c\\u0633\\u062a\\u064a\\u0629<\\/strong><\\/span><span style=\\"font-size: 18pt;\\"><span style=\\"font-size: 24pt;\\"> <\\/span>\\u0647\\u064a \\u0645\\u0624\\u0633\\u0633\\u0629 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u062a\\u0639\\u0645\\u0644 \\u0639\\u0644\\u0649 \\u062a\\u0646\\u0638\\u064a\\u0645 \\u0648\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0633\\u0644\\u0633\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0648\\u0631\\u064a\\u062f \\u0628\\u0643\\u0641\\u0627\\u0621\\u0629\\u060c \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062a\\u0648\\u0641\\u064a\\u0631 \\u062d\\u0644\\u0648\\u0644 \\u0646\\u0642\\u0644 \\u0648\\u062a\\u0648\\u0632\\u064a\\u0639 \\u0627\\u0644\\u0628\\u0636\\u0627\\u0626\\u0639 \\u0628\\u0637\\u0631\\u064a\\u0642\\u0629 \\u0641\\u0639\\u0627\\u0644\\u0629 \\u0648\\u0627\\u0642\\u062a\\u0635\\u0627\\u062f\\u064a\\u0629. \\u062a\\u0633\\u0647\\u0645 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0641\\u064a \\u062a\\u0633\\u0647\\u064a\\u0644 \\u062d\\u0631\\u0643\\u0629 \\u0627\\u0644\\u0628\\u0636\\u0627\\u0626\\u0639 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0635\\u062f\\u0631 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0648\\u062c\\u0647\\u0629 \\u0627\\u0644\\u0646\\u0647\\u0627\\u0626\\u064a\\u0629\\u060c \\u0645\\u0645\\u0627 \\u064a\\u0636\\u0645\\u0646 \\u062a\\u0644\\u0628\\u064a\\u0629 \\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0648\\u062a\\u0648\\u0635\\u064a\\u0644 \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0628\\u0633\\u0644\\u0627\\u0633\\u0629 \\u0648\\u0623\\u0645\\u0627\\u0646. \\u062a\\u0639\\u062a\\u0645\\u062f \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0627\\u0644\\u0644\\u0648\\u062c\\u0633\\u062a\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0645\\u062a\\u0646\\u0648\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0631\\u062f \\u0645\\u062b\\u0644 \\u0627\\u0644\\u0646\\u0642\\u0644 \\u0627\\u0644\\u0628\\u0631\\u064a\\u060c \\u0627\\u0644\\u0628\\u062d\\u0631\\u064a\\u060c \\u0648\\u0627\\u0644\\u062c\\u0648\\u064a\\u060c \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0648\\u062f\\u0639\\u0627\\u062a \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u062e\\u0632\\u064a\\u0646\\u060c \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0634\\u0627\\u0645\\u0644\\u0629 \\u062a\\u0634\\u0645\\u0644 \\u0627\\u0644\\u062a\\u062e\\u0644\\u064a\\u0635 \\u0627\\u0644\\u062c\\u0645\\u0631\\u0643\\u064a\\u060c \\u0627\\u0644\\u062a\\u0639\\u0628\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u063a\\u0644\\u064a\\u0641\\u060c \\u0648\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u062e\\u0632\\u0648\\u0646. \\u062a\\u0644\\u062a\\u0632\\u0645 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0628\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0627\\u0644\\u0643\\u0641\\u0627\\u0621\\u0629\\u060c \\u0648\\u062a\\u0633\\u0639\\u0649 \\u062f\\u0627\\u0626\\u0645\\u064b\\u0627 \\u0644\\u062a\\u0637\\u0648\\u064a\\u0631 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0647\\u0627 \\u0644\\u062a\\u0644\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u063a\\u064a\\u0631\\u0629 \\u0644\\u0644\\u0633\\u0648\\u0642 \\u0648\\u062a\\u0648\\u0642\\u0639\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621.<\\/span><\\/p>"}}]}},{"type":"label","data":{"title":"<p><span style=\\"font-family: \'Cairo Play\'; font-size: 40px; color: #ffffff;\\">\\u0631\\u0633\\u0627\\u0644\\u062a\\u0646\\u0627<\\/span><\\/p>"}},{"type":"page-section","data":{"layout":"flex","columns":{"cf747f40-5378-4bd2-b93f-57c216b987c9":{"breakpoint":"default","value":"1"}},"gap":4,"row_gap":null,"column_gap":null,"flex_alignment":"stretch","flex_direction":"row","flex_wrap":"nowrap","justify_content":"start","justify_items":"center","blocks":[{"type":"paragraph-with-icon","data":{"icon":"01JGMHNTQ0VV2YBDZCMTA3EGWW.png","text":"<p style=\\"line-height: 2; text-align: justify;\\"><span style=\\"font-size: 18px;\\"><span lang=\\"AR-SA\\">\\u0641\\u064a \\u0639\\u0627\\u0644\\u0645 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0645\\u062a\\u0633\\u0627\\u0631\\u0639\\u060c \\u062a\\u0644\\u0639\\u0628 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0627\\u0644\\u0644\\u0648\\u062c\\u0633\\u062a\\u064a\\u0629 \\u062f\\u0648\\u0631\\u064b\\u0627 \\u062d\\u064a\\u0648\\u064a\\u064b\\u0627 \\u0641\\u064a \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0627\\u0644\\u0643\\u0641\\u0627\\u0621\\u0629 \\u0648\\u0627\\u0644\\u0641\\u0639\\u0627\\u0644\\u064a\\u0629 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0647\\u0627. \\u062a\\u062a\\u0645\\u062b\\u0644 \\u0631\\u0633\\u0627\\u0644\\u0629 \\u0634\\u0631\\u0643\\u0629 \\u0644\\u0648\\u062c\\u0633\\u062a\\u064a\\u0629 \\u0646\\u0645\\u0648\\u0630\\u062c\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0648\\u0641\\u064a\\u0631 \\u062d\\u0644\\u0648\\u0644 \\u062a\\u0648\\u0635\\u064a\\u0644 \\u0627\\u0644\\u0637\\u0644\\u0628\\u0627\\u062a \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u062a\\u0633\\u0647\\u0645 \\u0641\\u064a \\u062a\\u0633\\u0631\\u064a\\u0639 \\u0648\\u062a\\u064a\\u0631\\u0629 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u0629 \\u0648\\u062a\\u0639\\u0632\\u064a\\u0632 \\u0627\\u0644\\u0646\\u0645\\u0648 \\u0627\\u0644\\u0627\\u0642\\u062a\\u0635\\u0627\\u062f\\u064a. \\u062a\\u0633\\u0639\\u0649 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0644\\u062a\\u062d\\u0642\\u064a\\u0642 \\u0627\\u0644\\u062a\\u0645\\u064a\\u0632 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0627\\u0628\\u062a\\u0643\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0645\\u0631 \\u0648\\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u0644\\u0648\\u062c\\u0633\\u062a\\u064a\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u062a\\u0641\\u0648\\u0642 \\u062a\\u0648\\u0642\\u0639\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621. \\u0643\\u0645\\u0627 \\u062a\\u0639\\u0645\\u0644 \\u0639\\u0644\\u0649 \\u0628\\u0646\\u0627\\u0621 \\u0639\\u0644\\u0627\\u0642\\u0627\\u062a \\u0627\\u0633\\u062a\\u0631\\u0627\\u062a\\u064a\\u062c\\u064a\\u0629 \\u0637\\u0648\\u064a\\u0644\\u0629 \\u0627\\u0644\\u0623\\u0645\\u062f \\u0645\\u0639 \\u0634\\u0631\\u0643\\u0627\\u0626\\u0647\\u0627 \\u0648\\u0639\\u0645\\u0644\\u0627\\u0626\\u0647\\u0627\\u060c \\u0645\\u0639 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0633\\u0624\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a\\u0629. \\u0625\\u0646 \\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0627\\u0644\\u062a\\u0642\\u0646\\u064a \\u0648\\u0627\\u0644\\u0645\\u0631\\u0648\\u0646\\u0629 \\u0641\\u064a \\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644\\u060c \\u064a\\u062c\\u0639\\u0644 \\u0645\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0634\\u0631\\u0643\\u0627\\u0621 \\u0623\\u0633\\u0627\\u0633\\u064a\\u064a\\u0646 \\u0641\\u064a \\u0633\\u0644\\u0633\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0648\\u0631\\u064a\\u062f \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a\\u0629<\\/span><span dir=\\"LTR\\">.<\\/span><\\/span><\\/p>"}}]}},{"type":"label","data":{"title":"\\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627"}},{"type":"page-section","data":{"layout":"flex","columns":{"83d6ee1f-faca-4970-9d90-5136067875f8":{"breakpoint":"lg","value":"1"},"5132ecbe-34c1-419f-bacf-aef3fe40fa7b":{"breakpoint":"default","value":"1"}},"gap":"10","row_gap":null,"column_gap":null,"flex_alignment":"center","flex_direction":"row","flex_wrap":"wrap","justify_content":"evenly","justify_items":"center","blocks":[{"type":"card","data":{"icon":"icons\\/01JGM211ZYSY5FGZT7XTNYPRPZ.png","title":"\\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0648\\u0635\\u064a\\u0644","description":null}},{"type":"card","data":{"icon":"icons\\/01JGM21204F7EWCD2C0HKKVM6B.png","title":"24 \\u0633\\u0627\\u0639\\u0629","description":null}}]}},{"type":"label","data":{"title":"\\u0634\\u0631\\u0643\\u0627\\u0621\\u0646\\u0627"}},{"type":"page-section","data":{"layout":"flex","columns":{"40c4c950-8b3f-44f9-aee6-66e3158f70fc":{"breakpoint":"default","value":null}},"gap":4,"row_gap":null,"column_gap":null,"flex_alignment":"center","flex_direction":"row","flex_wrap":"wrap","justify_content":"center","justify_items":"start","blocks":[{"type":"card-image","data":{"icon":"01JGM4MWQGA6QQ38D4QSG6Y66C.jpg","title":"\\u0647\\u0646\\u0642\\u0631\\u0633\\u062a\\u064a\\u0634\\u0646","description":"HungerStation","url":null}},{"type":"card-image","data":{"icon":"01JGM4MWQGA6QQ38D4QSG6Y66C.jpg","title":"\\u0647\\u0646\\u0642\\u0631\\u0633\\u062a\\u064a\\u0634\\u0646","description":"HungerStation","url":null}},{"type":"card-image","data":{"icon":"01JGM4MWQGA6QQ38D4QSG6Y66C.jpg","title":"\\u0647\\u0646\\u0642\\u0631\\u0633\\u062a\\u064a\\u0634\\u0646","description":"HungerStation","url":null}},{"type":"card-image","data":{"icon":"01JGM4MWQGA6QQ38D4QSG6Y66C.jpg","title":"\\u0647\\u0646\\u0642\\u0631\\u0633\\u062a\\u064a\\u0634\\u0646","description":"HungerStation","url":"https:\\/\\/moon1.sa\\/"}}]}},{"type":"label","data":{"title":"\\u0623\\u0647\\u062f\\u0627\\u0641\\u0646\\u0627"}},{"type":"page-section","data":{"layout":"flex","columns":{"086d8ae7-b947-40f4-9b20-49c31c2d75da":{"breakpoint":"default","value":null}},"gap":"20","row_gap":null,"column_gap":null,"flex_alignment":"start","flex_direction":"row","flex_wrap":"wrap","justify_content":"around","justify_items":"start","blocks":[{"type":"paragraph-with-icon","data":{"icon":"01JGMEVS3FGJJGKZRRGRFXEEKJ.png","text":"<p style=\\"text-align: justify;\\"><span style=\\"font-size: 22px;\\">\\u062a\\u062d\\u0633\\u064a\\u0646 \\u0643\\u0641\\u0627\\u0621\\u0629 \\u0627\\u0644\\u0646\\u0642\\u0644 \\u0648\\u0627\\u0644\\u062a\\u0648\\u0632\\u064a\\u0639 \\u0644\\u0636\\u0645\\u0627\\u0646&nbsp; \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0628\\u0636\\u0627\\u0626\\u0639 \\u0628\\u0623\\u0645\\u0627\\u0646 \\u0648\\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f<\\/span><\\/p>"}},{"type":"paragraph-with-icon","data":{"icon":"01JGMEVS3FGJJGKZRRGRFXEEKJ.png","text":"<p style=\\"text-align: justify;\\"><span style=\\"font-size: 28px; font-family: Rubik;\\">\\u062a\\u062d\\u0633\\u064a\\u0646 \\u0643\\u0641\\u0627\\u0621\\u0629 \\u0627\\u0644\\u0646\\u0642\\u0644 \\u0648\\u0627\\u0644\\u062a\\u0648\\u0632\\u064a\\u0639 <\\/span><span style=\\"font-size: 28px; font-family: Rubik;\\">\\u0644\\u0636\\u0645\\u0627\\u0646 <\\/span><\\/p>\\n<p style=\\"text-align: justify;\\"><span style=\\"font-size: 28px; font-family: Rubik;\\">\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0628\\u0636\\u0627\\u0626\\u0639 \\u0628\\u0623\\u0645\\u0627\\u0646 \\u0648\\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f.<\\/span><\\/p>"}},{"type":"paragraph-with-icon","data":{"icon":"01JGMEVS3FGJJGKZRRGRFXEEKJ.png","text":"<p><span style=\\"font-family: Rubik; font-size: 28px;\\">\\u062a\\u062d\\u0633\\u0640\\u0640\\u064a\\u0646 \\u0643\\u0641\\u0640\\u0640\\u0640\\u0627\\u0621\\u0629 \\u0627\\u0644\\u0646\\u0642\\u0644 \\u0648\\u0627\\u0644\\u062a\\u0640\\u0640\\u0648\\u0632\\u064a\\u0639 <\\/span><span style=\\"font-family: Rubik; font-size: 28px;\\">\\u0644\\u0636\\u0645\\u0627\\u0646 <\\/span><\\/p>\\n<p><span style=\\"font-family: Rubik; font-size: 28px;\\">\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0628\\u0636\\u0627\\u0626\\u0639 <\\/span><span style=\\"font-family: Rubik; font-size: 28px;\\">\\u0628\\u0623\\u0645\\u0627\\u0646 \\u0648\\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f.<\\/span><\\/p>"}}]}},{"type":"label","data":{"title":"<p><span style=\\"font-family: \'Cairo Play\';\\">\\u0645\\u0648\\u0627\\u0642\\u0639 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644<\\/span><\\/p>"}},{"type":"social-media","data":[]}]',
                'parent_id' => NULL,
                'created_at' => '2025-01-01 17:31:46',
                'updated_at' => '2025-01-05 14:53:38',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'الصحة الريسية',
                'slug' => 'alsh-alrysy',
                'layout' => 'main',
                'blocks' => '[{"type":"label","data":{"title":"<p><span style=\\"font-size: 17px;\\">\\u0645\\u0646 \\u0646\\u062d\\u0646<\\/span><\\/p>"}}]',
                'parent_id' => NULL,
                'created_at' => '2025-01-04 15:41:45',
                'updated_at' => '2025-01-04 15:43:01',
            ),
        ));
        
        
    }
}