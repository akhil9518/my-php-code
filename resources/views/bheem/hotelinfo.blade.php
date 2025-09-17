<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Info Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Hero Section */
      .hero {
        position: relative;
        background: url("https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")
          center/cover no-repeat;
        height: 70vh;
      }

      /* Overlay Card */
      .hotel-card {
        position: absolute;
        bottom: -70px;
        left: 50%;
        transform: translateX(-50%);
        background: #002060;
        padding: 30px;
        border-radius: 15px;
        width: 80%;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      }

      .hotel-price {
        font-size: 1.5rem;
        color: red;
        font-weight: bold;
      }

      .rating {
        font-size: 1.3rem;
        color: #008000;
        font-weight: bold;
      }

      .section-heading {
        margin-top: 120px;
        font-weight: 700;
        color: #444;
      }

      /* Rooms Card */
      .room-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
      }
      .room-card:hover {
        transform: translateY(-5px);
      }

      /* Amenities */
      .amenities i {
        font-size: 24px;
        color: #ffcc00;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Bheem Bharat</a>
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Rooms</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Amenities</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Location</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero with card -->
    <section class="hero">
      <div
        class="hotel-card d-flex justify-content-between align-items-center flex-wrap"
      >
        <div style="color: beige">
          <h3 class="fw-bold">Bloomrooms @ Link Road</h3>
          <p class="hotel-price">₹ 4,838 <small>/ night incl. taxes</small></p>
        </div>
        <div class="text-end" style="color: beige">
          <span class="rating">⭐ 4.5</span>
          <ul class="list-unstyled mt-2">
            <li>✔ Free Early Check-in</li>
            <li>✔ Free Late Check-out</li>
            <li>✔ Flat 15% F&B Discount</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Rooms Section -->
    <section class="container">
      <h2 class="section-heading">Rooms</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="room-card card">
            <img
              src="https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="card-img-top"
              alt="Room"
            />
            <div class="card-body">
              <h5 class="fw-bold">Value Single</h5>
              <p class="mb-1">1 Guest • 130 sq.ft.</p>
              <p class="text-success fw-bold">₹ 4,838</p>
              <a href="#" class="btn btn-warning w-100">Book</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="room-card card">
            <img
              src="https://plus.unsplash.com/premium_photo-1687960116497-0dc41e1808a2?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="card-img-top"
              alt="Room"
            />
            <div class="card-body">
              <h5 class="fw-bold">Value Single</h5>
              <p class="mb-1">1 Guest • 130 sq.ft.</p>
              <p class="text-success fw-bold">₹ 4,838</p>
              <a href="#" class="btn btn-warning w-100">Book</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="room-card card">
            <img
              src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="card-img-top"
              alt="Room"
            />
            <div class="card-body">
              <h5 class="fw-bold">Value Single</h5>
              <p class="mb-1">1 Guest • 130 sq.ft.</p>
              <p class="text-success fw-bold">₹ 4,838</p>
              <a href="#" class="btn btn-warning w-100">Book</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="room-card card">
            <img
              src="https://plus.unsplash.com/premium_photo-1678297269980-16f4be3a15a6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="card-img-top"
              alt="Room"
            />
            <div class="card-body">
              <h5 class="fw-bold">Value Single</h5>
              <p class="mb-1">1 Guest • 130 sq.ft.</p>
              <p class="text-success fw-bold">₹ 4,838</p>
              <a href="#" class="btn btn-warning w-100">Book</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="room-card card">
            <img
              src="https://plus.unsplash.com/premium_photo-1678297269980-16f4be3a15a6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="card-img-top"
              alt="Room"
            />
            <div class="card-body">
              <h5 class="fw-bold">Value Single</h5>
              <p class="mb-1">1 Guest • 130 sq.ft.</p>
              <p class="text-success fw-bold">₹ 4,838</p>
              <a href="#" class="btn btn-warning w-100">Book</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="room-card card">
            <img
              src="https://plus.unsplash.com/premium_photo-1678297269980-16f4be3a15a6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="card-img-top"
              alt="Room"
            />
            <div class="card-body">
              <h5 class="fw-bold">Value Single</h5>
              <p class="mb-1">1 Guest • 130 sq.ft.</p>
              <p class="text-success fw-bold">₹ 4,838</p>
              <a href="#" class="btn btn-warning w-100">Book</a>
            </div>
          </div>
        </div>
        <!-- Repeat for other rooms -->
      </div>
    </section>

    <!-- Amenities Section -->
    <section class="container my-5">
      <h2 class="section-heading">Amenities</h2>
      <div class="row text-center amenities">
        <div class="col-6 col-md-3 mb-4">
          <i class="bi bi-wifi"></i>
          <p>Free Wi-Fi</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <i class="bi bi-snow"></i>
          <p>Air Conditioner</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <i class="bi bi-cup"></i>
          <p>Restaurant & Café</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <i class="bi bi-water"></i>
          <p>Free Mineral Water</p>
        </div>
      </div>
    </section>
    <!-- Location Section -->
    <section class="container my-5">
      <div class="row align-items-center">
        <!-- Left Column -->
        <div class="col-md-6">
          <h2 class="fw-bold " style="color: red" >Location</h2>
          <p>7, Link Road, Jangpura Extension, Jangpura, New Delhi, 110014</p>

          <a
            href="https://maps.google.com/?q=7,+Link+Road,+Jangpura,+New+Delhi"
            target="_blank"
            class="fw-bold text-secondary text-decoration-none"
          >
            View on Maps <i class="bi bi-box-arrow-up-right"></i>
          </a>

          <!-- Nearby Places -->
          <div class="row mt-4">
            <div class="col-12 col-md-4 mb-3 text-center">
              <i class="bi bi-airplane fs-1 text-warning"></i>
              <h6 class="fw-bold mt-2">Indira Gandhi Intl Airport</h6>
              <p class="mb-0">14.9 km • 40 mins</p>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
              <i class="bi bi-train-front fs-1 text-warning"></i>
              <h6 class="fw-bold mt-2">Hazrat Nizamuddin Railway</h6>
              <p class="mb-0">2.9 km • 12 mins</p>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
              <i class="bi bi-train-front fs-1 text-warning"></i>
              <h6 class="fw-bold mt-2">Jangpura Metro Station</h6>
              <p class="mb-0">0.5 km • 7 mins</p>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
          <div class="rounded shadow overflow-hidden" style="height: 300px">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.1520547127884!2d77.24423211508366!3d28.591778692438846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3dc6f6215b5%3A0x5a00c631b4c0dfad!2sJangpura%2C%20New%20Delhi!5e0!3m2!1sen!2sin!4v1687937400000!5m2!1sen!2sin"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            >
            </iframe>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </body>
</html>
