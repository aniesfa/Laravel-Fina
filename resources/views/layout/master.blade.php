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

    <div class="row">
 
      
      @yield('content')

      @include('layout.sidebar')

    </div>
    <!-- /.row -->

        <div class="row">

        @yield('content')

        @include('layout.sidebar')

        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->

    @include('layout.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>
</html>