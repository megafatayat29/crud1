<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data){
        //data _token nya diilangi
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }
    
    public static function find_by_id($pertanyaan_id){
        $pertanyaan = DB::table('jawaban')->where('id', $pertanyaan_id)->first();
        return $pertanyaan;
    }
}

?>