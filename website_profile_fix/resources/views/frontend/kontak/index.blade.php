@extends('frontend.layouts.template')

@section('title')
  <title>SMPN 7 - Halaman Kontak</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Kontak</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman kontak sekolah SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    
<!-- ======= Contact Section ======= -->
<section id="contacts" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Kontak</h2>
    </div>

  </div>

  <div>
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15807.509268743852!2d113.8127219!3d-7.907883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba3bdcf8028965e4!2sSMP%20Negeri%207%20Bondowoso!5e0!3m2!1sid!2sid!4v1653097065709!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container">

    <div class="row mt-5">
      @foreach ($kontak as $item)
      <div class="col-lg-6">
        
            
        
        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>{{$item->alamat}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>Gmail Address<br>{{$item->gmail}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Hubungi Kami</h3>
              <p>Nomor Telepon<br>{{$item->no}}</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-time"></i>
              <h3>Jam Buka</h3>
              <p>{{$item->open}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bxl-youtube"></i>
              <h3>Youtube Channel</h3>
              <p>Visit Us<br><a href="{{$item->yt}}">Link</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bxl-facebook"></i>
              <h3>Facebook Account</h3>
              <p>Visit Us<br><a href="{{$item->fb}}">Link</a></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section><!-- End Contact Section -->

@endsection