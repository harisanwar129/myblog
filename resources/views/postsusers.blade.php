
@extends('layout')
@section('content')
<table class="table table-bordered mt mt-5">
    <tr>
    <th>title</th>
    <th>post by</th>

    </tr>
    <?php
    foreach($postsusers as $p){
            echo "<tr>";
            echo "<td>".$p->title."</td>";
            echo "<td>".$p->user->username."</td>";
            echo "</tr>";   
    }
    ?>
</table>
<a href="{{url('users')}}" class="btn btn primasy">kembali</a>
<a href="{{url('postbycategory')}}" class="btn btn primasy">postcategory</a>
@endsection
@section('kembali')
@endsection
@show
