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
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">{{session('success')}}</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
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
    @foreach ($kontak as $item)
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
                       <div class="info-box card" >
                         <i class="bi bi-telephone"></i>
                         <h3>Contact Person</h3>
                         <p>{{$item->no}}</p>
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="info-box card">
                         <i class="bi bi-envelope"></i>
                         <h3>Gmail</h3>
                         <p>{{$item->gmail}}</p>
                       </div>
                     </div>
                     <div class="col-lg-4">
                      <div class="info-box card">
                        <i class="bi bi-clock"></i>
                        <h3>Open Hours</h3>
                        <p>{{$item->open}}</p>
                      </div>
                    </div>
                     <div class="col-lg-4">
                       <div class="info-box card">
                         <i class="bi bi-facebook"></i>
                         <h3>Facebook</h3>
                         <div class="col-sm-4">
                          <a href="{{$item->fb}}" >Visit Link</a>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="info-box card">
                         <i class="bi bi-youtube"></i>
                         <h3>YouTube</h3>
                         <div class="col-sm-4">
                          <a href="{{$item->yt}}">Visit Link</a>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-4">
                       <div class="info-box card">
                         <i class="bi bi-geo-alt"></i>
                         <h3>Alamat</h3>
                         <p>{{$item->alamat}}</p>
                       </div>
                     </div>
                   </div>
                 </div>

                 <a href="{{ route('kontak.edit',$item->id) }}"><button type="button" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</button></a>
               </div>




             </section>
           </div>
         </div>
       </div>


     </div>
    @endforeach

  </section>

  @endsection
