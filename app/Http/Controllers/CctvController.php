
    public function monitorCctv(Request $request) {
        $cctv = Cctv::getById($request->get('id'));
        return view('cctv.monitor', [
            'location' => $cctv->lokasi,
            'ip_addr' => $cctv->alamat_ip,
        ]);
    }
}