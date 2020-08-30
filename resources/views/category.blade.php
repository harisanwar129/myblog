<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Category</title>
</head>
<body>
        <h3>{{$title}}</h3>
        <?php
        foreach ($list as $raw){
           echo $raw;
        }
        ?>

</body>
</html>