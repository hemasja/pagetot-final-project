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
        <h3 class="card-title mb-lg-3">Monitor CCTV</h3>
        <h5 class="fs-6">Lokasi : {{ $location }}</h5>
        <h5 class="fs-6">Alamat IP : {{ $ip_addr }}</h5>
        {{-- Dummy CCTV Video --}}
        <iframe width="560" height="315" src="https://www.youtube.com/embed/1-iS7LArMPA?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="display: block"></iframe>
        <a href="{{ route('cctv.list') }}" style="text-decoration: none">
          <button type="button" class="btn btn-primary me-sm-5 mt-lg-4">Kembali</button>
        </a>
      </div>
    </div>
</form>
</body>
</html>