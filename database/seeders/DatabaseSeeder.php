<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $languages = ['adabiycha','xorazm shevasi'];
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
        \App\Models\User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin_password')
        ]);
            foreach($languages as $language){
            \App\Models\Language::create([
            'name'=>$language
            ]);
        }
        $words = [
            ['lang_1'=>'vaj','lang_2'=>'narsa'],
            ['lang_1'=>'adam','lang_2'=>'odam'],
            ['lang_1'=>'dil','lang_2'=>'til'],
            ['lang_1'=>'al','lang_2'=>"qo'l"],
            ['lang_1'=>'nichiksan','lang_2'=>'qalaysan'],
            ['lang_1'=>'gashir','lang_2'=>'sabzi'],
            ['lang_1'=>"g'alting",'lang_2'=>'chuqur'],
            ['lang_1'=>"dig'iriq",'lang_2'=>'tor'],
            ['lang_1'=>'secha','lang_2'=>'chumchuq'],
            ['lang_1'=>'qarinja','lang_2'=>'chumoli'],
            ['lang_1'=>'uchak','lang_2'=>'tom'],
            ['lang_1'=>'yumirta','lang_2'=>'tuxum'],
            ['lang_1'=>"yo'k",'lang_2'=>"yo'q"],
            ['lang_1'=>'ertang','lang_2'=>'ertaga'],
            ['lang_1'=>'miyman','lang_2'=>'mexmon'],
            ['lang_1'=>'burunch','lang_2'=>'guruch'],
            ['lang_1'=>'ad','lang_2'=>'ism'],
            ['lang_1'=>'novi','lang_2'=>'nima'],
            ['lang_1'=>'berda','lang_2'=>'bu yerda'],
            ['lang_1'=>'dur','lang_2'=>'tur'],
            ['lang_1'=>"ba'r",'lang_2'=>'ber'],
            ['lang_1'=>'garak','lang_2'=>'kerak'],
            ['lang_1'=>'gun','lang_2'=>'kun'],
            ['lang_1'=>'yap','lang_2'=>'ariq'],
            ['lang_1'=>'atiz','lang_2'=>'ekin maydoni'],
            ['lang_1'=>'naszvay','lang_2'=>'rayhon'],
            ['lang_1'=>"ha'z",'lang_2'=>'mazza'],
            ['lang_1'=>'kulta','lang_2'=>"bog'"],
            ['lang_1'=>"xo'shro'y",'lang_2'=>'chiroyli'],
            ['lang_1'=>'lash','lang_2'=>'gavda'],
            ['lang_1'=>'jorap','lang_2'=>'paypoq'],
            ['lang_1'=>"pa'tik",'lang_2'=>'ship'],
            ['lang_1'=>'payir','lang_2'=>'hamirturush'],
            ['lang_1'=>'adan','lang_2'=>'poygoh'],
            ['lang_1'=>'sulgi','lang_2'=>'sochiq'],
            ['lang_1'=>'sipsa','lang_2'=>'supurgi'],
            ['lang_1'=>"da'liz",'lang_2'=>"da'hliz"],
            ['lang_1'=>'giyim','lang_2'=>'kiyim'],
            ['lang_1'=>"go'ynak",'lang_2'=>"ko'ylak"],
            ['lang_1'=>'keyp','lang_2'=>'kayf'],
            ['lang_1'=>'akkal','lang_2'=>'olib kel'],
            ['lang_1'=>"t'aka",'lang_2'=>'yostiq'],
            ['lang_1'=>'xaraz','lang_2'=>"te'girmon"],
            ['lang_1'=>'uyitqi','lang_2'=>"tomizg'i"],
            ['lang_1'=>'otashkir','lang_2'=>'otash kurak'],
            ['lang_1'=>'dabbi','lang_2'=>'semiz'],
            ['lang_1'=>'varsaqi','lang_2'=>'sergap'],
            ['lang_1'=>'varsaqi','lang_2'=>'vaysaqi'],
            ['lang_1'=>'dish','lang_2'=>'tish'],
            ['lang_1'=>'dil','lang_2'=>'til'],
            ['lang_1'=>"a'giz",'lang_2'=>"og'iz"],
            ['lang_1'=>'bomi','lang_2'=>'bormi'],
            ['lang_1'=>"go'z",'lang_2'=>"ko'z"],
        ];

        foreach($words as $word){
            \App\Models\Translate::create([
                'lang_type'=>2,
                'lang_1'=>$word['lang_2'],
                'lang_2'=>$word['lang_1'],
                'description'=>'null'
                ]);
        }
    }
}
