<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{$title}}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/logokopi.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/logokopi.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/logokopi.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/flogokopi.png')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" />

  </head>


  <body>
    <!--    Main Content-->
    <!-- HEADER-->
    @include('layouts.header');
      <!-- END HEADER -->

      <!-- KONTEN -->
      <main class="py-4">
            @yield('content')
      </main>
      <!-- END KONTEN -->


      <!-- FOOTER -->
      @include('layouts.footer')

      <!-- END FOOTER-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>