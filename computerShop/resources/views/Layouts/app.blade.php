<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/picturePreview.css')}}">
  <link rel="stylesheet" href="{{asset('css/topnav.css')}}">
  <title>Document</title>
</head>
<body>
  @include('inc.topnav')
  <div>
     @yield('products')
  </div>

  <div>
       @yield('addProducts')
  </div>

  <div>
       @yield('productList')
  </div>

  @include('inc.Footer')
  
</body>
</html>