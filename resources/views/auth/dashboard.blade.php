@extends ('layout.master')

@section('content')
<center>
    <h1> Welcome,{{ Auth::user()->name }}</h1>
</center>
@endsection