<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Translate;

class ServiceController extends Controller
{
    public function create_resurs(Request $request){
        // dd($request);
        $lang_1 = $request->input('lang_1'); // original lang(adabiycha)
        $lang_2 = $request->input('lang_2'); // lang 2 (sheva)
        $lang_1_text = $request->input('lang_1_text');
        $lang_2_text = $request->input('lang_2_text');
        // dd($lang_1);
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
        $word = $request->input('word');
        $lang_1 = $request->input('lang_1'); //til 1
        $lang_2 = $request->input('lang_2'); //til 2
        // if($lang == 1){

        // }
        $respons = Translate::where('lang_1', 'like', '%'.$word.'%')->get();
        // $respons = Translate::where('lang_type',$lang_2)->where('lang_1', 'like', '%sabzi%')->get();
        // $respons = Translate::where('lang_1', 'sabzi')->get();
        dd($respons);

    }
}
