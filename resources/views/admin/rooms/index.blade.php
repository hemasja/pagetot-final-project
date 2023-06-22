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

        <h1>Daftar Kamar Kos</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->name }}</td>
                    <td>{{ $room->description }}</td>
                    <td>
                        @if ($room->description == 'terisi')
                        <a href="{{ route('rooms.show', $room->id) }}" style="text-decoration: none">
                            <button type="button" class="btn btn-warning me-sm-5">Lihat penghuni</button>
                        </a>
                        @else
                        <p>Kamar kosong</p>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Belum ada kamar kos.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        </div>
        </div>
    </form>
</body>

</html>