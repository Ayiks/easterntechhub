@include('layouts.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
<a href="{{route('home')}}" class="logo me-auto"><img src="{{asset('assets/img/eth4.png')}}" alt="" class="img-fluid">
<h1 class="logo me-auto"><a href="{{route('home')}}">Eastern Tech Hub</a></h1>
</a>

      
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a  href="{{route('about')}}">About</a></li>
          <li><a href="{{route('courses')}}">Services</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
          <li><a class="active" href="{{route('events')}}">Events</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('courses')}}" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Our Events</h1>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/startup.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Startup Summit</a></h5>
                <p class="fst-italic text-center">Thursday, January 13th at 10:00am</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/digital.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Startup BAS</a></h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
              </div>
            </div>
        </div>
        
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/freemobile.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Local Start-ups investment Pitch Summit</a></h5>
                <p class="fst-italic text-center">Tuesday, November 30th at 10:00 pm</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/jobs.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Job Fair</a></h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
              </div>
            </div>
        </div>
        
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
 @include('layouts.script')

</body>

</html>