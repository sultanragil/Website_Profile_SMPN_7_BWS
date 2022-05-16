@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Event > Edit Data </title>
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
  <a class="nav-link" href="{{ route('event.index') }}">
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

@section('dashboard')

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('event.index') }}">Event</a></li>
      <li class="breadcrumb-item active">Create Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Create New Data Form</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ route('event.update',$event->id) }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="col-md-4">
              <label for="inputNanme4" class="form-label">Judul</label>
              <input type="text" class="form-control" id="inputNanme4" name="judul" value="{{ isset($event) ? $event->judul : '' }}">
            </div>
            <div class="col-md-4">
              <label for="inputEmail4" class="form-label">Cover</label>
              <input type="file" class="form-control" id="inputEmail4" name="image">
            </div>
            <div class="form-group">
              <textarea name="isi" class="form-control tinymce-editor">{{ isset($event) ? $event->isi : '' }}</textarea>
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
