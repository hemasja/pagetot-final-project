<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cctv extends Model
{
    use HasFactory;

    public static function getAll() {
        $result = DB::table('cctvs')->get();
        return $result;
    }

    public static function getById($id) {
        $result = DB::table('cctvs')->select(['lokasi', 'alamat_ip'])->where('id_cctv', $id)->get();
        return $result[0];
    }
}
