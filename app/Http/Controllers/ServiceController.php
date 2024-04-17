<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Translate;
use \App\Models\Language;

class ServiceController extends Controller
{
    public function create_resurs(Request $request){
        // dd($request);
        $lang_1 = strtolower($request->input('lang_1')); // original lang(adabiycha)
        $lang_2 = strtolower($request->input('lang_2')); // lang 2 (sheva)
        $lang_1_text = strtolower($request->input('lang_1_text'));
        $lang_2_text = strtolower($request->input('lang_2_text'));
        Translate::create([
            'lang_1'=>$lang_1_text,
            'lang_2'=>$lang_2_text,
            'lang_type'=>$lang_2,
            'description'=>'null',
        ]);
        $message = '"'.$lang_1_text.'" saqlandi.';
        return redirect()->route('dashboard')->with('status',$message);
    }
    public function search(Request $request){
        // dd($request);
        $word = strtolower($request->input('word'));
        $lang_1 = strtolower($request->input('lang_1')); //til 1
        $lang_2 = strtolower($request->input('lang_2')); //til 2
        if($lang_1 == $lang_2){
            $r = ['status'=>'error',
                  'message'=>'tillar bir xil',
                  'data'=>[]    
            ];
            return json_encode($r);
        }
        // $respons = Translate::get(); //all
        $respons = Translate::where('lang_type',$lang_2)->where('lang_1', 'like', $word.'%')->limit(8)->get(); //starwith
        // $respons = Translate::where('lang_type',$lang_2)->where('lang_1', 'like', '%'.$word.'%')->get(); // ichida bormi ?
        $r = ['status'=>'succes',
              'message'=>"so'rovingiz qabul qilindi",
              'data'=>$respons    
        ];
        return json_encode($r);
    }
    public function get_data(Translate $translate){
        $org_lang = Language::find(1);
        $to_lang = Language::find($translate->lang_type);
        $respons = [
            'status'=>'succes',
            'message'=>'malumot topildi',
            'org_lang'=>$org_lang,
            'to_lang'=>$to_lang,
            'data'=>$translate
        ];
        return json_encode($respons);
    }
}
