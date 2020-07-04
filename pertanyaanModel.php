<?php

namespace App\Models;
use illuminate\support\Facades\DB;

class pertanyaanModel {
    public static function get_all(){
        $items = DB::table('pertanyaan')->get();
        return $items;
    }
    public static function save($data){
        unset($data["_token"]);
        $new_item = DB::table('pertanyaan')->insert();
        return $new_item;
    }
}