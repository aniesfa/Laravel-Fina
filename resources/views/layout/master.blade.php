<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

</head>

<body>

    @include('layout.header')

    <!-- Page Content -->
    <div class="container">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
    <div class="row">
 
      
      @yield('content')

      @include('layout.sidebar')

    </div>
    <!-- /.row -->
<<<<<<< HEAD
=======
=======

        <div class="row">

        @yield('content')

        @include('layout.sidebar')

        </div>
        <!-- /.row -->
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c

    </div>
    <!-- /.container -->

    @include('layout.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>
</html>