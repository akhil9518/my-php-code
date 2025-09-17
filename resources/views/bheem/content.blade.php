<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bheem Bharat - Content</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        padding-top: 100px;
      }

      /* Navbar - fixed on top */
      .navbar {
        padding: 1rem 2rem;
        background-color: #001f66 !important;
        z-index: 1030;
      }
      .navbar-nav .nav-link {
        color: white !important;
        font-weight: bold;
        margin: 0 10px;
      }
      .navbar-nav .nav-link:hover {
        text-decoration: underline;
      }
      .navbar-brand img {
        height: 50px;
      }
      .tagline {
        font-size: 18px;
        font-weight: 400;
        color: white;
        margin-top: 5px;
      }

      /* About Section */
      .about-section {
        padding: 80px 0;
        width: 100%;
        background-color: #002060;
      }

      .about-section .about-content {
        color: white;
      }

      .about-section .about-content h2 {
        font-size: 50px;
        font-weight: 900;
      }

      .about-section .about-content h2 .red {
        color: red;
      }

      .about-section .about-content h2 .white {
        color: white;
      }

      .about-section .about-content p {
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 20px;
      }

      .about-img {
        width: 60%;
      
      }

      @media (max-width: 991px) {
        .about-section {
          text-align: center;
        }
        .about-img {
          margin-bottom: 30px;
        }
      }

      /* Why Choose Section */
      .choose-section {
        padding: 80px 0;
        background-color: #002060;
        width: 100%;
      }

      .choose-section .choose-content h2 {
        font-size: 50px;
        font-weight: 900;
        margin-bottom: 30px;
        color: #fff;
      }

      .choose-section .choose-content ul {
        list-style-type: disc;
        padding-left: 25px;
      }

      .choose-section .choose-content ul li {
        font-size: 18px;
        margin-bottom: 15px;
        line-height: 1.6;
        color: #fff;
      }

      .choose-section .choose-content ul li strong {
        font-weight: 700;
        color: #fff;
      }

      .choose-img {
        width: 100%;
        max-width: 450px;
        max-height: 350px;
        object-fit: contain;
      }

      @media (max-width: 991px) {
        .choose-section {
          text-align: center;
        }
        .choose-img {
          margin-top: 30px;
        }
      }

      /* Join Section */
      .join-section {
        padding: 120px 0 80px;
        background: #fff;
      }

      .join-section .join-content .headline h1 {
        font-size: 58px;
        font-weight: 900;
        line-height: 1.1;
        color: #002060;
        position: relative;
        z-index: 2;
      }

    

      .join-section .join-content p {
        font-size: 18px;
        margin: 20px 0;
        color: #0026d3;
      }

      .join-section .join-content ul {
        list-style: none;
        padding: 0;
        margin: 20px 0;
      }

      .join-section .join-content ul li {
        font-size: 30px;
        margin-bottom: 12px;
        color: #0026d3;
        position: relative;
        padding-left: 20px;
      }

      .join-section .join-content ul li::before {
        content: "•";
        color: #0026d3;
        font-size: 22px;
        position: absolute;
        left: 0;
        top: -2px;
      }

      .join-section .join-content ul li strong {
        font-weight: 700;
      }

      .join-section .join-content .bottom-line {
        font-weight: 700;
        font-size: 20px;
        margin-top: 20px;
        color: #0026d3;
      }

      .join-img {
        width: 100%;
        max-width: 100%;
        max-height: 400px;
        object-fit: contain;
      }

      @media (max-width: 991px) {
        .join-section {
          text-align: center;
        }

        .join-section .join-content .headline h1 {
          font-size: 42px;
        }

      }

      /* Testimonials Section */
      .testimonials-section {
        padding: 120px 0 80px;
        text-align: center;
        background: #002060;
      }

      .testimonials-section h2 {
        font-size: 48px;
        font-weight: 900;
        color: white;
        margin-bottom: 60px;
      }

      .testimonial-card {
        background: #fff;
        color: #0026d3;
        border-radius: 30px;
        padding: 40px 25px 25px;
        position: relative;
        height: 100%;
      }

      .testimonial-card .name-badge {
        background: #ffb100;
        color: #0026d3;
        font-weight: 700;
        text-transform: uppercase;
        padding: 8px 20px;
        border-radius: 25px;
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 14px;
      }

      .testimonial-card p {
        font-style: italic;
        font-size: 16px;
        margin: 0;
        color: #0026d3;
      }

      @media (max-width: 991px) {
        .testimonials-section h2 {
          font-size: 36px;
        }
        .testimonial-card {
          margin-bottom: 40px;
        }
      }

      /* Register Now Section */
      .register-section {
        padding: 120px 20px 60px;
        background: #fff;
        text-align: center;
      }

      .register-section h1 {
        font-size: 72px;
        font-weight: 900;
        line-height: 1.2;
        color: #002060;
      }

      .register-section h1 span {
        display: block;
      }

      .register-section p {
        font-size: 18px;
        margin-top: 15px;
        margin-bottom: 30px;
        color: #002060;
      }

      /* Register Button */
      .btn-register {
        background: #ffb100;
        color: #002060;
        font-weight: 700;
        padding: 12px 40px;
        border-radius: 50px;
        border: none;
        font-size: 16px;
        transition: 0.3s;
      }

      .btn-register:hover {
        background: #e30613;
        color: #fff;
      }

      /* Bottom Link Bar */
      .bottom-bar {
        background: #002060;
        color: #fff;
        font-weight: 700;
        font-size: 18px;
        border-radius: 50px;
        padding: 15px 30px;
        margin: 50px auto 0;
        display: inline-block;
        min-width: 80%;
      }

      @media (max-width: 768px) {
        .register-section h1 {
          font-size: 48px;
        }
        .bottom-bar {
          font-size: 16px;
          min-width: 95%;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
        <div class="navbar-brand">
          <img src="../images/white-logo-removebg-preview.png" alt="Bheem Bharat Logo">
          <div class="tagline">EKTA, SAMARTHAN, VIKAS</div>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
            <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/') }}">HOME</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('/realestate') }}">SOCIETY/COLONY</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('/matrimoianl-info') }}">MATRIMONY</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('/content') }}">ABOUT US</a>
  </li>

  <li class="nav-item">
    <!-- Scrolls to register section -->
    <a class="nav-link" href="#register">CONTACT US</a>
  </li>
</ul>
        </div>
      </div>
    </nav>

    <!-- About Section -->
<section class="about-section " >
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Text -->
          <div class="col-lg-6">
            <div class="about-content">
              <h2>
                <span class="red">ABOUT</span>
                <span class="white">BHEEMBHARAT</span>
              </h2>
              <p>
                Bheem Bharat is a digital platform created for the SC/ST Bhim
                community of India. Our vision is to connect community members
                across cities and states, making life easier and stronger together.
              </p>
              <p>
                Whether you are shifting to a new city, searching for a home, or
                looking for a matrimonial alliance within the community,
                BheemBharat.com brings trusted connections right to your fingertips.
              </p>
              <p>
                We are not just a platform – we are a movement for unity, support,
                and growth of the Bhim community.
              </p>
            </div>
          </div>
          <!-- Right Image -->
          <div class="col-lg-6 text-center">
            <img src="./images/about.svg" alt="About Image" class="about-img" />
          </div>
        </div>
      </div>
    </section>



    <!-- Join the Movement Section -->
    <section class="join-section container-fluid">
      <div class="container">
        <div class="row align-items-center gx-5">
          <!-- Left Content -->
          <div class="col-lg-6 join-content">
            <div class="headline">
              <h1>
                JOIN THE <br />
                MOVEMENT
              </h1>
         
            </div>
            <p>Be a part of Bheem Bharat today.</p>
            <ul>
              <li>Find a <strong>Home.</strong></li>
              <li>Find a <strong>Life Partner.</strong></li>
              <li>Find Your <strong>Community.</strong></li>
            </ul>
            <p class="bottom-line">Together, we rise. Together, we build.</p>
          </div>
          <!-- Right Image Carousel -->
          <div class="col-lg-6 text-center">
            <div id="joinImageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../images/joinmomemt-removebg-preview.png" alt="Join Movement Image 1" class="join-img" />
                </div>
                <div class="carousel-item">
                  <img src="../images/joinmoment2.jpg" alt="Join Movement Image 2" class="join-img" />
                </div>
                <div class="carousel-item">
                  <img src="../images/joinmoment3.jpg" alt="Join Movement Image 3" class="join-img" />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#joinImageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#joinImageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section container-fluid">
      <div class="container">
        <h2>TESTIMONIALS <br />FROM CUSTOMERS</h2>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="testimonial-card">
              <div class="name-badge">YAEL AMARI</div>
              <p>
                "India’s vibrant culture and warm hospitality made it a trip to
                remember. Every city was a new adventure!"
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="testimonial-card">
              <div class="name-badge">SHAWN GRACIA</div>
              <p>
                "Traveling through India was like stepping into a living
                tapestry of art, tradition, and natural splendor. It’s a journey
                I’ll never forget."
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="testimonial-card">
              <div class="name-badge">OLIVIA WILSON</div>
              <p>
                "I was captivated by the beauty of India, from its temples to
                its markets. It’s a country I’ll always cherish."
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Register Now Section -->
    <section class="register-section container-fluid">
      <div class="container">
        <!-- Logo -->
        <img
          src="../images/logo-removebg-preview.png"
          alt="Bheem Bharat Logo"
          class="img-fluid mb-3"
          style="max-width: 400px"
        />

        <!-- Tagline -->
        <p>Ekta, Samarthan, Vikas</p>

        <!-- Register Button -->
        <button class="btn-register">REGISTER NOW</button>

        <!-- Bottom Bar -->
        <div class="bottom-bar mt-4">www.bheembharat.com</div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>