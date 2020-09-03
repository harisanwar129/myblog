
@extends('layout')
@section('content')
<table class="table table-bordered mt mt-5">
    <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>View</th>
    </tr>
    <?php
    foreach($profils as $profil){
            echo "<tr>";
            echo "<td>".$profil->name."</td>";
            echo "<td>".$profil->user->username."</td>";
            echo "<td>".$profil->user->email."</td>";
            echo "<td><a href=".url('postsbyusers/'.$profil->user_id).">View</a></td>";
            echo "</tr>";   
    }
    ?>
</table>

@endsection
@show
