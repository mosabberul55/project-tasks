<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
    <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
</head>
<body>
  <div class="container mt-5">
    @yield('content')
  </div>


  <script src="{{ asset('bootstrap\js\jquery-3.5.1.slim.min.js') }}" ></script>
  <script src="{{ asset('bootstrap\js\bootstrap.min.js') }}" ></script>
  <script src="{{ asset('bootstrap\js\popper.min.js') }}" ></script>

</body>
</html>
