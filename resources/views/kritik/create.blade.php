@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kritik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Silahkan Sampaikan Kritik Anda</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('kritik_store', $films[0]->id ) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <input type="text" name="user" id="user" class="form-control" value="{{ auth()->user()->name}}" disabled>
                                </div>
                                <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                                <input type="hidden" value="{{$films[0]->id}}" name="film_id">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">film</label>
                                    <input type="text" class="form-control" id="umur" name="judul" placeholder="umur" disabled value="{{$films[0]->judul}}">

                                </div>
                                <div class="form-group">
                                    <label for="content">Komentar</label>
                                    <textarea type="text area" name="content" id="content" class="form-control @error('content') is-invalid @enderror" placeholder="Beri komentar" required></textarea>
                                    @error('content')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="point">Rating</label>
                                    <input type="number" name="point" id="point" class="form-control @error('point') is-invalid @enderror" placeholder="Beri rating" required>
                                    @error('point')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('film.index')}}" class="btn btn-info">Back</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection