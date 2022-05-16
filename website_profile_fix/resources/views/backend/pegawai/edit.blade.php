@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Pegawai </title>
@endsection

@section('actdash')
    <a class="nav-link collapsed" href="{{ route('index') }}">
@endsection

@section('actberita')
    <a class="nav-link collapsed" href="{{ route('berita.index') }}">
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

@section('content')

<div class="pagetitle">
    <h1>Data Pegawai & Karyawan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Pegawai & Karyawan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Create New Data Form</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ isset($pegawai) ? route('pegawai.update',$pegawai->id) : route('kontak.store') }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <input type="hidden" name="id" value="{{ isset($pegawai) ? $pegawai->id : '' }}" id="">
                <div class="col-md-4">
                    <label for="inputNanme4" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNanme4" name="name" value="{{ isset($pegawai) ? $pegawai->name : '' }}" required>
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nip" value="{{ isset($pegawai) ? $pegawai->nip : '' }}" required>
                </div>
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Kategori</label>
              <select name="kategori" id="country" class="form-select" required>
                <option value="guru" @if(old('kategori',$pegawai->category) == 'guru') selected @endif>Guru</option>
                <option value="karyawan" @if(old('kategori',$pegawai->category) == 'karyawan') selected @endif>Karyawan</option>
              </select>
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Jabatan</label>
                <select name="jabatan" id="state" class="form-select" required>
                    <option value="" selected disabled>Pilih</option>
                    @foreach($job as $item)
                        <option value="{{$item->id}}" @if(old('jabatan',$pegawai->job) == $item->id) selected @endif> {{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="inputEmail4" name="image">
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
