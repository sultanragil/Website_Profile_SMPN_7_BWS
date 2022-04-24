@extends('backend.layouts.template')

@section('actdash')
    <a class="nav-link collapsed" href="{{ route('index') }}">  
@endsection

@section('actberita')
    <a class="nav-link collapsed" href="{{ route('berita.index') }}">  
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
    <a class="nav-link collapsed" href="{{ route('matpel.index') }}">  
@endsection

@section('actpegawai')
    <a class="nav-link collapsed" href="{{ route('pegawai.index') }}">  
@endsection

@section('actsarana')
    <a class="nav-link collapsed" href="{{ route('sarana.index') }}">  
@endsection

@section('actuser')
    <a class="nav-link " href="{{ route('user.index') }}">  
@endsection

@section('content')
    
<div class="pagetitle">
    <h1>Data User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data User</h5>

            <!-- Table Data User -->
            <table class="table table-hover">
              <thead>
                <tr class="table-light">
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Role</th>
                  <th scope="col">Email</th>
                  <th scope="col">Email Verified</th>
                  <th scope="col">Password</th>
                  <th scope="col">Remember Token</th>
                  <th scope="col">Timestamp</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-light">
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Brandon Jacob</td>
                  <td>Brandon Jacob</td>
                  <td>Brandon Jacob</td>
                  <td>Brandon Jacob</td>
                  <td>Brandon Jacob</td>
                  <td>Brandon Jacob</td>
                  <td>2016-05-25</td>
                </tr>
                <tr class="table-light">
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Bridie Kessler</td>
                  <td>Bridie Kessler</td>
                  <td>Bridie Kessler</td>
                  <td>Bridie Kessler</td>
                  <td>Bridie Kessler</td>
                  <td>Bridie Kessler</td>
                  <td>2014-12-05</td>
                </tr>
                <tr class="table-light">
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Ashleigh Langosh</td>
                  <td>Ashleigh Langosh</td>
                  <td>Ashleigh Langosh</td>
                  <td>Ashleigh Langosh</td>
                  <td>Ashleigh Langosh</td>
                  <td>Ashleigh Langosh</td>
                  <td>2011-08-12</td>
                </tr>
                <tr class="table-light">
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>Angus Grady</td>
                  <td>Angus Grady</td>
                  <td>Angus Grady</td>
                  <td>Angus Grady</td>
                  <td>Angus Grady</td>
                  <td>Angus Grady</td>
                  <td>2012-06-11</td>
                </tr>
                <tr class="table-light">
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Raheem Lehner</td>
                  <td>Raheem Lehner</td>
                  <td>Raheem Lehner</td>
                  <td>Raheem Lehner</td>
                  <td>Raheem Lehner</td>
                  <td>Raheem Lehner</td>
                  <td>2011-04-19</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table User -->

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection