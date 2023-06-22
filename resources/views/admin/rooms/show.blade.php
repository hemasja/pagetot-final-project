<!DOCTYPE html>
<html lang="en">

@extends('components.head')
@section('title', 'Kamar')

<body>
    <form action="" method="post">
        <div class="card">
            <div class="card-body" style="background-color: #e3f2fd">
                <h3 class="card-title">Admin Page</h3>
                <button type="button" id="refreshBtn" class="btn btn-secondary mt-lg-4 text-light"
                    onclick="location.reload()">Refresh</button>
                <a href=": none">
                    <button type="button" class="btn btn-info mt-lg-4 ms-xxl-4 text-light">Logout</button>
                </a>
            </div>
        </div>

        <h1>Profil Penghuni Kamar</h1>
        <div class="card">
            <img src="/public/favicon.ico" class="card-img-top" alt="Foto Penghuni">
            <div class="card-body">
                <h5 class="card-title">Rifky</h5>
                <p class="card-text">08218998391</p>
                <p class="card-text">Email</p>
                <h5 class="card-title">{{ $room->name }}</h5>
            </div>
        </div>
    </form>
</body>

</html>