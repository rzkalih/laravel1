@extends('layout.master')
@section('title','cast')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cast</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">cast</li>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Cast</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('cast.update', $cast[0]->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class=" form-control" id="nama" name="nama" placeholder="Masukan Nama" value="{{ $cast[0]->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">umur</label>
                                    <input type="text" class="form-control" id="umur" name="umur" placeholder="umur" value="{{ $cast[0]->umur }}">
                                </div>

                                <div class="form-group">
                                    <label for="bio">Biografi</label>
                                    <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Enter Biografi">{{ $cast[0]->bio }}</textarea>
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
    <!-- /.content -->

</div>

@endsection