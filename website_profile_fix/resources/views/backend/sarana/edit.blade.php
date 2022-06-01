@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Edit Data Sarana</title>
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
    <a class="nav-link " href="{{ route('sarana.index') }}">
@endsection

@section('actuser')
    <a class="nav-link collapsed" href="{{ route('user.index') }}">
@endsection

@section('actprofil')
    <a class="nav-link collapsed" href="{{ route('cms.index') }}">
@endsection

@section('content')

  <div class="pagetitle">
    <h1>Data Sarana & Prasarana</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sarana.index') }}">Sarana & Prasarana</a></li>
        <li class="breadcrumb-item active">Edit Sarana</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Edit Data</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ isset($sarana) ? route('sarana.update',$sarana->id) : route('sarana.store') }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Nama Sarana</label>
              <input type="text" class="form-control" id="inputNanme4" name="nama" value="{{ isset($sarana) ? $sarana->nama : '' }}">
            </div>
            <input type="hidden" name="role" value="admin">
            <div class="form-group">
              <label for="inputNanme4" class="form-label">Deskripsi</label>
              <textarea name="desc" class="form-control tinymce-editor">{{ isset($sarana) ? $sarana->desc : '' }}</textarea>
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Image</label>
              <input type="file" class="form-control" id="inputPassword4" name="image" value="{{ isset($sarana) ? $sarana->image : '' }}">
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
