@extends('layouts.template')

@push('linkcss')

<link rel="stylesheet" href="{{ asset('plugins/datatables/jquery.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endpush

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pertanyaan Management</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Pertanyaan</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            @if(session('success'))

              <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            @endif
            <div class="form-group">
              <a href="/pertanyaan/create" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($pertanyaan as $key => $value)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $value->judul }}</td>
                  <td>{{ $value->isi }}</td>
                  <td style="display: flex;">
                    <a href="/pertanyaan/{{ $value->id }}" class="btn btn-info btn-sm mx-1">view</a>
                    <a href="/pertanyaan/{{ $value->id }}/edit" class="btn btn-default btn-sm mx-1">edit</a>
                    <form action="/pertanyaan/{{ $value->id }}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="delete" class="btn btn-danger btn-sm mx-1">
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="4" class="text-center">No Data</td>
                </tr>
                @endforelse
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
          
          <!-- /.card-footer-->
        </div>

      </section>
    </div>

    @endsection

    @push('script')

    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
      $(function () {
        $("#example1").DataTable();
      });
    </script>

    @endpush