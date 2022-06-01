@extends('frontend.layouts.template')

@section('title')
  <title>SMPN 7 - Halaman Event</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Detail Event</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman event di sekolah SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$detail->judul}}</h2>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="{{ URL::to('backend/assets/img/', $detail->cover) }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p>
            {!! html_entity_decode($detail->isi) !!}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

@endsection