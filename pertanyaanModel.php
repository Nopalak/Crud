<?php

namespace App\Models;
use illuminate\support\Facades\DB;

class ItemModel {
    public static function get_all(){
        $items = DB::table('pertanyaan')->get();
        return $items;
    }
    public static function save($data){
        $new_item = DB::table('pertanyaan')->insert();
        return $new_item;
    }
}