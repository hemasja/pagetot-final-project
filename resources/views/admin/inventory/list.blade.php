<!DOCTYPE html>
<html lang="en">

@extends('components.head')
@section('title', 'PAGETOT | Daftar Inventaris Kos')

<body>
    <form action="" method="post">
            <div class="card rounded-0 border-0 main-theme mb-xxl-5" style="height: 150px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title text-light fw-bold">Daftar Inventaris Kos</h3>
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


        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Letak Barang</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inventaris as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->jenis_kamar }}</td>
                    <td>{{ $barang->status }}</td>
                    <td>
                        @if ($barang->status == 'Rusak')
                        <a href="#" style="text-decoration: none">
                            <button type="button" class="btn btn-danger me-sm-5">Hapus</button>
                        </a>
                        @else
                            <a href="#" style="text-decoration: none">
                            <button type="button" class="btn btn-warning me-sm-5">Edit</button>
                        </a>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Belum Ada Barang</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        </div>
        </div>
    </form>
</body>

</html>