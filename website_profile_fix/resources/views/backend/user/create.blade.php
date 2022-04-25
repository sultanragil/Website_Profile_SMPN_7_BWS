@extends('backend.layouts.template')

@section('dashboard')
<div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
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
            <a class="nav-link collapsed" href="{{ route('matpel.index') }}">
        @endsection

        @section('actpegawai')
            <a class="nav-link collapsed" href="{{ route('pegawai.index') }}">
        @endsection

        @section('actsarana')
            <a class="nav-link collapsed" href="{{ route('sarana.index') }}">
        @endsection

        @section('actuser')
            <a class="nav-link " href="{{ route('user.index') }}">
        @endsection

        @section('content')
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Vertical Form</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ route('user.store') }}" class="row g-3" >
            {!! csrf_field() !!}
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="inputNanme4" name="name">
            </div>
            <input type="hidden" name="role" value="admin">
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
</section>
@endsection
