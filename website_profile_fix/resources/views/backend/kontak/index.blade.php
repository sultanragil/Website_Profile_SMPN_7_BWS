@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Kontak </title>
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
    <a class="nav-link " href="{{ route('kontak.index') }}">
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
    <h1>Data Kontak</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Kontak</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <style>
      .map-responsive{

      overflow:hidden;

      padding-bottom:56.25%;

      position:relative;

      height:0;

      }
      .map-responsive iframe{

      left:0;

      top:0;

      height:100%;

      width:100%;

      position:absolute;

}
    </style>
    <div class="row">

     <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Kontak</h5>

            <section class="section contact">
              <div class="row gy-4">
                <div class="col-xl-12">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-telephone"></i>
                        <h3>Contact Person</h3>
                        <p>h<br>New York, NY 535022</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-envelope"></i>
                        <h3>Gmail</h3>
                        <p>v<br>New York, NY 535022</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-facebook"></i>
                        <h3>Facebook</h3>
                        <p>A108 Adam Street,<br>New York, NY 535022</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-youtube"></i>
                        <h3>YouTube</h3>
                        <p>A108 Adam Street,<br>New York, NY 535022</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-clock"></i>
                        <h3>Open Hours</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p> 
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Alamat</h3>
                        <p>c</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="map-responsive">
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5351.844971103185!2d113.81232156144848!3d-7.908424632228949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dce18df5bb83%3A0xba3bdcf8028965e4!2sSMP%20Negeri%207%20Bondowoso!5e0!3m2!1sid!2sid!4v1652969908440!5m2!1sid!2sid" width="1600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <a href=""><button type="button" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</button></a>
              </div>

              
              
        
            </section>
          </div>
        </div>
      </div>    
      

    </div>
  </section>

  @endsection
