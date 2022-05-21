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
          <form method="POST" action="{{ isset($kontak) ? route('kontak.update',$kontak->id) : route('kontak.store') }}" class="row g-3" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Contact Person</label>
              <input type="text" class="form-control" id="inputNanme4" name="no" value="{{ isset($kontak) ? $kontak->no : '' }}">
            </div>
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="inputNanme4" name="alamat" value="{{ isset($kontak) ? $kontak->alamat : '' }}">
            </div>
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Open Hours</label>
              <input type="text" class="form-control" id="inputNanme4" name="open" value="{{ isset($kontak) ? $kontak->open : '' }}">
            </div>
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Gmail</label>
              <input type="email" class="form-control" id="inputNanme4" name="gmail" value="{{ isset($kontak) ? $kontak->gmail : '' }}">
            </div>
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Facebook</label>
              <input type="text" class="form-control" id="inputNanme4" name="fb" value="{{ isset($kontak) ? $kontak->fb : '' }}">
            </div>
            <div class="col-10">
              <label for="inputNanme4" class="form-label">YouTube</label>
              <input type="text" class="form-control" id="inputNanme4" name="yt" value="{{ isset($kontak) ? $kontak->yt : '' }}">
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
