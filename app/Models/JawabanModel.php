<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

Class JawabanModel{
    public static function get_all(){
        $jawabans = DB::table('jawabans')->get();
        return $jawabans;
    }
    public static function save($data){
        unset($data["_token"]);
        $new_jawaban = DB::table('jawabans')->insert($data);
        return $new_jawaban;
    }
    public static function find_jawaban_id($id){
        $jawabans = DB::table('jawabans')->where('jawaban_id', $id)->first();
        return $jawabans;
    }
    public static function update($request, $id){
        // dd($request);
        $jawaban = DB::table('jawabans')
        ->where('jawaban_id', $id)
        ->update(['isi'=>$request["isi"]]);

        return $jawaban;
    }

    public static function delete($id){
        $jawaban = DB::table('jawabans')
        ->where('jawaban_id', $id)
        ->delete();

        return $jawaban;
    }
}

?>
