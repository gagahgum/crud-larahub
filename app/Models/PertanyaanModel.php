<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $pertanyaans = DB::table('pertanyaans')->get();
        return $pertanyaans;
    }
    public static function save($data){
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }
    public static function find_pertanyaan_id($id){
        $pertanyaan = DB::table('pertanyaans')->where('pertanyaan_id', $id)->first();
        return $pertanyaan;
    }
    public static function update($request, $id){
        // dd($request);
        $pertanyaan = DB::table('pertanyaans')
        ->where('pertanyaan_id', $id)
        ->update(['judul'=>$request["judul"],
        'isi'=>$request["isi"]]);

        return $pertanyaan;
    }

    public static function delete($id){
        $pertanyaan = DB::table('pertanyaans')
        ->where('pertanyaan_id', $id)
        ->delete();

        return $pertanyaan;
    }
}


?>
