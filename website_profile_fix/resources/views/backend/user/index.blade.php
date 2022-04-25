@extends('backend.layouts.template')

@section('dashboard')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">Perintah</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $item)
                <tr>
                  <td>
                      {{$item->id}}
                  </td>
                  <td>
                      {{$item->name}}
                  </td>
                  <td>
                      {{$item->email}}
                  </td>
                  <td>
                      {{$item->role}}
                  </td>
                  <td>
                      {{$item->created_at}}
                  </td>
                  <td>
                    <a href="{{ route('user.edit',$item->id) }}"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary ri-edit-2-fill">
                    </button></a>
                    <form action="{{ route('user.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger ri-delete-back-2-line" onclick="return confirm('Yakin akan menghapus data?')">
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('user.create') }}"><button type="button" class="btn btn-info">tambah</button></a>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>
@endsection
