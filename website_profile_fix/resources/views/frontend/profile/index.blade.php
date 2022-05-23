@extends('frontend.layouts.template')

@section('title')
  <title>Profile Page - SMPN 7</title>
@endsection

@section('header')
  <h1 class="display-4 fw-normal">Profile</h1>
  <p class="lead fw-normal">Halaman ini adalah halaman profil sekolah SMPN 7 Bondowoso</p>    
@endsection

@section('content')
    
            <!-- ======= Profile Section ======= -->
            <section id="profiles" class="departments">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Profile</h2>
                  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                        <div class="row">
                          <div class="col-lg-6" data-aos="fade-right">
                            <img src="{{ URL::to('backend/assets/img/', $item->sekolah_img) }}" width="1000" height="600" class="img-fluid" alt="">
                          </div>
                          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <p>
                              {!! html_entity_decode($item->sejarah) !!}
                            </p>
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
                        <section id="doctors" class="doctors section-bg">
                          <div class="container" data-aos="fade-up">                   
                            <div class="row">

                              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                  <div class="member-img">
                                    <img src="{{ URL::to('backend/assets/img/', $item->kepsek_img) }}" width="270" height="500" class="img-fluid" alt="">
                                  </div>
                                  <div class="member-info">
                                    <h4>{{$item->kepsek_nama}}</h4>
                                    <span>Kepala Sekolah</span>
                                  </div>
                                </div>
                              </div>
                    
                              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="200">
                                  <div class="member-img">
                                    <img src="{{ URL::to('backend/assets/img/', $item->wakepsek1_img) }}" width="270" height="500" class="img-fluid" alt="">
                                  </div>
                                  <div class="member-info">
                                    <h4>{{$item->wakepsek1_nama}}</h4>
                                    <span>Wakil Kepala Sekolah Kesiswaaan</span>
                                  </div>
                                </div>
                              </div>
                    
                              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="300">
                                  <div class="member-img">
                                    <img src="{{ URL::to('backend/assets/img/', $item->wakepsek2_img) }}" width="270" height="500" class="img-fluid" alt="">
                                  </div>
                                  <div class="member-info">
                                    <h4>{{$item->wakepsek2_nama}}</h4>
                                    <span>Wakil Kepala Sekolah Kurikulum</span>
                                  </div>
                                </div>
                              </div>
                    
                            </div>
                    
                          </div>
                        </section><!-- End Doctors Section -->
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
        
              </div>
            </section><!-- End Departments Section -->

@endsection