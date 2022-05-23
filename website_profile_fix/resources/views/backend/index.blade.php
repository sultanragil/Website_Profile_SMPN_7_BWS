@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Landing Page </title>
@endsection

@section('actdash')
    <a class="nav-link " href="{{ route('index') }}">
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
    <a class="nav-link collapsed" href="{{ route('cms.index') }}">
@endsection


@section('dashboard')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Carousel</h5>

          <!-- Slides with captions -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @foreach ($carousel as $item)
                <div class="carousel-item {{$item->id == 1 ? 'active' : '' }}">
                  <img src="{{ URL::to('backend/assets/img/', $item->image) }}" width="1000" height="600" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{$item->judul}}</h5>
                    <p>{!! html_entity_decode($item->desc) !!}</p>
                  </div>
                </div>
              @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div><!-- End Slides with captions -->

        </div>
      </div>

      <!-- Left side columns 1-->
      <div class="col-lg-8">
        <div class="row">
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Siswa</h5>

              <!-- Pie Chart Siswa-->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Kelas 7',
                        'Kelas 8',
                        'Kelas 9'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [
                          {{$query1}}, 
                          {{$query2}}, 
                          {{$query3}}
                        ],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            </div>
          </div>

          <!-- Pegawai Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Pegawai <span>| Total Data</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $pegawai }}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Pegawai Card -->

          <!-- Sarpras Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Sarpras <span>| Total Data</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-community-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$sarana}}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sarpras Card -->

          <!-- Event Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Event <span>| Total Data</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journal-bookmark-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $event }}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Event Card -->

          <!-- Siswa Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

              <div class="card-body">
                <h5 class="card-title">Siswa <span>| Total Data</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-database-2-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $siswa }}</h6>
                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Siswa Card -->

          <!-- User Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

              <div class="card-body">
                <h5 class="card-title">Users <span>| Total Data</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-check-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $user }}</h6>
                  </div>
                </div>

              </div>
            </div>

          </div><!-- End User Card -->

          
        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

      <!-- News & Updates Traffic -->
      <div class="card">

        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Newest</span></h5>

          <div class="news">
            @foreach ($news as $item)
                <div class="post-item clearfix">
                  <img src="{{ URL::to('backend/assets/img/', $item->cover) }}" alt="">
                  <h4><a href="#">{{$item->judul}}</a></h4>
                  <p>{!! Str::limit($item->isi,150) !!}</p>
                </div>
                <br> 
            @endforeach
          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End News & Updates -->

    </div><!-- End Right side columns -->

    </div>
  </section>

@endsection
