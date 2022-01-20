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
          <li><a class="active" href="{{route('about')}}">About</a></li>
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

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>About Us</h1>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <p>Eastern Tech Hub is an innovative space located in the Eastern Region of Ghana, with its
          primary base of operations in Koforidua, the region's capital and most popular settlement. </p>
          <br>

            <h2>Our Vision</h2>
            <p class="fst-italic">
            Eastern tech Hub is committed to innovatively implement Sustainable Development Goals
            (SDGs)through tech and entrepreneurial support focused on creating a pipeline of investment
            ready startups (more than 70% women-led firms), and linking young people to employment
            opportunities.
            </p>
            <br>
            <h2>Our Mission</h2>
            <p class="fst-italic">
            Eastern Tech Hub’s mission is to promote the socio-economic development and competitiveness
            of the Eastern Region through innovation by:</p>
            <ul>
              <li><i class="bi bi-check-circle"></i>creating new business opportunities and adding value to mature companies in high-tech sectors;
              </li>
              <li><i class="bi bi-check-circle"></i> fostering entrepreneurship and incubating new innovative companies;</li>
              <li><i class="bi bi-check-circle"></i> generating knowledge-based companies and jobs;</li>
            </ul>
            <p>
            It is thus the strategic intent of Eastern Tech hub through innovation, to increase the Eastern
            Region’s economic growth and global competitiveness by providing attractive physical and
            virtual spaces for nurturing innovation and fostering a culture of innovation and
            entrepreneurship.
            </p>

          </div>
          
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Our Values</h2>
            <p class="fst-italic">
            In working towards the achievement of the mandate and vision set out above, ETH subscribes to
            the following internal values:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <b>Innovation</b> - Smart approach to complex challenges.
              </li>
              <li><i class="bi bi-check-circle"></i><b>Integrity</b> - Transparent, honest, dependable interactions and decision making.</li>
              <li><i class="bi bi-check-circle"></i> <b> Teamwork/partnerships</b> - Collaboration to deliver results.</li>
              <li><i class="bi bi-check-circle"></i><b>Entrepreneurial spirit</b> - Agile, dynamic, innovative problem-solving.</li>
              <li><i class="bi bi-check-circle"></i> <b> Value Creation</b> -Value-add mindset and responsiveness to create benefit.</li>
            
            </ul>
            <br>
            <h2>Partnership</h2>
            <p class="fst-italic">
            Eastern Tech Hub’s vast experience in youth training and entrepreneurial support has led to
partnerships with Ghana Tech Lab, Soronko Academy, hosting of the Kosmos Innovation Center’s
AgricTech Road show and currently the regional lead for Social Enterprise Ghana (SE Ghana).
            </p>

          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -

           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
 @include('layouts.script')

</body>

</html>