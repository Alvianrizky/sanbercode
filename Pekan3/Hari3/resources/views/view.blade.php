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
        <h3 class="card-title">Detail Pertanyaan</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
           <table class="table table-borderless">
             <tr>
               <th>Judul</th>
               <td>{{ $query->judul }}</td>
             </tr>
             <tr>
               <th>Isi</th>
               <td>{{ $query->isi }}</td>
             </tr>
           </table>
         </div>
         <div class="card-footer">
            <a href="/pertanyaan" class="btn btn-secondary float-right">Back</a>
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