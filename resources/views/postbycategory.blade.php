
@extends('layout')
@section('content')
<table class="table table-bordered mt mt-5">
    <tr>
    <th>title</th>
    <th>post by</th>

    </tr>
    <?php
    foreach($categories as $c){
            echo $c->post->title;  
    }
    ?>
</table>
<a href="{{url('users')}}" class="btn btn primasy">kembali</a>
@endsection
@section('kembali')
@endsection
@show
