@extends('frontend.layouts.main-template')

@section('content-main')

  <main id="main">

    <!-- ======= Profile Section ======= -->
    <section id="profiles" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profil Sekolah</h2>
        </div>
        @foreach ($profile as $item)
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
        @endforeach
        <br>
        <div class="container" data-aos="zoom-in-up" style="text-align: center; ">
            <button type="submit" class="btn btn-light"><a href="{{route ('profilepage')}}">Lebih Selengkapnya >></a></button>
        </div>
      </div>
    </section><!-- End Profile Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-tie"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count1}}" data-purecounter-duration="2" class="purecounter"></span>
              <p><strong>Guru & Karyawan</strong> yang bekerja di sekolah ini.</p>
              <a href="{{route ('pegawaipage')}}">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-book-reader"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count2}}" data-purecounter-duration="2" class="purecounter"></span>
              <p><strong>Murid</strong> yang menempuh pendidikan di sekolah ini.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-building"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count3}}" data-purecounter-duration="2" class="purecounter"></span>
              <p><strong>Sarana & Prasarana</strong> yang dilengkapi oleh sekolah ini.</p>
              <a href="{{route ('saranapage')}}">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-newspaper"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count4}}" data-purecounter-duration="2" class="purecounter"></span>
              <p><strong>Event</strong> yang diadakan dan terjadi di sekolah ini.</p>
              <a href="{{route ('eventpage')}}">Find out more &raquo;</a>
            </div>
          </div>

        </div>
        <br>
        <div class="container" data-aos="zoom-in-up" style="text-align: center; ">
  
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
    </section><!-- End Counts Section -->

    <!-- ======= Guru dan Karyawan Section ======= -->
    <section id="employees" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Guru dan Karyawan</h2>
        </div>

        <div class="row">

            @foreach($pegawai as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{ URL::to('backend/assets/img/', $item->image) }}" width="300" height="400" class="" alt="">
                </div>
                <div class="member-info">
                  <h5>{{$item->name}}</h5>
                  <span>{{$item->nip}}</span>
                  <span>{{$item->category}} {{$item->job_name}}</span>
                </div>
              </div>
            </div>
            @endforeach
            <div class="container" data-aos="zoom-in-up" style="text-align: center; ">
              <button type="submit" class="btn btn-light"><a href="{{route ('pegawaipage')}}">Lebih Selengkapnya >></a></button>
            </div>

        </div>

      </div>
    </section><!-- End Guru dan Karyawan Section -->

    <!-- ======= Sarana dan Prasarana Section ======= -->
    <section id="facilities" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sarana dan Prasarana</h2>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($sarana as $item)
              <div class="swiper-slide"><a class="gallery-lightbox" href="{{ URL::to('backend/assets/img/', $item->image) }}"><img src="{{ URL::to('backend/assets/img/', $item->image) }}" class="img-fluid" alt=""></a></div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <br>
        <div class="container" data-aos="zoom-in-up" style="text-align: center; ">
          <button type="submit" class="btn btn-light"><a href="{{route ('saranapage')}}">Lebih Selengkapnya >></a></button>
        </div>

      </div>
    </section><!-- End Sarana dan Prasarana Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($event as $item)
              <div class="swiper-slide" data-aos="fade-up" data-aos-delay="100">
                <div class="container" data-aos="zoom-in-up" >
                  <div class="card mb-3">
                    <a href="{{ route('fevent', $item->id) }}"><img class="card-img-top" width="400" height="200" src="{{ URL::to('backend/assets/img/', $item->cover) }}" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center"><a href="{{ route('fevent', $item->id) }}">{{$item->judul}}</a></h5>
                      <p class="card-text" style="text-align: justify">{!! Str::limit($item->isi,100) !!} <a href="{{ route('fevent', $item->id) }}" class="card-link">Lebih Selengkapnya</a></p>
                      <p class="card-text"><small class="text-muted">{{$item->created_at}}</small></p>
                      <p class="card-text"><small class="text-muted">{{$item->users}}</small></p>
                    </div>
                  </div>
                </div>         
              </div><!-- End Events item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="container" data-aos="zoom-in-up" style="text-align: center; ">
          <button type="submit" class="btn btn-light"><a href="{{route ('eventpage')}}">Lebih Selengkapnya >></a></button>
        </div>
      </div>
    </section><!-- End Events Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contacts" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15807.509268743852!2d113.8127219!3d-7.907883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba3bdcf8028965e4!2sSMP%20Negeri%207%20Bondowoso!5e0!3m2!1sid!2sid!4v1653097065709!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">
          @foreach ($kontak as $item)
          <div class="col-lg-6">
            
                
            
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>{{$item->alamat}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>Gmail Address<br>{{$item->gmail}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-time"></i>
                  <h3>Jadwal Buka</h3>
                  <p>Kunjungi kami<br>{{$item->open}}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Hubungi Kami</h3>
                  <p>{{$item->no}}</p>
                  <!--<p><b>Contact Person 1: </b>{{$item->no}}</p>
                  <p><b>Contact Person 2: </b>{{$item->no}}</p>
                  <p><b>Contact Person 3: </b>{{$item->no}}</p>
                  <p>Nomor Telepon<br>{{$item->no}}</p>-->
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bxl-youtube"></i>
                  <h3>Youtube Channel</h3>
                  <p>Visit Us<br><a href="{{$item->yt}}">Link</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bxl-facebook"></i>
                  <h3>Facebook Account</h3>
                  <p>Visit Us<br><a href="{{$item->fb}}">Link</a></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    
@endsection