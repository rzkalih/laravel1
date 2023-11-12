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
                            <h3 class="card-title">peran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('peran_store', $films->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control" placeholder="" value="{{ $films->judul }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="cast_id">cast</label>
                                    <select name="cast_id" id="cast_id" class="form-control">
                                        <option disabled selected>--Pilih Salah Satu--</option>
                                        @foreach ($casts as $key => $value )
                                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">nama peran</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="">
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