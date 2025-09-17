<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Property Info</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <style>
    /* Navbar */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 110px;
      padding: 0 40px;
      border-bottom: 1px solid #ddd;
    }
    .logo img {
      height: 60px;
      display: block;
    }
    nav {
      display: flex;
      align-items: center;
    }
    nav a {
      font-weight: 600;
      color: #0014a8;
      margin: 0 20px;
      text-decoration: none;
      font-size: 16px;
    }
    nav a.active {
      border-bottom: 3px solid #0014a8;
      padding-bottom: 5px;
    }

    /* Property Info Page */
    .property-container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: start;
    }
    .property-container img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .property-details h2 {
      color: #0014a8;
      margin-bottom: 10px;
    }
    .property-details p {
      font-size: 16px;
      margin: 6px 0;
      line-height: 1.5;
    }
    .amenities {
      margin-top: 20px;
    }
    .amenities h3 {
      margin-bottom: 10px;
      color: #0014a8;
    }
    .amenities ul {
      list-style: none;
      padding: 0;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
    }
    .amenities li {
      background: #f3f7ff;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      color: #333;
    }
    .random-location {
      margin-top: 25px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background: #fafafa;
      font-size: 15px;
      color: #444;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header>
    <div class="logo">
      <img src="{{ asset('images/logo-removebg-preview.png') }}"/>
    </div>
    <nav>
      <a href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#" class="active">CONTENT</a>
      <a href="#">OTHERS</a>
    </nav>
  </header>

  <!-- Property Content -->
  <div class="property-container">
    <img id="propertyImage" src="{{ asset('images/property1.jpg') }}" alt="Property" />
    <div class="property-details">
      <h2 id="propertyTitle">Property Details</h2>
      <p><strong>Price:</strong> ₹<span id="propertyPrice"></span></p>
      <p><strong>Area:</strong> <span id="propertyArea"></span> SQFT</p>
      <p><strong>Location:</strong> <span id="cityName"></span></p>

      <!-- Amenities -->
      <div class="amenities">
        <h3>Amenities</h3>
        <ul>
          <li>Swimming Pool</li>
          <li>Gym & Fitness Center</li>
          <li>24/7 Security</li>
          <li>Children’s Play Area</li>
          <li>Club House</li>
          <li>Garden & Park</li>
          <li>Power Backup</li>
          <li>Car Parking</li>
        </ul>
      </div>

      <!-- Random Location -->
      <div class="random-location" id="randomLocation">
        📍 Nearby: Location loading...
      </div>
    </div>
  </div>

  <script>
    // Get query params
    const params = new URLSearchParams(window.location.search);
    const img = params.get("img");
    const flatType = params.get("flatType");
    const price = params.get("price");
    const area = params.get("area");
    const city = params.get("city");
    const building = params.get("building");

    // Inject into DOM
    if (img) document.getElementById("propertyImage").src = img;
    if (flatType && building) {
      document.getElementById("propertyTitle").innerText = `${flatType} - ${building}`;
    }
    if (price) document.getElementById("propertyPrice").innerText = price;
    if (area) document.getElementById("propertyArea").innerText = area;
    if (city) document.getElementById("cityName").innerText = city;

    // Predefined localities only from UP, MP, Rajasthan, Maharashtra, Telangana, Delhi
    const cityLocalities = {
      UP: ["Gomti Nagar", "Hazratganj", "Indira Nagar", "Civil Lines", "Aliganj"],
      MP: ["Arera Colony", "Shahpura", "Kolar Road", "Indrapuri", "Old City"],
      Rajasthan: ["Vaishali Nagar", "C-Scheme", "Malviya Nagar", "Mansarovar", "Ajmer Road"],
      Maharashtra: ["Andheri West", "Bandra", "Juhu", "Powai", "Dadar"],
      Telangana: ["Hitech City", "Banjara Hills", "Gachibowli", "Begumpet", "Jubilee Hills"],
      Delhi: ["Connaught Place", "Saket", "Dwarka", "Karol Bagh", "Lajpat Nagar"]
    };

    // Pick random locality
    let locationText = "";
    if (city && cityLocalities[city]) {
      const localities = cityLocalities[city];
      const randomLocality = localities[Math.floor(Math.random() * localities.length)];
      locationText = `${randomLocality}, ${city}`;
    } else {
      locationText = "Nearby location not available for this city";
    }

    document.getElementById("randomLocation").innerText = "📍 Nearby: " + locationText;
  </script>
</body>
</html>
