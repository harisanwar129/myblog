<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
   <title>
        @yield('title')
   </title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div class="card">
        <div class="card-body">
            @include ('layout.header')
        </div>
        </div>
    </div>
    </div>
<br>    
<br>    
    <div class="row">
    <div class="col-sm-12">
        <div class="card">
        <div class="card-body">
          @yield('content')
        </div>
        </div>
    </div>
    </div>
<br>    
<br>    
    <div class="row">
    <div class="col-sm-12">
        <div class="card">
        <div class="card-body">
            @include ('layout.footer')
        </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>