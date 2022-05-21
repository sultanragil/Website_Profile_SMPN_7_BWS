@extends('frontend.layouts.template')

@section('title')
  <title>Facilities Page - SMPN 7</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Sarana & Prasarana</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman sarana & prasarana sekolah SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    
<!-- ======= Doctors Section ======= -->
<section id="gallery" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sarana & Prasarana</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        
        @foreach ($sarana as $item)
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ URL::to('backend/assets/img/', $item->image) }}" width="800" height="400" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><a href="{{ route('fsarpras', $item->id) }}">{{$item->nama}}</a></h4>
              </div>
            </div>
          </div> 
        @endforeach
        

      </div>

    </div>
  </section><!-- End Doctors Section -->

@endsection