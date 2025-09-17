<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bheem Bharat - Coming Soon</title>
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
        background: linear-gradient(135deg, #002060 0%, #001d80 100%);
        color: #fff;
        height: 100vh;
        overflow-x: hidden;
      }

      /* Navbar - fixed on top */
      .navbar {
        padding: 1rem 2rem;
        background: #ffffff;
        box-shadow: none;
      }
      .navbar.fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        border-bottom: 0;
      }

      .navbar-nav .nav-link {
        color: #0026d3 !important;
        font-weight: 500;
        margin-left: 30px;
        font-size: 16px;
      }
      .navbar-nav .nav-link.active,
      .navbar-nav .nav-link:focus {
        font-weight: 700;
      }

      .navbar-brand {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        line-height: 1.2;
      }
      .navbar-brand img {
        height: 55px;
        margin-bottom: 4px;
      }
      .tagline {
        font-size: 13px;
        color: #0026d3;
        letter-spacing: 0.6px;
      }

      /* Coming Soon Section */
      .coming-soon {
        text-align: center;
        padding: 100px 20px;
        min-height: calc(100vh - 200px);
      }

      .coming-soon h1 {
        font-size: 72px;
        font-weight: 900;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
      }

      .coming-soon p {
        font-size: 20px;
        color: #e0e0e0;
        margin-bottom: 40px;
      }

      /* Countdown Timer */
      .countdown {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 40px;
      }

      .countdown-item {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 15px 25px;
        text-align: center;
        min-width: 80px;
      }

      .countdown-item span {
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #fff;
      }

      .countdown-item p {
        font-size: 14px;
        color: #e0e0e0;
        text-transform: uppercase;
        margin: 0;
      }

      /* Subscription Form */
      .subscribe-form {
        max-width: 500px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.15);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      }

      .subscribe-form .form-control {
        border-radius: 25px;
        border: none;
        padding: 12px 20px;
        background: #fff;
        color: #333;
      }

      .subscribe-form .btn {
        border-radius: 25px;
        padding: 12px 30px;
        background-color: #ffb100;
        color: #002060;
        font-weight: 700;
        border: none;
        transition: background-color 0.3s;
      }

      .subscribe-form .btn:hover {
        background-color: #e30613;
        color: #fff;
      }

      /* Footer */
      .footer {
        padding: 20px 0;
        background: #001d80;
        text-align: center;
        font-size: 14px;
        color: #ccc;
      }

      .footer a {
        color: #ffb100;
        text-decoration: none;
      }

      .footer a:hover {
        color: #e30613;
      }

      @media (max-width: 991px) {
        body {
          padding-top: 140px;
        }
        .coming-soon h1 {
          font-size: 48px;
        }
        .coming-soon p {
          font-size: 16px;
        }
        .countdown {
          flex-wrap: wrap;
          gap: 10px;
        }
        .countdown-item {
          min-width: 60px;
        }
        .countdown-item span {
          font-size: 24px;
        }
        .subscribe-form {
          padding: 20px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img
            src="../images/logo-removebg-preview.png"
            alt="Bheem Bharat Logo"
          />
          <div class="tagline">EKTA, SAMARTHAN, VIKAS</div>
        </a>

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
              <a class="nav-link" href="{{ url('/realestate') }}">Real Estate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/matrimoianl-info') }}">Matrimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/content') }}">Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">OTHERS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Coming Soon Section -->
    <section class="coming-soon">
      <div class="container">
        <h1>COMING SOON</h1>
        <p>We are working hard to bring you an amazing experience. Stay tuned!</p>

        <!-- Countdown Timer -->
        <div class="countdown" id="countdown"></div>

        <!-- Subscription Form -->
        <div class="subscribe-form">
          <h4>Stay Updated</h4>
          <form>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="Enter your email"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary w-100">
              Notify Me
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <p>
        &copy; 2025 Bheem Bharat. All rights reserved. |
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
      </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Countdown Timer (set to 1 month from today, 06:05 PM IST, September 06, 2025)
      const countDownDate = new Date("October 06, 2025 18:05:00 GMT+0530").getTime();

      const countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML = `
          <div class="countdown-item"><span>${days}</span><p>Days</p></div>
          <div class="countdown-item"><span>${hours}</span><p>Hours</p></div>
          <div class="countdown-item"><span>${minutes}</span><p>Minutes</p></div>
          <div class="countdown-item"><span>${seconds}</span><p>Seconds</p></div>
        `;

        if (distance < 0) {
          clearInterval(countdown);
          document.getElementById("countdown").innerHTML = "<h2>LAUNCHED!</h2>";
        }
      }, 1000);
    </script>
  </body>
</html>