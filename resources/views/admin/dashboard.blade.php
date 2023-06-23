<!DOCTYPE html>
<html lang="en">
@extends('components.head')
@section('title', 'PAGETOT | Dashboard')

<body>
<div class="row justify-content-center align-items-center" style="height: 40vh">
      <div class="col">
        <div class="card rounded-0 border-0 main-theme" style="height: 200px">
          <div class="card-body">
            <div class="row">
                <div class="col">
                    <h2 class="acc-text mb-lg-5 pb-lg-3 fw-bold">Welcome, {{$name}}</h2>
                    <br />
                    <h4 class="acc-text">Status: <span class="fw-bold">Pemilik Kos</span></h4>
                </div>
                <div class="col">
                    <a href="{{ route('admin.logout') }}" style="text-decoration: none;">
                        <input class="position-absolute bottom-0 end-0 me-5 mb-3 btn btn-danger" type="submit" value="Log Out">
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card border-0">
        <div class="card-body">
          <div class="row justify-content-center align-items-center pt-lg-2 pb-lg-4">
            <div class="col-sm-1 col-lg-2 justify-content-center align-items-center text-center">
              <a href="{{ route('cctv.list') }}">
                <img id="img" src="{{ asset('/img/cctv_vector.png') }}" alt="CCTV Icon">
              </a>
              <p class="fw-bold">Cek CCTV Kos</p>
            </div>
            <div class="col-sm-1 col-lg-2 justify-content-center align-items-center text-center">
              <a href="{{ route('room.list') }}">
                <img id="img" src="{{ asset('/img/bed_vector.png') }}" alt="Bed Icon">
              </a>
              <p class="fw-bold">Cek Kamar Kos</p>
            </div>
          </div>
          <div class="row justify-content-center align-items-center pt-lg-4">
            <div class="col-sm-1 col-lg-2 justify-content-center align-items-center text-center">
              <a href="#">
                <img id="img" src="{{ asset('/img/chat_vector.png') }}" alt="Chat Icon">
              </a>
              <p class="fw-bold">Chat</p>
            </div>
            <div class="col-sm-1 col-lg-2 justify-content-center align-items-center text-center">
              <a href="{{ route('inventaris.list') }}">
                <img id="img" src="{{ asset('/img/bedside_table_vector.png') }}" alt="Inventory Icon">
              </a>
              <p class="fw-bold">Cek Inventaris Kos</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>