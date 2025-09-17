<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bheem Bharat</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   body {
  margin: 0;
  padding: 0;
  background-color: #001f66;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  padding-top: 80px; /* Height of navbar */
}

    /* Navbar */
    .navbar {
  padding: 1rem 2rem;
  background-color: #001f66 !important; /* Always keep dark blue */
  z-index: 1030; /* Ensure it stays above content */
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

    /* Hero Section */
    .hero {
      padding: 1px 18px;
    }
    .hero h2 {
      font-size: 18px;
      font-weight: 400;
      margin-bottom: 20px;
    }
    .hero h1 {
      font-size: 70px;
      font-weight: 800;
      line-height: 1.3;
    }
    .hero h1 span {
      color: red;
    }
    .download-btn {
      margin-top: 20px;
      padding: 10px 20px;
      border-radius: 25px;
      background: white;
      color: #001f66;
      font-weight: bold;
      border: none;
      transition: 0.3s;
    }
    .download-btn:hover {
      background: #ddd;
    }
.map-img {
  position: relative;
  z-index: 2; /* map above circle */
}
        .map-wrapper {
        position: relative;
        display: inline-block;
        width: 100%;
        max-width: 550px;
      }
       /* Pins */
     .pin {
  position: absolute;
  width: 20px;
  height: 20px;
  background: white;
  border-radius: 50% 50% 50% 0;
  transform: translate(-50%, -50%) rotate(-45deg);
  animation: blink 1.5s infinite ease-in-out;
  z-index: 3; /* pins always above map & circle */
}
      .pin::after {
        content: "";
        width: 10px;
        height: 10px;
        background: #0026d3;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      @keyframes blink {
        0%, 100% {
          opacity: 1;
          transform: translate(-50%, -50%) rotate(-45deg) scale(1);
        }
        50% {
          opacity: 0.4;
          transform: translate(-50%, -50%) rotate(-45deg) scale(1.2);
        }
      }

    /* About Section */
    .about-section {
      background: white;
      color: #001f66;
      padding: 80px 20px;
    }
    .about-section h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #001f66;
    }
    .about-section p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #001f66;
    }
    .about-img {
      max-width: 410px;
    }

    /* How It Works */
    .how-section {
      background: white;
      color: #001f66;
      padding: -80px 20px;
    }
    .how-section h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #001f66;
    }
    .how-section ul {
      padding: 0;
    }
    .how-section ul li {
      font-size: 16px;
      margin-bottom: 12px;
      color: #001f66;
    }
    .how-img {
      width: 550px;
    }

    /* Why Choose Section */
    .why-section {
      background: #001f66;
      padding: 80px 20px;
    }

    .why-section h2 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .why-list {
    
      padding-left: 0;
    }

    .why-list li {
      font-size: 16px;
      margin-bottom: 12px;  
      line-height: 1.6;
    }
    .orange-circle {
      position: absolute;
      top: 9%;
      right: 16%;
      width: 300px;
      height: 300px;
      background-color: orange;
      border-radius: 50%;
      z-index: 1; /* stays behind */
    }

    .why-img-wrapper {
      display: inline-block;
      /* white border above the blue border in image */
      /* no gap between border and image */
    }

    .why-img {
      max-width: 330px;
      display: block;
      border-radius: 49px;
      outline: 10px solid #fff;
      outline-offset: -39px; /* pulls it inside over the blue edge */
    }

    /* Join Section */
    .join-section {
      padding: 120px 0 80px;
      background: #fff;
    }

    .headline {
      position: relative;
      display: inline-block;
    }

    .headline h1 {
      font-size: 58px;
      font-weight: 900;
      line-height: 1.1;
      color: #002060;
      position: relative;
      z-index: 2;
    }

    .headline .circle {
      position: absolute;
      top: 10px;
      right: -60px;
      width: 150px;
      height: 150px;
      background: #ffb100;
      border-radius: 50%;
      z-index: 1;
    }

    .join-text p {
      margin: 20px 0;
      font-size: 18px;
      color: #0026d3;
    }

    .join-text ul {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }

    .join-text ul li {
      font-size: 30px;
      margin-bottom: 12px;
      color: #0026d3;
      position: relative;
      padding-left: 20px;
    }

    .join-text ul li::before {
      content: "•";
      color: #0026d3;
      font-size: 22px;
      position: absolute;
      left: 0;
      top: -2px;
    }

    .join-text ul li strong {
      font-weight: 700;
    }

    .join-text .bottom-line {
      font-weight: 700;
      font-size: 20px;
      margin-top: 20px;
      color: #0026d3;
    }

    .join-img {
      border: 6px solid #002060;
      border-radius: 20px;
      overflow: hidden;
      max-width: 100%;
    }

    /* Register Section */
    .register-section {
      padding: 120px 20px 60px;
      background-color: #001d80;
      color: white;
      text-align: center;
    }
    .register-section h1 {
      font-size: 72px;
      font-weight: 900;
      line-height: 1.2;
    }
    .register-section h1 span {
      display: block;
    }
    .register-section p {
      font-size: 18px;
      margin-top: 15px;
      margin-bottom: 30px;
    }
    .btn-register {
      background: #fff;
      color: #001d80;
      font-weight: 700;
      padding: 12px 40px;
      border-radius: 50px;
      border: none;
      font-size: 16px;
      transition: 0.3s;
    }
    .btn-register:hover {
      background: #ffb100;
      color: #001d80;
    }
    .bottom-bar {
      background: #fff;
      color: #001d80;
      font-weight: 700;
      font-size: 18px;
      border-radius: 50px;
      padding: 15px 30px;
      margin: 50px auto 0;
      display: inline-block;
      min-width: 80%;
    }

    /* Responsive */
    @media (max-width: 991px) {
      body {
        padding-top: 140px;
      }
      .hero-section {
        text-align: center;
        padding: 40px 20px;
      }
      .hero-text {
        margin-bottom: 30px;
      }
      .hero-text h1 {
        font-size: 45px;
        line-height: 1.2;
      }
      .hero-text h1 span {
        font-size: 55px;
      }
      .hero-text h5 {
        font-size: 20px;
      }
      .map-wrapper {
        max-width: 400px;
      }
      .join-text {
        text-align: center;
      }
      .headline h1 {
        font-size: 42px;
      }
      .headline .circle {
        width: 100px;
        height: 100px;
        right: -40px;
        top: 5px;
      }
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
      <img src="./images/white-logo-removebg-preview.png" alt="Bheem Bharat Logo">
      <div class="tagline">EKTA, SAMARTHAN, VIKAS</div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
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

<!-- Hero Section -->
<div class="container hero">
  <div class="row align-items-center">
    <div class="col-md-6">
      <p style="font-size: 55px; font-weight: 600;">CONNECTING</p>
      <h1>
        THE BHIM COMMUNITY ACROSS <br>
        <span>INDIA</span>
      </h1>
      <button class="download-btn">Download the App</button>
    </div>
    <div class="col-lg-6 col-md-12 text-center position-relative map-wrapper">
      <div class="orange-circle"></div>
      <!-- Map -->
      <img src="../images/emptymap.svg" alt="India Map" class="map-img img-fluid" />
      <!-- White Pins -->
      <div class="pin" style="top: 53%; left: 60%"></div>
      <div class="pin" style="top: 64%; left: 27%"></div>
      <div class="pin" style="top: 20%; left: 34%"></div>
      <div class="pin" style="top: 47%; left: 23%"></div>
      <div class="pin" style="top: 41%; left: 83%"></div>
      <div class="pin" style="top: 30%; left: 29%"></div>
      <div class="pin" style="top: 45%; left: 46%"></div>
      <div class="pin" style="top: 61%; left: 49%"></div>
      <div class="pin" style="top: 80%; left: 34%"></div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="container-fluid about-section">
  <div class="container">
    <div class="row align-items-center" style="margin-left: 30px;">
      <div class="col-md-6">
        <h2>ABOUT BHEEMBHARAT</h2>
        <p>
          Bheem Bharat is a digital platform created for the SC/ST Bhim community of India. Our vision is to connect community members across cities and states, making life easier and stronger together.
        </p>
        <p>
          Whether you are shifting to a new city, searching for a home, or looking for a matrimonial alliance within the community, BheemBharat.com brings trusted connections right to your fingertips.
        </p>
        <p>
          We are not just a platform – we are a movement for unity, support, and growth of the Bhim community.
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="./images/about.svg" alt="About Bheem Bharat" class="about-img">
      </div>
    </div>
  </div>
</div>

<!-- How It Works Section -->
<div class="container-fluid how-section" style="margin-top: -272px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="./images/howitworks.svg" alt="How It Works" class="how-img">
      </div>
      <div class="col-md-6" style="
    width: 526px;
    margin-left: 38px;
    height: 74px;
">
        <h2>HOW IT WORKS</h2>
        <ul>
          <li><b>Register</b> on the website.</li>
          <li>Select the service you need – <b>Accommodation</b> or <b>Matrimonial</b>.</li>
          <li>Get connected to the <b>Area Admin</b> of your city or region.</li>
          <li>The admin will help you with <b>rooms, flats, or community matchmaking</b>.</li>
          <li>Pay only the agreed service/brokerage amount.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Why Choose Section -->
<div class="container-fluid why-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-md-6 text-white">
        <h2>WHY CHOOSE BHEEM BHARAT?</h2>
        <ul class="why-list">
          <li>Exclusive for the <b>Bhim SC/ST Community.</b></li>
          <li><b>Pan-India network</b> of area admins & helpers.</li>
          <li><b>Reliable, safe & supportive community</b> connections.</li>
          <li><b>Affordable service</b> with no hidden charges.</li>
          <li>A platform to <b>unite and uplift our people.</b></li>
        </ul>
      </div>
      <!-- Right Image -->
     <div class="col-md-6 text-center">
  <div class="why-img-wrapper">
    <img src="./images/chooseus.svg" alt="Why Choose Bheem Bharat" class="why-img">
  </div>
</div>
    </div>
  </div>
</div>

<!-- Join the Movement Section -->
<section class="join-section">
  <div class="container">
    <div class="row align-items-center gx-5">
      <!-- Left Content -->
      <div class="col-lg-6 join-text">
        <div class="headline">
          <h1>
            JOIN THE <br />
            MOVEMENT
          </h1>
          <div class="circle"></div>
        </div>
        <p>Be a part of Bheem Bharat today.</p>
        <ul>
          <li>Find a <strong>Home.</strong></li>
          <li>Find a <strong>Life Partner.</strong></li>
          <li>Find Your <strong>Community.</strong></li>
        </ul>
        <p class="bottom-line">Together, we rise. Together, we build.</p>
      </div>

      <!-- Right Image -->
      <div class="col-lg-6 text-center">
        <img
          src="../images/joinmomemt-removebg-preview.png"
          alt="Join Movement"
        />
      </div>
    </div>
  </div>
</section>

<!-- Register Section -->
<section class="register-section" id="register">
  <div class="container">
    <!-- Logo -->
    <img
      src="./images/white-logo-removebg-preview.png"
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>