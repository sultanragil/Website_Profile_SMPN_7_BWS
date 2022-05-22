@extends('frontend.layouts.template')

@section('title')
  <title>Profile Page - SMPN 7</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Profile</h1>
  <p class="lead fw-normal">Pegawai SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    

<div class="tab-pane" id="tab-4">
  <h3>Guru</h3>
  <section id="employees" class="doctors section-bg">
    <div class="container" data-aos="fade-up">                   
      <div class="row">
        @foreach($pegawai as $item)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ URL::to('backend/assets/img/', $item->image) }}" width="400" height="500" class="" alt="">
            </div>
            <div class="member-info">
              <h4>{{$item->name}}</h4>
              <span>{{$item->nip}}</span>
              <span>{{$item->category}}</span>
              <span>{{$item->job_name}}</span>
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
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ URL::to('backend/assets/img/', $item->image) }}" width="400" height="500" class="" alt="">
            </div>
            <div class="member-info">
              <h4>{{$item->name}}</h4>
              <span>{{$item->nip}}</span>
              <span>{{$item->category}}</span>
              <span>{{$item->job_name}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>

@endsection