@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Data Siswa </title>
@endsection

@section('actdash')
    <a class="nav-link collapsed" href="{{ route('index') }}">
@endsection

@section('actcar')
    <a class="nav-link collapsed" href="{{ route('carousel.index') }}">
@endsection

@section('actdata')
    <a class="nav-link " href="{{ route('data.index') }}">
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

@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">{{session('success')}}</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="pagetitle">
    <h1>Data Siswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Data Siswa</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Siswa</h5>

            <!-- Table Data Siswa -->
            <table class="table table-hover">
                <thead>
                  <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Dibuat Saat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($siswa as $item)
                  <tr class="table-light">
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jk}}</td>
                    <td>{{$item->kelas}}</td>
                    <td>{{$item->created_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

              <!-- Centered Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <div class="col-1">
                    {!! $siswa->links()!!}
                  </div>
                </ul>
            </nav><!-- End Centered Pagination -->

            <!--<a href="{{ route('jabatan.create') }}"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button></a>-->


            <form method="POST" action="{{route('data.delete')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <button type="button" class="btn btn-primary mr-5" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Import Excel
                </button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <!-- Import Excel -->
            <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="POST" action="{{ route('data.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            </div>
                            <div class="modal-body">



                                <label>Pilih file excel</label>
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
