@extends('layouts.template')

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
     <h3 class="card-title">Edit Data</h3>

     <div class="card-tools">
       <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
         <i class="fas fa-minus"></i></button>
         <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
           <i class="fas fa-times"></i></button>
        </div>
      </div>
      <form role="form" action="/pertanyaan/{{ $query->id }}" method="post">
         @csrf
         @method('PUT')
         <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
               <label for="judul">Judul</label>
               <input type="text" name="judul" class="form-control" id="judul" placeholder="judul" value="{{ old('judul', $query->judul) }}">
            </div>
            <div class="form-group">
               <label for="isi">Isi</label>
               <input type="text" name="isi" class="form-control" id="isi" placeholder="Isi" value="{{ old('isi', $query->isi) }}">
            </div>
         </div>
         <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/pertanyaan" class="btn btn-secondary float-right">Back</a>
         </div>
      </form>
   </div>

</section>
</div>

@endsection