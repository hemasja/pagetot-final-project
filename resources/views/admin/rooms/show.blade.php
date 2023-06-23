<!DOCTYPE html>
<html lang="en">

@extends('components.head')
@section('title', 'Kamar')

<body>
    <form action="" method="post">
            <div class="card rounded-0 border-0 main-theme mb-xxl-5" style="height: 150px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title text-light fw-bold">Daftar Kamar Kos</h3>
                        </div>
                        <div class="col">
                            <div class="position-absolute bottom-0 end-0 me-5 mb-3">
                                <button type="button" id="refreshBtn" class="btn btn-secondary text-light me-3"
                                    onclick="location.reload()">Refresh</button>
                                <a href="{{ route('room.list') }}">
                                    <button type="button" class="btn btn-info text-light">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <h1>Profil Penghuni Kamar</h1>
        <div class="card">
            <img src="/public/favicon.ico" class="card-img-top" alt="Foto Penghuni">
            <div class="card-body">
                <h5 class="card-title">Rifky</h5>
                <p class="card-text">08218998391</p>
                <p class="card-text">Email</p>
                <h5 class="card-title">{{ $room->jenis_kamar }}</h5>
            </div>
        </div>
    </form>
</body>

</html>