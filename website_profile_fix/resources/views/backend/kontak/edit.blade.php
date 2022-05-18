@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Kontak > Edit Data </title>
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
 <a class="nav-link collapsed" href="{{ route('pegawai.index') }}">
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

@section('dashboard')

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('kontak.index') }}">Kontak</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Data Form</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ isset($kontak) ? route('kontak.update',$kontak->id) : route('kontak.store') }}" class="row g-3" >
            @csrf
            @method('PUT')
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Jenis Kontak</label>
              <input type="text" class="form-control" id="inputNanme4" name="jenis" value="{{ isset($kontak) ? $kontak->jenis_kontak : '' }}">
            </div>
            <input type="hidden" name="role" value="admin">
            <div class="col-md-4">
              <label for="inputEmail4" class="form-label">Nama Kontak</label>
              <input type="text" class="form-control" id="inputEmail4" name="nama" value="{{ isset($kontak) ? $kontak->nama_kontak : '' }}">
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Link</label>
              <input type="text" class="form-control" id="inputPassword4" name="link" value="{{ isset($kontak) ? $kontak->link : '' }}">
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Logo</label>
              <input type="file" class="form-control" id="inputPassword4" name="logo" value="{{ isset($kontak) ? $kontak->logo : '' }}">
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
