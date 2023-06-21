<!DOCTYPE html>
<html lang="en">

@extends('components.head')
@section('title', 'CCTV')

<body>
  <form action="" method="post">
    <div class="card">
      <div class="card-body" style="background-color: #e3f2fd">
        <h3 class="card-title">Admin Page</h3>
        <button type="button" id="refreshBtn" class="btn btn-secondary mt-lg-4 text-light" onclick="location.reload()">Refresh</button>
        <a href=": none">
          <button type="button" class="btn btn-info mt-lg-4 ms-xxl-4 text-light">Logout</button>
        </a>
      </div>
    </div>

    <div class="card mt-lg-5">
      <div class="card-body" style="background-color: #e3f2fd">
        <h3 class="card-title">List CCTV</h3>
        <table class="table">
          <thead>
            <tr class="table-info">
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