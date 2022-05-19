@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Profile </title>
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
    <h1>Data CMS Profil Sekolah</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('cms.index') }}">CMS Profile</a></li>
        <li class="breadcrumb-item active">Edit CMS Profil Sekolah</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Edit Data Sejarah</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{ route('cms.update',$profile->id) }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label for="inputEmail4" class="form-label">Visi</label>
                  <textarea name="visi" class="form-control tinymce-editor">{{ isset($profile) ? $profile->visi : '' }}</textarea>
                  <label for="inputEmail4" class="form-label">Misi</label>
                  <textarea name="misi" class="form-control tinymce-editor">{{ isset($profile) ? $profile->misi : '' }}</textarea>
                  <label for="inputEmail4" class="form-label">Sejarah</label>
                  <textarea name="sejarah" class="form-control tinymce-editor">{{ isset($profile) ? $profile->sejarah : '' }}</textarea>
                  <label for="inputEmail4" class="form-label">Arti Logo</label>
                  <textarea name="arti_logo" class="form-control tinymce-editor">{{ isset($profile) ? $profile->arti_logo : '' }}</textarea>
                </div>
                <div class="col-lg-6">
                  <label for="inputEmail4" class="form-label">Nama Kepala Sekolah</label>
                  <input type="text" class="form-control" id="inputNanme4" name="kepsek_nama" value="{{ isset($profile) ? $profile->kepsek_nama : '' }}">
                  <label for="inputEmail4" class="form-label">Foto Kepala Sekolah</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="inputFile" name="kepsek_img">
                  </div>
                  <label for="inputEmail4" class="form-label">Nama Wakil Kepala Sekolah Kesiswaan</label>
                  <input type="text" class="form-control" id="inputNanme4" name="wakepsek1_nama" value="{{ isset($profile) ? $profile->wakepsek1_nama : '' }}">
                  <label for="inputEmail4" class="form-label">Foto Wakil Kepala Sekolah kesiswaan</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="inputFile" name="wakepsek1_img">
                  </div>
                  <label for="inputEmail4" class="form-label">Nama Wakil Kepala Sekolah Kurikulum</label>
                  <input type="text" class="form-control" id="inputNanme4" name="wakepsek2_nama" value="{{ isset($profile) ? $profile->wakepsek2_nama : '' }}">
                  <label for="inputEmail4" class="form-label">Foto Wakil Kepala Sekolah</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="inputFile" name="wakepsek2_img">
                  </div>
                  <label for="inputEmail4" class="form-label">Image Logo Sekolah</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="inputFile1" name="logo">
                  </div>
                  <label for="inputEmail4" class="form-label">Image Sekolah</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="inputFile1" name="sekolah_img">
                  </div>
                </div>
              </div>
            </div>
            <div class="left-text">
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </section>

@endsection