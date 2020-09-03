
@extends('layout')
@section('content')
<table class="table table-bordered mt mt-5">
    <tr>
    <th>title</th>
    <th>post by</th>

    </tr>
    <?php
    foreach($postsusers as $postsuser){
            echo "<tr>";
            echo "<td>".$postsuser->title."</td>";
            echo "<td>".$postsuser->user->username."</td>";
            echo "</tr>";   
    }
    ?>
</table>
<a href="{{url('users')}}" class="btn btn primasy">kembali</a>
@endsection
@show
