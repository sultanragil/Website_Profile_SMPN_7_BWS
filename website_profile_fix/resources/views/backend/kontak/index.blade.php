@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Kontak </title>
@endsection

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
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Kontak</h5>

            <!-- Table Data Kontak -->
            <table class="table table-hover">
              <thead>
                <tr class="table-light">
                  <th scope="col">No</th>
                  <th scope="col">Jenis Kontak</th>
                  <th scope="col">Nama Kontak</th>
                  <th scope="col">Link</th>
                  <th scope="col">Logo</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Updated At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kontak as $item)
                <tr class="table-light">
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->jenis_kontak}}</td>
                  <td>{{$item->nama_kontak}}</td>
                  <td>{{$item->link}}</td>
                  <td>{{$item->logo}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->updated_at}}</td>
                  <td>
                    <div class="row">
                      <div class="col-3">
                        <a href="{{ route('kontak.edit',$item->id) }}"><button type="button" title="Edit" class="btn btn-secondary"><i class="bi bi-pencil-fill"></i></button></a>
                      </div>
                      <div class="col-3">
                        <form action="{{ route('kontak.destroy',$item->id) }}" method="POST">
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
                  {!! $kontak->links()!!}
                </div>
              </ul>
            </nav><!-- End Centered Pagination -->

            <a href="{{ route('kontak.create') }}"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button></a>

          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
