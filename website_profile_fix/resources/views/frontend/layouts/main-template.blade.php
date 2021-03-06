<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMPN 7 Bondowoso - Beranda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/logo-favincon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/logo-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      @foreach ($contactview as $item)
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> {{$item->open}}
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Hubungi kami {{$item->no}}
      </div>
      @endforeach
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ route('homepage') }}" class=""><img src="{{ asset('frontend/assets/img/logo smpn7.png') }}" height="70" width="250" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto" href="#hero"><span>Beranda</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('homepage') }}">Halaman Beranda</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#profiles"><span>Profil Sekolah</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('profilepage') }}">Halaman Profil Sekolah</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#employees"><span>Guru & Karyawan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('pegawaipage') }}">Halaman Guru & Karyawan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#facilities"><span>Sarana & Prasarana</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('saranapage') }}">Halaman Sarana & Prasarana</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#events"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('eventpage') }}">Halaman Event</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#contacts"><span>Kontak</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('kontakpage') }}">Halaman Kontak</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
      <a href="{{route('dashboard')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Menuju</span> Admin Dashboard</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        @foreach ($carouselview as $item)
            <!-- Slide  -->
            <div class="carousel-item {{$item->id == 1 ? 'active' : '' }}" style="background-image: url({{ URL::to('backend/assets/img/', $item->image) }})">
              <div class="container">
                <h2>{{$item->judul}}</h2>
                <p>{!! html_entity_decode($item->desc) !!}</p>
              </div>
            </div>
        @endforeach
        

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

    @yield('content-main')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          @foreach ($contactview as $item)
              <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                  <h3>SMPN 7 Bondowoso</h3>
                  <p>
                    {{$item->alamat}}<br><br>
                    <strong>Telepon :</strong> {{$item->no}}<br>
                    <strong>Email:</strong> {{$item->gmail}}<br>
                  </p>
                  <div class="social-links mt-3">
                    <a href="{{$item->fb}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{$item->yt}}" class="youtube"><i class="bx bxl-youtube"></i></a>
                  </div>
                </div>
              </div>
          @endforeach
          
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('homepage') }}">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('profilepage') }}">Profil Sekolah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('pegawaipage') }}">Guru & Karyawan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('saranapage') }}">Sarana & Prasarana</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('eventpage') }}">Event</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Developer</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://github.com/sultanragil">Maulana Sultan Ragil W.S.</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sulton Mubarok</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Abdul Aziz Rahmawan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ivon Csianee Octaviana</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>