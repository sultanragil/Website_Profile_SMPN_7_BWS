@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Profile </title>
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
    <a class="nav-link collapsed" href="{{ route('kontak.index') }}">
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
    <a class="nav-link " href="{{ route('cms.index') }}">
@endsection

@section('content')

<div class="pagetitle">
    <h1>Data CMS Profil Sekolah</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">CMS Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

        @foreach ($profile as $item)

        <div class="col-lg-9">
            <!-- Sejarah Card -->
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sejarah</h5>
                  {!! html_entity_decode($item->sejarah) !!}
                </div>
            </div><!-- End Sejarah Card -->
    
            <!-- Visi Misi Card -->
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Visi & Misi</h5>
                  {!! html_entity_decode($item->vm) !!}
                </div>
            </div><!-- End Visi mIsi Card -->

            <a href="{{ route('cms.edit',$item->id) }}"><button type="button" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</button></a>

        </div>
    
          <div class="col-lg-3">
            <!-- Logo Card -->
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Logo</h5>
                </div>
                <img src="{{ URL::to('backend/assets/img/', $item->logo) }}" class="card-img-bottom" alt="...">
            </div><!-- End Logo Card -->
    
            <!-- Headmaster Card -->
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Kepala Sekolah</h5>
                </div>
                <img src="{{ URL::to('backend/assets/img/', $item->kepsek_img) }}" class="card-img-bottom" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">{{$item->kepsek_nama}}</p>
                </div>
            </div><!-- End Headmaster Card -->
          </div>
        @endforeach
      

    </div>
  </section>

@endsection