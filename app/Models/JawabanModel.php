<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data){
        //data _token nya diilangi
        unset($data["_token"]);
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }

    public static function find_by_id($pertanyaan_id){
        $item = DB::table('jawaban')->where('id', $pertanyaan_id)->first();
        return $item;
    }
}

?>