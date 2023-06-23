<!DOCTYPE html>
<html lang="en">

@extends('components.head')
@section('title', 'PAGETOT | Daftar CCTV Kos')

<body>
  <form action="" method="post">
    <div class="card rounded-0 border-0 main-theme mb-xxl-5" style="height: 150px;">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h3 class="card-title text-light fw-bold">Daftar CCTV Kos</h3>
          </div>
          <div class="col">
            <div class="position-absolute bottom-0 end-0 me-5 mb-3">
              <button type="button" id="refreshBtn" class="btn btn-secondary text-light me-3"
                onclick="location.reload()">Refresh</button>
              <a href="{{ route('admin.dashboard') }}">
                <button type="button" class="btn btn-info text-light">Back</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mt-lg-5 rounded-0 border-0">
      <div class="card-body main-theme">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Lokasi CCTV</th>
              <th scope="col">Alamat IP</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < $cctvs->count(); $i++)
            <tr>
              <td>{{ $i + 1 }}</td>
              <td>{{ $cctvs[$i]->lokasi }}</td>
              <td>{{ $cctvs[$i]->alamat_ip }}</td>
              <td>{{ $cctvs[$i]->status }}</td>
              <td>
                @if ($cctvs[$i]->status == 'Aktif')
                  <a href="{{ route('cctv.monitor', ['id' => $i + 1]) }}" style="text-decoration: none">
                    <button type="button" class="btn btn-warning me-sm-5">Lihat CCTV</button>
                  </a>
                @else
                  <p>CCTV Tidak Aktif</p>
                @endif
              </td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
</form>
</body>
</html>