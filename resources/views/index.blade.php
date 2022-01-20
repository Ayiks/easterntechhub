@extends('layouts.app')

@section('section') 
 
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are here to help you build your career through innovation and technology</h2>
      <a href="{{route('courses')}}" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/abt.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Eastern Tech Hub’s mission is to promote the socio-economic development and competitiveness of the Eastern Region through innovation by:</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <ul>
              <li><i class="bi bi-check-circle"></i> creating new business opportunities and adding value to mature companies in high-tech sectors.</li>
              <li><i class="bi bi-check-circle"></i> Equiping the youth with the needed Digital Skills to be ready for the job market.</li>
              <li><i class="bi bi-check-circle"></i> enhancing the synergy between industry, government, academic and research institutions.</li>
            </ul>
        

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
            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="content text-center">
              <h3>Why Choose ETH?</h3>
              <p>
              Eastern Tech Hub has created a unique space for startups, entrepreneurs, academics and micro
small and medium enterprises (MSMEs) to network and prosper. Its value-adding business
support services contribute to the growth and globalization of technology-rich enterprises in an
environment that promotes innovation and enhances competitiveness for knowledge-based
businesses.
              </p>
              <div class="text-center">
                <a href="{{route('about')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
         </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">
     

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="section-title">
          <h2>Partners</h2>
          
        </div>
          <div class="col-lg-3 col-md-5">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/gtl logo.png')}}" alt="" ></i>
            <h3><a href="">iCODE Hub</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/kh.png')}}" alt="" ></i>
              <h3><a href="">Kumasi Hive</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/zv.png')}}" alt="" ></i>
              <h3><a href="">Zongovation Hub</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/yison.png')}}" alt="" ></i>
              <h3><a href="">Yison Tech Hub</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/Ho.png')}}" alt="" ></i>
              <h3><a href="">Ho Node Hub</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/iSpace.png')}}" alt="" ></i>
              <h3><a href="">iSpace Hub</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/HopIn.png')}}" alt="" ></i>
              <h3><a href="">HopIn Academy</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <i class="logo"><img src="{{asset('assets/img/Grassroots.png')}}" alt="" ></i>
              <h3><a href="">Grassroot Hub</a></h3>
            </div>
          </div>
         
        </div>

      </div>
    </section>End Features Section -->

    <!-- ======= Partners Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Partners</h2>
          <p>Our Partners</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{asset('assets/img/gtl logo.png')}}" class="img-fluid" alt="...">
              <div class="course-content">            

                <h3>Ghana Tech Labs</h3>
               
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{asset('assets/img/mastercard.png')}}" class="img-fluid" alt="...">
              <div class="course-content">            

                <h3>MaterCard Foundation</h3>
               
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{asset('assets/img/worldbank.png')}}" class="img-fluid" alt="...">
              <div class="course-content">            

                <h3>The World Bank</h3>
               
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Partners Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Popular Trainings</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{asset('assets/img/course-1.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Skills Trainig</h4>
                  
                </div>

                <h3><a href="course-details.html">Digital Skills Trainig</a></h3>
                <p>We offer a wide range of Digital Training.
                </p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="{{asset('assets/img/course-2.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Advisory</h4>
                 
                </div>

                <h3><a href="course-details.html">Business Advisory Support</a></h3>
                <p>At Our center, we offer every support your business needs right from advisosry support to marketing</p>
              
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{asset('assets/img/course-3.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Skills Training</h4>
                 
                </div>

                <h3><a href="course-details.html">Entrepreneurship Training</a></h3>
                <p>Are you ready to learn what it takes to be a risk taker? Visit us for our Entrepreneurship Training sessions.</p>
               
                </div> 
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/trainers/isaac.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Isaac k. Akutey</h4>
                <span>C.O.O & Co-Founder</span>
                <!-- <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p> -->
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/trainers/jones.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Jones Amarkai Amarteifio</h4>
                <span>C.E.O & Co-Founder</span>
                <p>
                  
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
@endsection

@include('layouts.script')