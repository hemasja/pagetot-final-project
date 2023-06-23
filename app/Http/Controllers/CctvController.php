<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cctv;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function __invoke() {
        $cctvs = Cctv::getAll();
        return view('admin.cctv.list', ['cctvs' => $cctvs]);
    }

    public function monitorCctv(Request $request) {
        $cctv = Cctv::getById($request->get('id'));
        return view('admin.cctv.monitor', [
            'location' => $cctv->lokasi,
            'ip_addr' => $cctv->alamat_ip,
        ]);
    }
}