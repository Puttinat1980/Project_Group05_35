<!doctype html>
<html>
<head>
   @include('includes.promote.head')
</head>

<body>


   <header>
       @include('includes.promote.header')
   </header>


   <div>

   @yield('content')

    </div>

    @include('includes.promote.footer')
    </div>

  <script src="{{asset('template/promote/js/jquery-3.2.1.min.js') }}"></script>
   <script src="{{asset('template/promote/js/bootstrap.min.js') }}"></script>
   <script src="{{asset('template/promote/js/owl.carousel.min.js') }}"></script>
   <script src="{{asset('template/promote/js/jquery.marquee.min.js') }}"></script>
   <script src="{{asset('template/promote/js/main.js') }}"></script> 
   

   </body>

</html>