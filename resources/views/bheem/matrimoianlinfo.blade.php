<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Matrimonial Connections - Bheem Bharat</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Arial", sans-serif;
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

      /* Hero/Search Section */
      .hero {
        position: relative;
        background-image: url("../images/cover-pic-couple.jpg");
        background-size: cover;
        background-position: center;
        padding: 80px 20px 80px 20px;
        text-align: center;
        z-index: 0;
        color: white;
      }
      /* Overlay for darker background */
      .hero::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 0;
      }

      .hero-content {
        position: relative;
        max-width: 1100px;
        margin: 0 auto;
        z-index: 1;
      }

      .hero h1 {
        font-size: 32px;
        font-weight: 900;
        margin: 0 0 10px;
        line-height: 1.1;
      }
      .hero h2 {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 40px;
        letter-spacing: 1px;
      }

      /* Search box container */
      .search-box {
        background: rgba(20, 20, 20, 0.9);
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        padding: 20px 15px;
        border-radius: 12px;
        max-width: 900px;
        margin: 0 auto 40px;
        color: #aaa;
        font-size: 12px;
      }
      /* CTA Banner */
      .cta-banner {
        background: #002366;
        padding: 12px;
        border-radius: 6px;
      }

      /* Location Switch Buttons */
      /* Location Buttons */
      .location-btn {
        border: 2px solid #001f66;
        border-radius: 8px;
        font-weight: 600;
        color: #001f66;
        background: #fff;
      }
      .location-btn.active {
        background: #001f66;
        color: #fff;
      }

      /* Image boxes */
      .location-img-box img {
        width: 300px;
        height: 150px;
      }

      /* CTA Banner */
      .cta-banner {
        background: #001f66;
        padding: 14px;
        border-radius: 10px;
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

      .select-group {
        display: flex;
        flex-direction: column;
        min-width: 120px;
        flex: 1 1 140px;
        max-width: 160px;
      }
      .select-group select {
        padding: 14px 18px;
        border-radius: 14px;
        border: none;
        font-size: 16px;
        font-weight: 600;
        background: white;
        color: #333;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: linear-gradient(45deg, transparent 50%, gray 50%),
          linear-gradient(135deg, gray 50%, transparent 50%),
          linear-gradient(to right, #ccc, #ccc);
        background-position: calc(100% - 20px) calc(1em + 2px),
          calc(100% - 15px) calc(1em + 2px), calc(100% - 25px) 0.5em;
        background-size: 4px 5px, 5px 5px, 1px 1.5em;
        background-repeat: no-repeat;
        cursor: pointer;
        outline: none;
        transition: border-color 0.3s ease;
      }
      .select-label {
        margin-top: 6px;
        font-size: 11px;
        color: #ddd;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.8px;
      }
      .to-text {
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: white;
        min-width: 20px;
        padding: 0 10px;
        flex: 0 0 auto;
        font-size: 14px;
      }

      /* Search Button */
      .search-btn {
        background-color: #e60000;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: 700;
        font-size: 16px;
        padding: 15px 50px;
        border-radius: 15px;
        margin-top: 15px;
        transition: background-color 0.3s ease;
        flex: 1 1 100%;
        max-width: 240px;
        align-self: center;
        user-select: none;
      }
      .search-btn:hover {
        background-color: #bb0000;
      }

      /* Info Bar Below Search */
      .info-bar {
        background: white;
        color: #001080;
        padding: 12px 0;
        text-align: center;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.06em;
        max-width: 1550px;
        margin: 0 auto;
        user-select: none;
      }
      .info-bar span {
        margin: 0 12px;
        border-left: 2px solid #001080;
        padding-left: 12px;
      }
      .info-bar span:first-child {
        border-left: none;
        padding-left: 0;
        margin-left: 0;
      }

      /* Call to Action Bar */
      .btn-cta:hover {
        background-color: white;
        color: #001080;
      }

      /* Responsive */
      @media (max-width: 768px) {
        nav {
          gap: 15px;
        }
        .hero h1 {
          font-size: 24px;
        }
        .hero h2 {
          font-size: 14px;
        }
        .search-box {
          flex-direction: column;
          align-items: center;
        }
        .select-group {
          width: 100%;
          max-width: 350px;
        }
        .to-text {
          margin: 12px 0 0 0;
          width: 100%;
          text-align: center;
        }
        .search-btn {
          max-width: 100%;
          width: 100%;
        }
      }

      /* Matrimonial Section */
      .matrimonial-section {
        padding: 80px 50px;
        margin-top: 50px;
        background-color: #002060;
        color: white;
        position: relative; /* Ensure relative positioning for children */
      }

      .matrimonial-section h2 {
        font-size: 56px;
        font-weight: 900;
        line-height: 1.2;
        margin-bottom: 25px;
      }

      .matrimonial-section p {
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 20px;
      }

      .matrimonial-section ul {
        padding-left: 18px;
        margin-bottom: 20px;
      }

      .matrimonial-section ul li {
        margin-bottom: 10px;
        font-size: 15px;
      }

      .highlight-text {
        font-weight: 700;
        font-size: 17px;
      }

      /* Image & Circle */
      .image-wrapper {
        position: relative;
        display: inline-block;
      }

      .yellow-circle {
        position: absolute;
        top: 1%;
        right: 18%;
        width: 180px;
        height: 180px;
        background: #f7a600; /* yellow */
        border-radius: 50%;
        z-index: 0;
      }

      .matrimonial-img {
        position: relative;
        width: 100%;
        max-width: 480px;
        z-index: 1;
      }

      /* New: Add a ground-like base to support the image */
      .image-wrapper::after {
        content: "";
        position: absolute;
        bottom: -20px; /* Adjust to position the base below the image */
        left: 0;
        width: 100%;
        height: 40px; /* Height of the base */
        background: linear-gradient(to top, #4a5e8a, #002060); /* Gradient for a solid ground effect */
        border-radius: 0 0 10px 10px; /* Slight curve at the bottom */
        z-index: 2;
      }

      /* Responsive */
      @media (max-width: 991px) {
        .matrimonial-section {
          text-align: center;
          padding: 50px 20px;
        }
        .matrimonial-section h2 {
          font-size: 38px;
        }
        .yellow-circle {
          right: 30%;
          top: 1%;
          width: 140px;
          height: 140px;
        }
        .image-wrapper::after {
          bottom: -15px; /* Adjust for smaller screens */
          height: 30px; /* Reduce height on smaller screens */
        }
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
    <a class="nav-link active" href="/">HOME</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/realestate">SOCIETY/COLONY</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/matrimoianl-info">MATRIMONY</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/content">ABOUT US</a>
  </li>

  <li class="nav-item">
    <!-- Scrolls to register section -->
    <a class="nav-link" href="#register">CONTACT US</a>
  </li>
</ul>
        </div>
      </div>
    </nav>

    <!-- Matrimonial Section -->
    <section class="matrimonial-section " style="background-color: #002060 ; color: white">
      <div class="row align-items-center">
        <!-- Left Text -->
        <div class="col-lg-6 pe-lg-5">
          <h2>MATRIMONIAL CONNECTIONS</h2>
          <p>
            Marriage is one of the most important decisions of life. Bheem
            Bharat makes it easier by helping you find suitable matches within
            the SC/ST community across India.
          </p>
          <p>Here you can:</p>
          <ul>
            <li>
              Search for bride or groom profiles within the Bhim community.
            </li>
            <li>
              Connect with families directly through verified area admins.
            </li>
            <li>Ensure cultural, social, and community-based matches.</li>
            <li>Strengthen our unity by marrying within the community.</li>
          </ul>
          <p class="highlight-text">
            A trusted matrimonial network, built only for our people.
          </p>
        </div>

        <!-- Right Image -->
        <div class="col-lg-6 text-center">
          <div class="image-wrapper">
            <div class="yellow-circle"></div>
            <img
              src="../images/marrige-pic-removebg-preview.png"
              alt="Matrimonial Image"
              class="matrimonial-img"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="hero" role="banner" style="background-color: #002060">
      <div class="hero-content">
        <h1>FIND YOUR SPECIAL SOMEONE</h1>
        <h2>SEARCH BY CITY, PROFESSION &amp; WITHIN THE COMMUNITY</h2>
<form id="searchForm" class="search-box" aria-label="Find your special someone search form">
  <div class="select-group">
    <select id="gender">
      <option value="women" selected>Women</option>
      <option value="men">Men</option>
      <option value="other">Other</option>
    </select>
    <div class="select-label">I'm looking for a</div>
  </div>

  <div class="select-group">
    <select id="ageFrom">
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22" selected>22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      
    </select>
    <div class="select-label">Aged</div>
  </div>

  <div class="to-text">TO</div>

  <div class="select-group">
    <select id="ageTo">
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27" selected>27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      
    </select>
    <div class="select-label">&nbsp;</div>
  </div>

  <!-- City dropdown -->
  <div class="select-group">
    <select id="city">
      <option value="">Select City</option>
      <option value="Lucknow">Lucknow</option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Ahmedabad">Ahmedabad</option>
       <option value="Nagpur">Nagpur</option>
      <option value="Indore">Indore</option>
     
    </select>
    <div class="select-label">City</div>
  </div>

  <!-- Area dropdown (dynamic) -->
  <div class="select-group">
    <select id="area">
      <option value="">Select Area</option>
    </select>
    <div class="select-label">Area</div>
  </div>

  <button type="submit" class="search-btn">SEARCH</button>
</form>
      </div>
    </section> 

    <div
      class="info-bar"
      aria-live="polite"
      aria-atomic="true"
      role="region"
      tabindex="0"
      style="background-color: #002060 ; color: white"
    >
      <span>TOP RATED CONSULTANTS</span>
      <span>5 TIMES HIGHER SUCCESS RATES</span>
      <span>100% PRIVACY</span>
    </div>

   <section class="matrimony-section container py-5" id="matrimony-results">
  <!-- Header Section -->
 <div class="row align-items-center mb-4 g-3">
  <div class="col-md-2 text-end fw-bold text-primary">
    GET MATCHES HERE :
  </div>  

  <!-- BUDDH VIHAR Button -->
  <div class="col-md-2">
    <button class="btn location-btn active w-100" data-location="buddh-vihar">
      <i class="bi bi-geo-alt-fill text-danger"></i> BUDDH VIHAR
    </button>
  </div>

  <!-- BUDDH VIHAR Image -->
  <div class="col-md-2 text-center">
    <div class="location-img-box">
      <img src="./images/loc2.svg" class="img-fluid rounded" alt="Temple" />
    </div>
  </div>

  <!-- AMBEDKAR BHAWAN Button -->
  <div class="col-md-2">
    <button class="btn location-btn w-100" data-location="ambedkar-bhawan">
      <i class="bi bi-geo-alt-fill text-danger"></i> AMBEDKAR BHAWAN
    </button>
  </div>

  <!-- AMBEDKAR Image -->
  <div class="col-md-2 text-center">
    <div class="location-img-box">
      <img src="./images/loc1.svg" class="img-fluid rounded" alt="Ambedkar" />
    </div>
  </div>
</div>

  <!-- CTA Banner -->
  <div class="cta-banner text-center mb-5">
    <span class="fw-bold text-white">YOUR STORY IS WAITING TO HAPPEN!</span>
    <button class="btn btn-outline-light btn-sm ms-3">GET STARTED</button>
  </div>

  <!-- Location Results Container -->
  <div id="location-results">
    <!-- Results will be dynamically inserted here -->
  </div>
</section>

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
          src="./images/joinmomemt-removebg-preview.png"
          alt="Join Movement"
          class="img-fluid"
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Sample data for areas by city
      const cityAreas = {
        'Lucknow': ['Hazrat Ganj', 'Gomti Nagar', 'Indira Nagar', 'Alambagh', 'Chinhat', 'Aliganj', 'Mahanagar', 'Chowk'],
        'Delhi': ['Connaught Place', 'Karol Bagh', 'Lajpat Nagar', 'Saket', 'Dwarka', 'Rohini', 'Janakpuri', 'Pitampura'],
        'Hyderabad': ['Banjara Hills', 'Jubilee Hills', 'HITEC City', 'Secunderabad', 'Kukatpally', 'Gachibowli', 'Begumpet', 'Miyapur'],
        'Ahmedabad': ['Vastrapur', 'Satellite', 'Maninagar', 'Navrangpura', 'Bopal', 'Thaltej', 'Ghatlodia', 'Prahlad Nagar'],
        'Jaipur': ['C-Scheme', 'Malviya Nagar', 'Vaishali Nagar', 'Bani Park', 'Mansarovar', 'Jagatpura', 'Tonk Road', 'Civil Lines'],
        'Nagpur': ['Dharampeth', 'Sadar', 'Sitabuldi', 'Ramdaspeth', 'Wardha Road', 'Manish Nagar', 'Pratap Nagar', 'Hingna'],
        'Indore': ['Vijay Nagar', 'Palasia', 'MG Road', 'Rajwada', 'Sapna Sangeeta', 'Bhawarkuan', 'Scheme No 78', 'AB Road'],
      };

      // Sample profile data
      const profileData = {
        'women': [
          {
            name: 'PRIYA KUMARI',
            age: 24,
            occupation: 'Software Engineer',
            image: './images/girl1.jfif'
          },
          {
            name: 'RUHI VERMA',
            age: 26,
            occupation: 'Teacher',
            image: './images/girl2.jfif'
          },
          {
            name: 'KOMAL RAWAT',
            age: 23,
            occupation: 'Doctor',
            image: './images/girl1.jfif'
          },
          {
            name: 'SNEHA SHARMA',
            age: 25,
            occupation: 'Nurse',
            image: './images/girl2.jfif'
          },
          {
            name: 'KAVITA SINGH',
            age: 27,
            occupation: 'Bank Officer',
            image: './images/girl1.jfif'
          },
          {
            name: 'SUNITA DEVI',
            age: 22,
            occupation: 'Student',
            image: './images/girl2.jfif'
          }
        ],
        'men': [
          {
            name: 'RAHUL KUMAR',
            age: 28,
            occupation: 'Engineer',
            image: './images/profilemen1.jfif'
          },
          {
            name: 'AMIT SINGH',
            age: 30,
            occupation: 'Manager',
            image: './images/profilemen2.jfif'
          },
          {
            name: 'VIJAY VERMA',
            age: 26,
            occupation: 'Doctor',
            image: './images/profilemen1.jfif'
          },
          {
            name: 'SURESH SHARMA',
            age: 29,
            occupation: 'Teacher',
            image: './images/profilemen2.jfif'
          },
          {
            name: 'RAJESH RAWAT',
            age: 31,
            occupation: 'Business',
            image: './images/profilemen1.jfif'
          },
          {
            name: 'DEEPAK DEV',
            age: 27,
            occupation: 'Government Job',
            image: './images/profilemen2.jfif'
          }
        ]
      };

      // Agent data
      const agentData = [
        {
          name: 'ASHUTOSH VERMA',
          age: 35,
          place: 'Lucknow',
          designation: 'Marriage Consultant',
          image: './images/men1.jfif'
        },
        {
          name: 'RAVI KUMAR',
          age: 40,
          place: 'Lucknow',
          designation: 'Community Leader',
          image: './images/men2.jfif'
        }
      ];

      let currentSearchData = {};

      // Update area dropdown based on selected city
      function updateAreas() {
        const citySelect = document.getElementById('city');
        const areaSelect = document.getElementById('area');
        const selectedCity = citySelect.value;

        // Clear existing options
        areaSelect.innerHTML = '<option value="">Select Area</option>';

        if (selectedCity && cityAreas[selectedCity]) {
          cityAreas[selectedCity].forEach(area => {
            const option = document.createElement('option');
            option.value = area;
            option.textContent = area;
            areaSelect.appendChild(option);
          });
        }
      }

      // Filter profiles based on search criteria
      function filterProfiles(gender, ageFrom, ageTo, city, area) {
        const profiles = profileData[gender] || [];
        return profiles.filter(profile => {
          const ageMatch = profile.age >= ageFrom && profile.age <= ageTo;
          return ageMatch; // For now, just filter by age. You can add more filters here
        }).slice(0, 3); // Show only 3 profiles
      }

      // Generate profile HTML
      function generateProfileHTML(profile) {
        return `
          <div class="profile-card d-flex align-items-center mb-3 p-2">
            <img src="${profile.image}" class="profile-img" alt="${profile.name}" />
            <div class="ms-3">
              <h6 class="fw-bold">${profile.name}</h6>
              <p class="mb-0">AGE: ${profile.age}</p>
              <p class="mb-0">OCCUPATION: ${profile.occupation}</p>
            </div>
          </div>
        `;
      }

      // Generate agent HTML
      function generateAgentHTML(agent) {
        return `
          <div class="agent-card text-center p-4">
            <img src="${agent.image}" class="agent-img mb-3" alt="${agent.name}" />
            <h6 class="fw-bold">NAME: ${agent.name}</h6>
            <p class="mb-1">AGE: ${agent.age}</p>
            <p class="mb-1">PLACE: ${agent.place}</p>
            <p class="mb-3">DESIGNATION: ${agent.designation}</p>
            <button class="btn btn-primary w-100 mb-2">CONTACT AGENT</button>
            <div class="verified small">
              <span>BHEEM BHARAT VERIFIED</span>
              <i class="bi bi-check-circle-fill text-primary"></i>
            </div>
          </div>
        `;
      }

      // Generate location results
      function generateLocationResults(searchData, activeLocation) {
        const { gender, ageFrom, ageTo, city, area } = searchData;
        const profiles = filterProfiles(gender, parseInt(ageFrom), parseInt(ageTo), city, area);
        const agent = agentData[Math.floor(Math.random() * agentData.length)];
        
        const locationName = activeLocation === 'buddh-vihar' ? 'BUDDH VIHAR' : 'AMBEDKAR BHAWAN';
        const locationSubname = activeLocation === 'buddh-vihar' ? 'BUDH VIHAR COLONY' : 'AMBEDKAR BHAWAN COLONY';
        const searchArea = area || 'CHINHAT';
        const searchCity = city || 'LUCKNOW';

        let profilesHTML = '';
        profiles.forEach(profile => {
          profilesHTML += generateProfileHTML(profile);
        });

        return `
          <div class="location-block mb-5">
            <h5 class="text-danger fw-bold mb-1">
              <i class="bi bi-geo-alt-fill"></i> ${locationName}
            </h5>
            <p class="text-muted small mb-4 text-uppercase">
  ${locationSubname} ${searchArea} ${searchCity}
</p>

            <div class="row g-4">
              <!-- Left Column -->
              <div class="col-md-6">
                ${profilesHTML}
              </div>

              <!-- Right Column -->
              <div class="col-md-6">
                ${generateAgentHTML(agent)}
              </div>
            </div>
          </div>
        `;
      }

      // Handle search form submission
      function handleSearch(event) {
        event.preventDefault();
        
        const formData = new FormData(event.target);
        const searchData = {
          gender: document.getElementById('gender').value,
          ageFrom: document.getElementById('ageFrom').value,
          ageTo: document.getElementById('ageTo').value,
          city: document.getElementById('city').value,
          area: document.getElementById('area').value
        };

        // Store search data for location switching
        currentSearchData = searchData;

        // Update results for both locations
        updateLocationResults('buddh-vihar');

        // Scroll to results section
        document.getElementById('matrimony-results').scrollIntoView({
          behavior: 'smooth'
        });
      }

      // Update location results
      function updateLocationResults(activeLocation) {
        const resultsContainer = document.getElementById('location-results');
        const html = generateLocationResults(currentSearchData, activeLocation);
        resultsContainer.innerHTML = html;

        // Update active button
        document.querySelectorAll('.location-btn').forEach(btn => {
          btn.classList.remove('active');
        });
        document.querySelector(`[data-location="${activeLocation}"]`).classList.add('active');
      }

      // Handle location button clicks
      function handleLocationSwitch(event) {
        const locationBtn = event.target.closest('.location-btn');
        if (!locationBtn) return;

        const location = locationBtn.getAttribute('data-location');
        updateLocationResults(location);
      }

      // Initialize event listeners
      document.addEventListener('DOMContentLoaded', function() {
        // City change handler
        document.getElementById('city').addEventListener('change', updateAreas);
        
        // Search form handler
        document.getElementById('searchForm').addEventListener('submit', handleSearch);
        
        // Location button handlers
        document.addEventListener('click', handleLocationSwitch);

        // Initialize with default search (optional)
        currentSearchData = {
          gender: 'women',
          ageFrom: '22',
          ageTo: '27',
          city: 'Lucknow',
          area: 'Hazrat Ganj'
        };
      });
    </script>