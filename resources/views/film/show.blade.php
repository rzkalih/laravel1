@extends('layout.master')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ $film->poster }}" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $film->judul }}</h3>


              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Genre</b> <a class="float-right">{{ $film->genre[0]->nama }}</a>
                </li>
                <li class="list-group-item">
                  <b>Tahun</b> <a class="float-right">{{ $film->tahun }}</a>
                </li>

              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Ringkasan film</strong>

              <p class="text-muted">
                {{$film->ringkasan}}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Cast</strong>

              <p class="text-muted">
                @foreach ($film->peran()->get() as $peran)
                {{ $peran->cast[0]->nama }} as {{ $peran->nama }} <br>
                @endforeach
              </p>

              <hr>



              <hr>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="{{ route('kritik_create', ['films' => $film->id]) }}">Add kritik</a></li>

              </ul>
            </div><!-- /.card-header -->
            @foreach ($film->kritik()->get() as $kritik)

            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <span class="username">
                        <a href="#">{{ Auth::user()->name }}</a>

                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">{{$kritik->created_at}}</span>
                    </div>
                    <!-- /.user-block -->
                    <p>

                    </p>
                    <strong>komentar</strong><br>
                    {{ $kritik->content }}

                    <br><br>
                    <strong>rating</strong><br>

                    {{ $kritik->point }} <br><br>

                    @endforeach <p>
                      <span class="float-right">
                        <a href="#" class="link-black text-sm">
                        </a>
                      </span>
                    </p>

                  </div>
                  <!-- /.post -->

                  <!-- Post -->

                  <!-- /.timeline-label -->
                  <!-- timeline item -->

                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
@endsection