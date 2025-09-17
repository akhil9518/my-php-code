<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bheem Bharat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    /* Header */
    .logo img {
      height: 60px;
    }
    nav a {
      font-weight: 600;
      color: #0014a8;
      margin: 0 15px;
      text-decoration: none;
    }
    nav a.active {
      border-bottom: 3px solid #0014a8;
      padding-bottom: 5px;
    }

    /* Section heading */
    .journey-title {
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      margin: 20px 0;
      color: #0014a8;
    }
    .journey-title span {
      color: red;
    }

    /* Search Bar */
    .search-bar {
      border: 2px solid #555;
      border-radius: 40px;
      padding: 8px 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 900px;
      margin: 20px auto;
      background: #fff;
      position: relative;
    }
    .search-input {
      background: #f8c9c9;
      border: none;
      border-radius: 20px;
      padding: 6px 12px;
      margin: 0 6px;
      font-weight: bold;
      color: navy;
      flex: none; /* prevent stretching */
    }
    /* specific widths for balance */
    .search-input.city { width: 140px; }
    .search-input.bhk { width: 100px; }
    .search-input.price { width: 110px; }

    .search-btn {
      background: red;
      color: #fff;
      font-weight: bold;
      border-radius: 25px;
      padding: 8px 18px;
      border: none;
      margin-left: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .search-chip {
      background: #f9b4b4;
      color: #0014a8;
      font-weight: 600;
      border-radius: 20px;
      padding: 6px 15px;
      margin-left: 8px;
      border: none;
    }
    .search-divider {
      width: 2px;
      background: #ccc;
      height: 30px;
      margin: 0 15px;
    }

    /* Dropdown */
    .dropdown-list {
      position: absolute;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 5px;
      display: none;
      z-index: 10;
    }
    .dropdown-list div {
      padding: 8px;
      cursor: pointer;
    }
    .dropdown-list div:hover {
      background: #f0f0f0;
    }

    /* Info text */
    .info-text {
      text-align: center;
      font-weight: bold;
      margin: 20px 0;
    }

    /* Featured projects */
    .featured-title {
      font-size: 18px;
      font-weight: bold;
      margin: 20px 0 10px;
      color: #000;
    }
    .featured-title span {
      border-bottom: 3px solid #0014a8;
      padding-bottom: 2px;
    }
    .project-card {
      border: 1px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
    }
    .project-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }
    .project-info {
      padding: 8px;
      font-size: 14px;
    }
    .project-info strong {
      color: #0014a8;
    }
    .contact-btn {
      background: red;
      color: #fff;
      border-radius: 20px;
      border: none;
      padding: 6px 15px;
      font-weight: bold;
      font-size: 13px;
      position: absolute;
      right: 10px;
      top: 10px;
    }
    .project-link {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="d-flex justify-content-between align-items-center p-3 border-bottom" style="height: 110px;">
    <div class="logo">
      <img src="../images/logo-removebg-preview.png"/>
    </div>
    <nav>
      <a href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#" class="active">CONTENT</a>
      <a href="#">OTHERS</a>
    </nav>
  </header>

  <!-- Journey Section -->
  <div class="journey-title">
    START YOUR <span>#GHARDWAAR</span> JOURNEY
  </div>

  <!-- Tabs -->
  <div class="text-center mb-3">
    <a href="#" class="mx-2">BUY</a>
    <a href="#" class="mx-2 active">RENT</a>
    <a href="#" class="mx-2">NEW PROJECTS</a>
    <a href="#" class="mx-2">PG</a>
    <a href="#" class="mx-2">PLOT</a>
    <a href="#" class="mx-2">COMMERCIAL</a>
  </div>

  <!-- Search Bar -->
  <div class="search-bar position-relative d-flex align-items-center">
    <!-- City -->
    <i class="fa fa-map-marker-alt text-danger fs-5 me-2"></i>
    <input type="text" id="selected-city" placeholder="City" class="search-chip city" />
    <div id="city-dropdown" class="dropdown-list"></div>

    <!-- BHK -->
    <i class="fa fa-home text-danger fs-5 ms-3 me-2"></i>
    <input type="text" id="flat-type" value="1 BHK" class="search-chip bhk" />

    <!-- Divider -->
    <div class="search-divider mx-3"></div>

    <!-- Budget -->
    <i class="fa fa-indian-rupee-sign text-danger fs-5 me-2"></i>
    <input type="text" id="budget" value="10000" class="search-chip price" />

    <!-- Search Button -->
    <button class="search-btn ms-3" id="search-btn">
      <i class="fa fa-search"></i> SEARCH
    </button>
  </div>

  <!-- Info -->
  <p class="info-text text-center" id="info-text">
    BECAUSE YOU SEARCHED LUCKNOW <br>
    POST <span style="color:red">#FREE</span> PROPERTY AD
  </p>

  <!-- Featured Projects -->
  <div class="container">
    <div class="featured-title"><span>FEATURED PROJECTS</span></div>
    <div class="row g-3" id="projects-container"></div>
  </div>

  <script>
    window.onload = function () {
      // Map states to their main cities
      const stateCityMap = {
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad"],
        "Delhi": ["Delhi", "New Delhi", "Dwarka"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Varanasi"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Udaipur"],
        "Madhya Pradesh": ["Bhopal", "Indore", "Gwalior"],
      };

      // Read ?state=... from URL
      const urlParams = new URLSearchParams(window.location.search);
      const state = urlParams.get("state");

      // DOM elements
      const cityInput = document.getElementById("selected-city");
      const dropdown = document.getElementById("city-dropdown");
      const infoText = document.getElementById("info-text");
      const projectsContainer = document.getElementById("projects-container");
      const flatTypeInput = document.getElementById("flat-type");
      const budgetInput = document.getElementById("budget");

      // Function to render projects
      function renderProjects(flatType, budget, city) {
        projectsContainer.innerHTML = "";

        // Example logic: property count depends on BHK type
        let count = flatType.includes("1") ? 2 : flatType.includes("2") ? 3 : 1;

        const buildingNames = [
          "Sunrise Towers",
          "Green Valley Apartments",
          "Royal Residency",
          "Skyline Heights",
          "Maple Garden",
          "Pearl Plaza",
          "Elite Enclave",
          "Silver Oaks"
        ];

        for (let i = 1; i <= count; i++) {
          const randomBuilding = buildingNames[Math.floor(Math.random() * buildingNames.length)];
          const col = document.createElement("div");
          col.className = "col-md-4 position-relative";
          col.innerHTML = `
            <a href="property-info?flatType=${encodeURIComponent(flatType)}&price=${parseInt(budget) + i * 2000}&area=${1200 + i * 100}&city=${encodeURIComponent(city)}&building=${encodeURIComponent(randomBuilding)}" class="project-link">
              <div class="project-card">
                <img src="../images/property${i}.jpg" alt="Project" />
                <div class="project-info">
                  <strong>${flatType}</strong> | ₹${(parseInt(budget) + i * 2000).toLocaleString()} | ${1200 + i * 100} SQFT <br>
                  <span style="color:green">${city}</span> - ${randomBuilding}
                </div>
              </div>
              <button class="contact-btn">CONTACT AGENTS</button>
            </a>
          `;
          projectsContainer.appendChild(col);
        }
      }

      // Autofill on load
      if (state && stateCityMap[state]) {
        const defaultCity = stateCityMap[state][0];
        cityInput.value = defaultCity;
        flatTypeInput.value = "1 BHK";
        budgetInput.value = "10000";

        infoText.innerHTML = `BECAUSE YOU SEARCHED <span style="color:red">${defaultCity.toUpperCase()}</span><br>
           POST <span style="color:red">#FREE</span> PROPERTY AD`;

        // Auto-show properties immediately
        renderProjects(flatTypeInput.value, budgetInput.value, defaultCity);
      }

      // City dropdown (editable)
      cityInput.addEventListener("input", () => {
        const cities = stateCityMap[state] || [];
        dropdown.innerHTML = "";
        if (cityInput.value.trim()) {
          cities.forEach(city => {
            if (city.toLowerCase().includes(cityInput.value.toLowerCase())) {
              const div = document.createElement("div");
              div.textContent = city;
              div.onclick = () => {
                cityInput.value = city;
                dropdown.style.display = "none";
              };
              dropdown.appendChild(div);
            }
          });
          dropdown.style.display = "block";
        } else {
          dropdown.style.display = "none";
        }
      });

      // Search button logic (re-render projects based on new input)
      document.getElementById("search-btn").onclick = function () {
        const flatType = flatTypeInput.value.trim();
        const budget = budgetInput.value.trim();
        const city = cityInput.value.trim() || (stateCityMap[state] ? stateCityMap[state][0] : "Unknown");

        infoText.innerHTML = `BECAUSE YOU SEARCHED <span style="color:red">${city.toUpperCase()}</span><br>
           POST <span style="color:red">#FREE</span> PROPERTY AD`;

        renderProjects(flatType, budget, city);
      };
    };
  </script>
</body>
</html>