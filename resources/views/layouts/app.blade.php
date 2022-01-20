@include('layouts.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
<a href="index.html" class="logo me-auto"><img src="{{asset('assets/img/eth4.png')}}" alt="" class="img-fluid">
<h1 class="logo me-auto"><a href="{{route('home')}}">Eastern Tech Hub</a></h1>
</a>

      
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('courses')}}">Services</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
          <li><a href="{{route('events')}}">Events</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('courses')}}" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

 @yield('section')

  <!-- ======= Footer ======= -->
@include('layouts.footer')<!-- End Footer -->

  
    @include('layouts.script')

</body>

</html>