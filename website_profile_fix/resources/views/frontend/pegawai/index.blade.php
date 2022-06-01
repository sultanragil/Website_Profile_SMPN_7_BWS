@extends('frontend.layouts.template')

@section('title')
  <title>Pegawai Page - SMPN 7</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Pegawai</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman guru & karyawan sekolah SMPN 7 Bondowoso</h6>    
@endsection

@section('content')
    
<style>
  .card {
  flex-direction: row;
  align-items: center;
  margin-bottom: 10px;
  }
  .card-title {
    font-weight: bold;
  }
  .card img {
    width: 20%;
    border-top-right-radius: 0;
    border-bottom-left-radius: calc(0.25rem - 1px);
  }
  @media only screen and (max-width: 768px) {
  a {
    display: none;
  }
  .card-body {
    padding: 0.5em 1.2em;
  }
  .card-body .card-text {
    margin: 0;
  }
  .card img {
    width: 40%;
  }
  }
  @media only screen and (max-width: 1200px) {
    .card img {
      width: 30%;
    }
  }

</style>

<div class="tab-pane" id="tab-4">
  <h3>Guru</h3>
  <section id="employees" class="doctors section-bg">
    <div class="container" data-aos="fade-up">                   
      <div class="row">
        @foreach($pegawai as $item)
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
          <div class="card" style="width: 600px" data-aos="zoom-in-left" data-aos-delay="100">
            <img src="{{ URL::to('backend/assets/img/', $item->image) }}"  class="card-img-top" alt="{{$item->name}}">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><p class="card-text">Nama     : {{$item->name}}</p></li>
                <li class="list-group-item"><p class="card-text">NIP      : {{$item->nip}}</p></li>
                <li class="list-group-item"><p class="card-text">Jabatan  : {{$item->category}} {{$item->job_name}}</p></li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Doctors Section -->
</div>

<div class="tab-pane" id="tab-4">
  <h3>Staff</h3>
  <section id="employees" class="doctors section-bg">
    <div class="container" data-aos="fade-up">                   
      <div class="row">
        @foreach($karyawan as $item)
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
          <div class="card" style="width: 600px" data-aos="zoom-in-left" data-aos-delay="100">
            <img src="{{ URL::to('backend/assets/img/', $item->image) }}"  class="card-img-top" alt="{{$item->name}}">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><p class="card-text">Nama     : {{$item->name}}</p></li>
                <li class="list-group-item"><p class="card-text">NIP      : {{$item->nip}}</p></li>
                <li class="list-group-item"><p class="card-text">Jabatan  : {{$item->category}} {{$item->job_name}}</p></li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>

@endsection