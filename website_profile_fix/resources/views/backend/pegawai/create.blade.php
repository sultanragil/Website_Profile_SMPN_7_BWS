@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Tambah Data Pegawai </title>
@endsection

@section('actdash')
    <a class="nav-link collapsed" href="{{ route('index') }}">
@endsection

@section('actcar')
    <a class="nav-link collapsed" href="{{ route('carousel.index') }}">
@endsection

@section('actdata')
    <a class="nav-link collapsed" href="{{ route('data.index') }}">
@endsection

@section('actevent')
    <a class="nav-link collapsed" href="{{ route('event.index') }}">
@endsection

@section('actkontak')
    <a class="nav-link collapsed" href="{{ route('kontak.index') }}">
@endsection

@section('actmatpel')
    <a class="nav-link collapsed" href="{{ route('jabatan.index') }}">
@endsection

@section('actpegawai')
    <a class="nav-link " href="{{ route('pegawai.index') }}">
@endsection

@section('actsarana')
    <a class="nav-link collapsed" href="{{ route('sarana.index') }}">
@endsection

@section('actuser')
    <a class="nav-link collapsed" href="{{ route('user.index') }}">
@endsection

@section('actprofil')
    <a class="nav-link collapsed" href="{{ route('cms.index') }}">
@endsection

@section('content')

<div class="pagetitle">
    <h1>Data Pegawai & Karyawan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('pegawai.index') }}">Pegawai & Karyawan</a></li>
        <li class="breadcrumb-item active">Tambah Pegawai & Karyawan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Data Baru</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ route('pegawai.store') }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="inputNanme4" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNanme4" name="name" required>
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nip" required>
                </div>
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Kategori</label>
              <select name="kategori" id="country" class="form-select" required>
                <option value="" selected disabled>Pilih</option>
                <option value="Guru">Guru</option>
                <option value="Karyawan">Karyawan</option>
              </select>
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Bidang</label>
                <select name="jabatan" id="state" class="form-select" required>
                    <option value="" selected disabled>Pilih</option>
                    @foreach($job as $item)
                        <option value="{{$item->id}}"> {{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="inputEmail4" name="image" required>
                </div>
            </div>
            <div class="left-text">
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </section>
@endsection
