<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bheem Bharat</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      /* Dark blue background */
      font-family: Arial, sans-serif;
    }

    /* Navbar */
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

    /* Hero section */
    .hero-section {
      position: relative;
      background: url('../images/bg-building.jpg') no-repeat center center;
      background-size: cover;
      padding: 80px 20px;
      width: 100%;
    }

    .hero-overlay {
      background: rgba(0, 0, 0, 0.5);
      padding: 47px;
      max-width: 100%;
      color: white;
    }

    .hero-section h1 {
      font-size: 2.2rem;
      font-weight: 800;
    }
    .hero-section p {
      font-size: 1rem;
      margin-top: 10px;
    }

    /* Features (cards start right below hero) */
    .features {
      margin-top: 40px;
      position: relative;
      z-index: 3;
    }

    .features img {
      width: 90%;
      height: 180px;
      border-radius: 10px;
      object-fit: cover;
      border: 3px solid #002366;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.4);
    }

    .features h5 {
      margin-top: 10px;
      font-weight: 700;
    }
    .location-section .location-card img {
    height: 200px;
    object-fit: cover;
  }
  .search-bar {
    max-width: 900px;
    margin: auto;
    font-weight: 600;
  }
  .search-bar span {
    font-size: 14px;
  }
     /* Profile Card */
      .profile-card {
        border: 2px solid #001f66;
        border-radius: 8px;
        background: #fff;
      }
      .profile-img {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        object-fit: cover;
        border: 2px solid #001f66;
      }

      /* Agent Card */
      .agent-card {
        border: 2px solid #001f66;
        border-radius: 10px;
        background: #fff;
      }
      .agent-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #001f66;
      }
      .verified {
        font-weight: 600;
        color: #001f66;
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
      @media (max-width: 768px) {
        .navbar-brand img {
          height: 40px;
        }
        .tagline {
          font-size: 14px;
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

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/realestate') }}">SOCIETY/COLONY</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/matrimoianl-info') }}">MATRIMONY</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/content') }}">ABOUT US</a></li>
          <li class="nav-item"><a class="nav-link" href="#register">CONTACT US</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section mt-5 position-relative" style="background-color: #002366">
    <div class="hero-overlay">
      <h1>ROOM, FLAT & ACCOMMODATION SUPPORT</h1>
      <p>Moving to a new city for studies, job, or business? Don’t worry!</p>
      <h5 class="mt-4 fw-bold">WITH BHEEM BHARAT ACCOMMODATION NETWORK, YOU CAN:</h5>
      <ul>
        <li>Bheembharat.com is a dedicated platform offering residential stays and rental properties exclusively for the SC, ST, and OBC community.</li>
        <li>The portal provides safe, affordable, and community-centric accommodation options in Ambedkar Bhawan and Buddh Bihar colonies across various states of India, ensuring accessible housing and social upliftment.</li>
      </ul>
    </div>
      <!-- Features Section -->
  <div class="container-fluid features px-5" style="color: #f8f8f8">
    <div class="row text-center">
      <div class="col-md-4">
        <img src="../images/hall.jfif" alt="Halls">
        <h5>HALLS</h5>
      </div>
      <div class="col-md-4">
        <img src="../images/room.jfif" alt="Rooms" style="objectFit: 'contain',">
        <h5>ROOMS</h5>
      </div>
      <div class="col-md-4">
        <img src="../images/openarea.jfif" alt="Open Area">
        <h5>OPEN AREA</h5>
      </div>
    </div>
  </div>
  </section>

  <!-- Location Section -->
  <section class="location-section py-5 bg-white text-center">
    <div class="container">
      <!-- Title -->
      <h3 class="fw-bold text-primary mb-4">SELECT LOCATION</h3>

      <!-- Location Options -->
      <div class="row justify-content-center mb-5">
        <div class="col-md-4 mb-4">
          <div class="location-card">
            <img src="./images/budh-removebg-preview.png" alt="Buddh Vihar" class="img-fluid rounded shadow-sm">
            <div class="mt-3 d-flex align-items-center justify-content-center">
              <span class="text-danger fs-4 me-2">📍</span>
                         <span class="fw-bold border border-primary px-4 py-1 rounded-pill" style=" color: #002060">BUDDH VIHAR</span>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="location-card">
            <img src="./images/garden-removebg-preview.png" alt="Ambedkar Bhawan" class="img-fluid rounded shadow-sm">
            <div class="mt-3 d-flex align-items-center justify-content-center">
              <span class="text-danger fs-4 me-2">📍</span>
              <span class="fw-bold border border-primary px-4 py-1 rounded-pill" style=" color: #002060">AMBEDKAR BHAWAN</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Search Bar -->
      <div class="search-bar px-3 py-2 rounded-pill border border-primary d-flex align-items-center justify-content-between shadow-sm">
        <!-- Location -->
        <div class="d-flex align-items-center px-2">
          <span class="text-primary fs-5 me-2">📍</span>
          <span class="fw-bold text-primary px-3 py-1 bg-light rounded-pill">LUCKNOW</span>
        </div>

        <!-- Add More -->
        <div class="px-3 text-muted">ADD MORE....</div>

        <!-- Flat -->
        <div class="d-flex align-items-center px-3">
          <span class="fs-5 me-2">🏠</span>
          <span>Rooms</span>
        </div>

        <!-- Budget -->
        <div class="d-flex align-items-center px-3">
          <span class="fs-5 me-2">💰</span>
          <span>BUDGET</span>
        </div>

        <!-- Search Button -->
        <button class="btn btn-primary rounded-pill fw-bold px-4 d-flex align-items-center">
          🔍 SEARCH
        </button>
      </div>

      <!-- Search Footer -->
      <p class="mt-4 text-primary fw-bold">
        BECAUSE YOU SEARCHED <span class="text-danger">LUCKNOW</span><br>
        POST <span class="text-danger">#FREE</span> PROPERTY AD
      </p>
    </div> 
  </section>
  <div class="location-block container py-5 mb-5" style="background-color: #f8f8f8">
    <h5 class="text-danger fw-bold mb-1">
      <i class="bi bi-geo-alt-fill"></i> BUDDH VIHAR
    </h5>
    <p class="text-muted small mb-4">BUDH VIHAR COLONY CHINHAT LUCKNOW</p>

    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-md-6">
        <div class="profile-card d-flex align-items-center mb-3 p-2">
          <img src="./images/house.jfif" class="profile-img" />
          <div class="ms-3">
            <h6 class="fw-bold">Proprty</h6>
            <p class="mb-0">NAME :</p>
            <p class="mb-0">AGE :</p>
            <p class="mb-0">OCCUPATION :</p>
          </div>
        </div>

        <div class="profile-card d-flex align-items-center mb-3 p-2">
          <img src="./images/openarea2.jfif" class="profile-img" />
          <div class="ms-3">
            <h6 class="fw-bold">Open Area</h6>
            <p class="mb-0">NAME :</p>
            <p class="mb-0">AGE :</p>
            <p class="mb-0">OCCUPATION :</p>
          </div>
        </div>

        <div class="profile-card d-flex align-items-center p-2">
          <img src="./images/room1.jfif" class="profile-img" />
          <div class="ms-3">
            <h6 class="fw-bold">Room Area</h6>
            <p class="mb-0">NAME :</p>
            <p class="mb-0">AGE :</p>
            <p class="mb-0">OCCUPATION :</p>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6">
        <div class="agent-card text-center p-4">
          <img src="./images/men1.jfif" class="agent-img mb-3" />
          <h6 class="fw-bold" style="color: #002060">NAME : ASHUTOSH VERMA</h6>
          <p class="mb-1"style="color: #002060">AGE :</p>
          <p class="mb-1" style="color: #002060">PLACE :</p>
          <p class="mb-3" style="color: #002060">DESIGNATION :</p>
          <button class="btn btn-primary w-100 mb-2">CONTACT AGENT</button>
          <div class="verified small">
            <span>BHEEM BHARAT VERIFIED</span>
            <i class="bi bi-check-circle-fill text-primary"></i>
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
        src="../images/white-logo-removebg-preview.png"
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