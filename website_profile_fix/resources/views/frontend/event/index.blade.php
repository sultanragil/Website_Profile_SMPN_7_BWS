@extends('frontend.layouts.template')

@section('title')
  <title>Event Page - SMPN 7</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Profile</h1>
  <p class="lead fw-normal">Berita dan Acara SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    

<div class="tab-pane" id="tab-4">
  <h3>Berita</h3>
  <section id="events" class="doctors section-bg">
    <div class="container" data-aos="fade-up">                   
      <div class="row">
        @foreach ($event as $item)
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ URL::to('backend/assets/img/', $item->cover) }}" width="170" height="100" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>{{$item->judul}}</h4>
              <span>{!! Str::limit($item->isi,230) !!}</span>
            </div>
          </div>
        </div>


        @endforeach
      </div>

    </div>
  </section><!-- End Doctors Section -->
</div>

@endsection