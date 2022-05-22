@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Sarana </title>
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
    <a class="nav-link " href="{{ route('sarana.index') }}">
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
    <h1>Data Sarana & Prasarana</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active">Sarana & Prasarana</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Sarana & Prasarana</h5>

            <!-- Table Data Sarana & Prasarana -->
            <table class="table table-hover">
              <thead>
                <tr class="table-light">
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Image</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sarana as $item)
                <tr class="table-light">
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->nama}}</td>
                  <td class="col-3"><img src="{{ URL::to('backend/assets/img/', $item->image) }}" class="img-thumbnail"></td>
                  <td>{!! Str::limit($item->desc,230) !!}</td>
                  <td>{{$item->created_at}}</td>
                  <td>
                    <div class="col-3">
                        <a href="{{ route('sarana.edit',$item->id) }}"><button type="button" title="Edit" class="btn btn-secondary"><i class="bi bi-pencil-fill"></i></button></a>
                      </div>
                      <div class="col-3">
                        <form action="{{ route('sarana.destroy',$item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Delete" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="bi bi-trash-fill"></i></button>
                        </form>
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
                  {!! $sarana->links()!!}
                </div>
              </ul>
            </nav><!-- End Centered Pagination -->

            <a href="{{ route('sarana.create') }}"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button></a>

          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
