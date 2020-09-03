@extends('layout')
@section('content')
<div class="container mt mt-4">  
<div class="row">
   @foreach($datausersposts->post as $p)
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$p->title}}</h5>
        <p class="card-text">{{$p->body}}</p>
        <a href="{{url('users')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
   @endforeach
</div>
</div>
<br>
<br>
<a href="{{url('allposts')}}" class="btn btn primasy">Penerbit</a>
@endsection
@section('kembali')
@endsection
@show