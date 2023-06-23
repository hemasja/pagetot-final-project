<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventory extends Model
{
    use HasFactory;

    public static function getAll()
    {
        $result = DB::table('inventaris')
        ->join('rooms', 'inventaris.id_barang', '=', 'rooms.id')
        ->select('*', 'rooms.jenis_kamar')
        ->get();

        return $result;
    }
}
