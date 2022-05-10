@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Matpel > Create New Data </title>
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
  <a class="nav-link" href="{{ route('matpel.index') }}">
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
      <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Matpel</a></li>
      <li class="breadcrumb-item active">Create Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Create New Data Form</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ route('matpel.store') }}" class="row g-3" >
            {!! csrf_field() !!}
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Nama Matkul</label>
              <input type="text" class="form-control" name="name">
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
