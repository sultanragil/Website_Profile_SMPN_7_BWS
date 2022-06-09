@extends('frontend.layouts.template')

@section('title')
  <title>SMPN 7 Bondowoso - Profil Sekolah</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Profil Sekolah</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman profil sekolah SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    
            <!-- ======= Profile Section ======= -->
            <section id="profiles" class="departments">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Profil Sekolah</h2>
                </div>
        
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                      <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                          <h4>Sejarah</h4>
                          <p>Navigasi Panel Sejarah.</p>
                        </a>
                      </li>
                      <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                          <h4>Visi Misi</h4>
                          <p>Navigasi Panel Visi Misi.</p>
                        </a>
                      </li>
                      <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                          <h4>Logo Sekolah</h4>
                          <p>Navigasi Panel Logo Sekolah.</p>
                        </a>
                      </li>
                      <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                          <h4>Pimpinan Sekolah</h4>
                          <p>Navigasi Panel Pimpinan Sekolah.</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-8">
                    <div class="tab-content">
                      @foreach ($profile as $item)
                      <div class="tab-pane active show" id="tab-1">
                        <h3>Sejarah</h3>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-12">
                              <img src="{{ URL::to('backend/assets/img/', $item->sekolah_img) }}" width="600" height="400" class="" alt="">
                            </div>
                            <div class="col-sm-12">
                              {!! html_entity_decode($item->sejarah) !!}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-2">
                        <h3>Visi Misi</h3>
                        <h2>Visi</h2>
                        {!! html_entity_decode($item->visi) !!}
                        <br>
                        <h2>Misi</h2>
                        {!! html_entity_decode($item->misi) !!}
                      </div>
                      <div class="tab-pane" id="tab-3">
                        <h3>Logo Sekolah</h3>
                        <div class="row">
                          <div class="col-lg-6" data-aos="fade-right">
                            <img src="{{ URL::to('backend/assets/img/', $item->logo) }}" width="1000" height="600" class="img-fluid" alt="">
                          </div>
                          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <p>
                              {!! html_entity_decode($item->arti_logo) !!}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-4">
                        <h3>Pimpinan Sekolah</h3>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="card bg-light mb-3" style="text-align: center;">
                                <img class="card-img-top" height="350" width="250" src="{{ URL::to('backend/assets/img/', $item->kepsek_img) }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Kepala Sekolah</h5>
                                  <p class="card-text">{{$item->kepsek_nama}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="card bg-light mb-3" style="text-align: center;">
                                <img class="card-img-top" height="350" width="250" src="{{ URL::to('backend/assets/img/', $item->wakepsek1_img) }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Wakil Kepala Sekolah Kesiswaan</h5>
                                  <p class="card-text">{{$item->wakepsek1_nama}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="card bg-light mb-3" style="text-align: center;">
                                <img class="card-img-top" height="350" width="250" src="{{ URL::to('backend/assets/img/', $item->wakepsek2_img) }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Wakil Kepala Sekolah Kurikulum</h5>
                                  <p class="card-text">{{$item->wakepsek2_nama}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
        
              </div>
            </section><!-- End Departments Section -->

@endsection