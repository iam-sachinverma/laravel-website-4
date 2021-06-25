@extends('layouts.front_layout.front_layout')
@section('content')


 <!-- Call Button -->
    <div class='phone d-flex align-items-center justify-content-center'>
      <a href="tel:8377836769">
        <div class="quick-alo-ph-img-circle"></div>
      </a>
    </div>
 <!-- Call Button -->
  
  <!-- Popup Modal -->
  <div class="modal fade" id="popupForm" tabindex="-1" aria-labelledby="popupFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content rounded-0 bg-dark bg-gradient text-white">
        <div class="modal-header">
          <h5 class="modal-title" id="popupFormLabel">Get Your Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
          <form action="{{ url('/add-query') }}" method="post" role="form" name="queryForm" id="queryForm" class="query">@csrf
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="query_name" id="query_name" class="form-control rounded-0" id="name" placeholder="Enter Your Name" required>
                  </div>
                </div>
                <div class="form-group mt-4">
                  <input type="number" class="form-control rounded-0" name="query_phone" id="query_phone" placeholder="Enter Your Phone Number" required>
                  <div id="emailHelp" class="form-text">We'll never share your phone number with anyone else.</div>
                </div>
                <div class="form-group mt-4">
                  <select class="form-select rounded-0" name="query_service" id="query_service" aria-label="Default select example">
                    <option selected>Select Service</option>
                    <option value="Car Repair Service">Car Repair Service</option>
                    <option value="Washing Machine Repair Service">Washing Machine Repair Service</option>
                    <option value="Mircowave Repair Service ">Mircowave Repair Service </option>
                    <option value="Air Conditioner Repair Service">Air Conditioner Repair Service</option>
                    <option value="Refrigerator Repair Service">Refrigerator Repair Service</option>
                    <option value="Laundry Washing Machine Repair Service">Laundry Washing Machine Repair Service</option>
                    <option value="LED Television Repair Service">LED Television Repair Service</option>
                  </select>
                </div> 
               
                 <div class="d-grid gap-2 mt-5">
                  <button class="btn btn-danger rounded-0" type="submit">Book</button>
                 </div>
      
            </form>
        </div> 
      </div>
    </div>
  </div>

  <!-- Popup Modal -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Repair and Service</h1>
      <h2>Urban Care Service provide affordable Car Repair Service and Home Appliances Repair Service</h2>
      <a href="tel:8377836769"  class="btn-get-started scrollto">+91-8377836769</a>
    </div>
  </section><!-- End Hero -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <h3 class="book mb-3">Book Appointment for Service</h3>
            <form action="{{ url('/add-query') }}" method="post" role="form" name="queryForm" id="queryForm" class="query">@csrf
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="query_name" id="query_name" class="form-control rounded-0" id="name" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="form-group mt-4">
                  <input type="number" class="form-control rounded-0" name="query_phone" id="query_phone" placeholder="Your Phone Number" required>
                  <div id="emailHelp" class="form-text">We'll never share your phone number with anyone else.</div>
                </div>
                <div class="form-group mt-4">
                  <select class="form-select rounded-0" name="query_service" id="query_service" aria-label="Default select example">
                    <option selected>Select Service</option>
                    <option value="Car Repair Service">Car Repair Service</option>
                    <option value="Washing Machine Repair Service">Washing Machine Repair Service</option>
                    <option value="Mircowave Repair Service ">Mircowave Repair Service </option>
                    <option value="Air Conditioner Repair Service">Air Conditioner Repair Service</option>
                    <option value="Refrigerator Repair Service">Refrigerator Repair Service</option>
                    <option value="Laundry Washing Machine Repair Service">Laundry Washing Machine Repair Service</option>
                    <option value="LED Television Repair Service">LED Television Repair Service</option>
                  </select>
                </div> 
                <div class="text-center mt-5"><button type="submit">Book</button></div>
            </form>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>We have policy of customer satisfy and the value for money at low prices to repair</h3>
            <ul class="mt-3">
              <li><i class="bi bi-check-circle"></i> Car Repair Service</li>
              <li><i class="bi bi-check-circle"></i> Washing Machine Repair Service</li>
              <li><i class="bi bi-check-circle"></i> Laundry Washing Machine Repair Service</li>
              <li><i class="bi bi-check-circle"></i> Mircowave Repair Service </li>
              <li><i class="bi bi-check-circle"></i> Air Conditioner Repair Service</li>
              <li><i class="bi bi-check-circle"></i> Refrigerator Repair Service</li>
              <li><i class="bi bi-check-circle"></i> LED Television Repair Service.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>A solution for every need of your Home Appliances and Car Service and Repair problems</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="images/front_images/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <a href="#queryForm"> <h4>Car Repair & Service</h4>
              <p>Tap to Book Appointment</p> </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <img src="images/front_images/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <a href="#queryForm"> <h4>Washing Machine Repair Service</h4>
              <p>Tap to Book Appointment</p> </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
           <img src="images/front_images/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <a href="#queryForm"> <h4>Mircowave Repair Service</h4>
              <p>Tap to Book Appointment</p> </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
           <img src="images/front_images/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <a href="#queryForm"> <h4>Air Conditioner Repair Service</h4>
              <p>Tap to Book Appointment</p> </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="images/front_images/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
           <div class="portfolio-info">
           <a href="#queryForm"> <h4>Refrigerator Repair Service</h4>
              <p>Tap to Book Appointment</p></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="images/front_images/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <a href="#queryForm"> <h4>LED Television Repair Service</h4>
              <p>Tap to Book Appointment</p></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="images/front_images/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <a href="#queryForm"> <h4>Laundry Washing Machine</h4>
              <p>Tap to Book Appointment</p> </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Customer Care Support</h3>
          <p> Find the right solution. Contact Our Customer Service Team </p>
          <a href="tel:8377836769"  class="cta-btn">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Let us know how urban care service can help you</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>29A Street No. 9, Dwarka Sec 9, New Delhi-110077</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><a href="mailto:serviceurbancare@gmail.com"  class="btn-get-started scrollto">serviceurbancare@gmail.com</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><a href="tel:8377836769"  class="btn-get-started scrollto">8377836769</a></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection  