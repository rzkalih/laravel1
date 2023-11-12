@extends('layout.master')

@section('title', 'genre')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">film</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">genre</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Film</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter judul Film">
                </div>
                <div class="form-group">
                  <label for="genre">Genre</label>
                  <select name="genres_id" id="genres" class="form-control">
                    <option disabled selected>--Pilih Salah Satu--</option>
                    @forelse ($genres as $key => $value )
                    <option value="{{ $value->id }}">{{ $value->nama }}</option>
                    @empty
                    <option disabled>--Data Masih Kosong--</option>
                    @endforelse
                    {{-- ($casts as $key => $value) --}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="tahun">Tahun</label>
                  <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Enter tahun Film">
                </div>
                <div class="form-group">
                  <label for="ringkasan">Ringkasan</label>
                  <textarea name="ringkasan" id="ringkasan" cols="30" rows="10" class="form-control" placeholder="Enter Ringkasan Film"></textarea>
                </div>
                <div class="form-group">
                  <label for="poster">Poster</label>
                  <input type="file" name="poster" id="poster" class="form-control" placeholder="Enter poster Film">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                       
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
@endsection