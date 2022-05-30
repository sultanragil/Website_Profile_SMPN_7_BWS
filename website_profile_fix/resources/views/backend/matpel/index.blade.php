@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Mata Pelajaran </title>
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
    <a class="nav-link" href="{{ route('jabatan.index') }}">
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
    <h1>Data Jabatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Jabatan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Jabatan</h5>

          <!-- Table Data User -->
          <table class="table table-hover">
            <thead>
              <tr class="table-light">
                <th scope="col">#</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach ($courses as $item)
              <tr class="table-light">
                <th scope="row">{{$no++}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                  <div class="row">
                    <div class="col-3">
                      <a href="{{ route('jabatan.edit',$item->id) }}"><button type="button" title="Edit" class="btn btn-secondary"><i class="bi bi-pencil-fill"></i></button></a>
                    </div>
                    <div class="col-3">
                      <form action="{{ route('jabatan.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="bi bi-trash-fill"></i></button>
                      </form>
                    </div>
                  </div>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- Centered Pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <div class="col-1">
                {!! $courses->links()!!}
              </div>
            </ul>
          </nav><!-- End Centered Pagination -->

          <a href="{{ route('jabatan.create') }}"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
