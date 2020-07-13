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
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }

    public static function find_by_id($pertanyaan_id){
        $items = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $items;
    }
}

?>