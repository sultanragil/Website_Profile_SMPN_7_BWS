@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Edit Data Jabatan </title>
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
    <a class="nav-link" href="{{ route('jabatan.index') }}">
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
    <h1>Data Jabatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('jabatan.index') }}">Jabatan</a></li>
        <li class="breadcrumb-item active">Edit Jabatan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Edit Data</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{route('jabatan.update',$courses->id)}}" class="row g-3" >
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ isset($courses) ? $courses->id : '' }}">
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Bidang</label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{ isset($courses) ? $courses->name : '' }}" required>
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
