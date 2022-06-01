@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Edit Data Carousel </title>
@endsection

@section('actdash')
    <a class="nav-link collapsed" href="{{ route('index') }}">
@endsection

@section('actcar')
    <a class="nav-link " href="{{ route('carousel.index') }}">
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

@section('content')

<div class="pagetitle">
    <h1>Carousel</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('carousel.index') }}">Carousel</a></li>
        <li class="breadcrumb-item active">Edit Carousel</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Edit Data</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ route('carousel.update',$carousel->id) }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label for="inputEmail4" class="form-label">Deskripsi Pendek</label>
                  <textarea name="desc" class="form-control tinymce-editor">{{ isset($carousel) ? $carousel->desc : '' }}</textarea>
                </div>
                <div class="col-lg-6">
                  <label for="inputEmail4" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="inputNanme4" name="judul" value="{{ isset($carousel) ? $carousel->judul : '' }}">
                  <label for="inputEmail4" class="form-label">Image</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="inputFile" name="image">
                  </div>
                </div>
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
