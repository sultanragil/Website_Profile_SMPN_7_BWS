@extends('frontend.layouts.template')

@section('title')
  <title>SMPN 7 - Sarana & Prasarana</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Sarana & Prasarana</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman sarana & prasarana sekolah SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    
<!-- ======= Doctors Section ======= -->
<section id="facilities" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sarana & Prasarana</h2>
      </div>

      <div class="row">
        
        @foreach ($sarana as $item)
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ URL::to('backend/assets/img/', $item->image) }}" width="600" height="400" class="" alt="">
              </div>
              <div class="member-info">
                <h5><a href="{{ route('fsarpras', $item->id) }}">{{$item->nama}}</a></h5>
              </div>
            </div>
          </div> 
        @endforeach
        

      </div>

    </div>
  </section><!-- End Doctors Section -->

@endsection