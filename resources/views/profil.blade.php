

<table border="3px">
    <tr>
    <th>Name</th>
    <th>Username</th>
    <th>email</th>
    </tr>
    <?php
    foreach($profils as $profil){
            echo "<tr>";
            echo "<td>".$profil->name."</td>";
            echo "<td>".$profil->user->username."</td>";
            echo "<td>".$profil->user->email."</td>";
            echo "</tr>";   
    }
    ?>
</table>
<br>
<br>
<br>
<table border="3px">
    <tr>
    <th>Name</th>
    <th>Username</th>
    <th>email</th>
    </tr>
    <?php
    foreach($users as $user){
            echo "<tr>";
            echo "<td>".$user->profil->name."</td>";
            echo "<td>".$user->username."</td>";
            echo "<td>".$user->email."</td>";
            echo "</tr>";   
    }
    ?>
</table>