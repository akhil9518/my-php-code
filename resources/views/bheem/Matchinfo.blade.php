<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Matrimonial Matches</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      background: #f4f6f9; 
      padding-top: 100px; /* space for fixed navbar */
    }

    .profile-card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
      display: flex;
      align-items: center;
    }
    .profile-card:hover {
      transform: translateY(-4px);
    }
    .profile-card img {
      width: 110px;
      height: 110px;
      border-radius: 50%;
      margin-right: 20px;
      object-fit: cover;
      border: 3px solid #0026d3;
    }
    .profile-info strong { 
      font-size: 20px; 
      display: block; 
      color: #0026d3;
    }
    .profile-info span {
      font-size: 15px;
      color: #333;
    }

    /* Navbar styling */
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
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../images/logo-removebg-preview.png" alt="Bheem Bharat Logo"/>
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

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/realestate">Real Estate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/matrimoianl-info">Matrimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/content">Content</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">OTHERS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <h2 class="mt-4 mb-4 text-center text-primary">💍 Your Perfect Matches</h2>
    <div id="matches"></div>
  </div>

<script>
  const params = new URLSearchParams(window.location.search);
  const gender = params.get("gender") || "";
  const ageFrom = params.get("ageFrom") || "0";
  const ageTo = params.get("ageTo") || "100";
  const city = params.get("city") || "";
  const area = params.get("area") || "";

  // Profiles (expanded with proper cities & areas)
  const profiles = [
    // 🔹 Lucknow
    { name: "Rahul Verma", age: 26, gender: "men", city: "Lucknow", area: "Hazratganj", occupation: "Software Engineer", img: "https://randomuser.me/api/portraits/men/1.jpg" },
    { name: "Amit Singh", age: 28, gender: "men", city: "Lucknow", area: "Aliganj", occupation: "Bank Manager", img: "https://randomuser.me/api/portraits/men/2.jpg" },
    { name: "Deepak Yadav", age: 27, gender: "men", city: "Lucknow", area: "Indira Nagar", occupation: "Doctor", img: "https://randomuser.me/api/portraits/men/3.jpg" },
    { name: "Saurabh Mishra", age: 25, gender: "men", city: "Lucknow", area: "Gomti Nagar", occupation: "Chartered Accountant", img: "https://randomuser.me/api/portraits/men/4.jpg" },
    { name: "Vikas Shukla", age: 29, gender: "men", city: "Lucknow", area: "Alambagh", occupation: "Entrepreneur", img: "https://randomuser.me/api/portraits/men/5.jpg" },

    { name: "Priya Sharma", age: 24, gender: "women", city: "Lucknow", area: "Hazratganj", occupation: "Teacher", img: "https://randomuser.me/api/portraits/women/1.jpg" },
    { name: "Neha Gupta", age: 25, gender: "women", city: "Lucknow", area: "Aliganj", occupation: "Fashion Designer", img: "https://randomuser.me/api/portraits/women/2.jpg" },
    { name: "Shweta Singh", age: 26, gender: "women", city: "Lucknow", area: "Indira Nagar", occupation: "Doctor", img: "https://randomuser.me/api/portraits/women/3.jpg" },
    { name: "Ankita Yadav", age: 27, gender: "women", city: "Lucknow", area: "Gomti Nagar", occupation: "Software Developer", img: "https://randomuser.me/api/portraits/women/4.jpg" },
    { name: "Kavita Mishra", age: 28, gender: "women", city: "Lucknow", area: "Alambagh", occupation: "Lawyer", img: "https://randomuser.me/api/portraits/women/5.jpg" },

    // 🔹 Jaipur
    { name: "Arjun Meena", age: 27, gender: "men", city: "Jaipur", area: "Malviya Nagar", occupation: "Civil Engineer", img: "https://randomuser.me/api/portraits/men/6.jpg" },
    { name: "Rohit Sharma", age: 28, gender: "men", city: "Jaipur", area: "Vaishali Nagar", occupation: "Hotel Manager", img: "https://randomuser.me/api/portraits/men/7.jpg" },
    { name: "Nitin Jain", age: 26, gender: "men", city: "Jaipur", area: "Mansarovar", occupation: "Businessman", img: "https://randomuser.me/api/portraits/men/8.jpg" },
    { name: "Lokesh Saini", age: 29, gender: "men", city: "Jaipur", area: "C-Scheme", occupation: "Doctor", img: "https://randomuser.me/api/portraits/men/9.jpg" },
    { name: "Mohit Agarwal", age: 25, gender: "men", city: "Jaipur", area: "Jhotwara", occupation: "Bank Officer", img: "https://randomuser.me/api/portraits/men/10.jpg" },

    { name: "Anjali Sharma", age: 24, gender: "women", city: "Jaipur", area: "Malviya Nagar", occupation: "Fashion Designer", img: "https://randomuser.me/api/portraits/women/6.jpg" },
    { name: "Ritika Jain", age: 26, gender: "women", city: "Jaipur", area: "Vaishali Nagar", occupation: "Teacher", img: "https://randomuser.me/api/portraits/women/7.jpg" },
    { name: "Sonam Gupta", age: 25, gender: "women", city: "Jaipur", area: "Mansarovar", occupation: "Software Developer", img: "https://randomuser.me/api/portraits/women/8.jpg" },
    { name: "Pooja Agarwal", age: 27, gender: "women", city: "Jaipur", area: "C-Scheme", occupation: "Doctor", img: "https://randomuser.me/api/portraits/women/9.jpg" },
    { name: "Meera Saini", age: 28, gender: "women", city: "Jaipur", area: "Jhotwara", occupation: "Banker", img: "https://randomuser.me/api/portraits/women/10.jpg" },

    // 🔹 Bhopal
    { name: "Rohit Verma", age: 27, gender: "men", city: "Bhopal", area: "Arera Colony", occupation: "Civil Engineer", img: "https://randomuser.me/api/portraits/men/21.jpg" },
    { name: "Sandeep Patel", age: 28, gender: "men", city: "Bhopal", area: "MP Nagar", occupation: "Chartered Accountant", img: "https://randomuser.me/api/portraits/men/22.jpg" },
    { name: "Manish Sharma", age: 26, gender: "men", city: "Bhopal", area: "Kolar Road", occupation: "Software Developer", img: "https://randomuser.me/api/portraits/men/23.jpg" },
    { name: "Ankit Singh", age: 29, gender: "men", city: "Bhopal", area: "Shahpura", occupation: "Doctor", img: "https://randomuser.me/api/portraits/men/24.jpg" },
    { name: "Vivek Jain", age: 25, gender: "men", city: "Bhopal", area: "TT Nagar", occupation: "Bank Manager", img: "https://randomuser.me/api/portraits/men/25.jpg" },

    { name: "Pooja Sharma", age: 24, gender: "women", city: "Bhopal", area: "Arera Colony", occupation: "Teacher", img: "https://randomuser.me/api/portraits/women/21.jpg" },
    { name: "Sneha Patel", age: 26, gender: "women", city: "Bhopal", area: "MP Nagar", occupation: "Doctor", img: "https://randomuser.me/api/portraits/women/22.jpg" },
    { name: "Kriti Singh", age: 25, gender: "women", city: "Bhopal", area: "Kolar Road", occupation: "Fashion Designer", img: "https://randomuser.me/api/portraits/women/23.jpg" },
    { name: "Neha Jain", age: 27, gender: "women", city: "Bhopal", area: "Shahpura", occupation: "Software Engineer", img: "https://randomuser.me/api/portraits/women/24.jpg" },
    { name: "Ankita Gupta", age: 28, gender: "women", city: "Bhopal", area: "TT Nagar", occupation: "Lawyer", img: "https://randomuser.me/api/portraits/women/25.jpg" },
  ];

  // Store profiles in localStorage
  localStorage.setItem("profiles", JSON.stringify(profiles));

  const matchList = document.getElementById("matches");

  // Filtering based on query params
  const filtered = profiles.filter(p =>
    (!gender || p.gender === gender) &&
    (!ageFrom || p.age >= parseInt(ageFrom)) &&
    (!ageTo || p.age <= parseInt(ageTo)) &&
    (!city || p.city === city) &&
    (!area || p.area === area)
  );

  if (filtered.length === 0) {
    matchList.innerHTML = "<p class='text-center text-danger'>No matches found. Try changing your filters.</p>";
  } else {
    filtered.forEach(p => {
      const card = document.createElement("div");
      card.className = "profile-card";
      card.style.cursor = "pointer"; // make clickable
      card.innerHTML = `
        <img src="${p.img}" alt="${p.name}">
        <div class="profile-info">
          <strong>${p.name}</strong>
          <span>Age: ${p.age}</span><br>
          <span>City: ${p.city}, ${p.area}</span><br>
          <span>Occupation: ${p.occupation}</span>
        </div>
      `;

      // Redirect on click with query params
      card.addEventListener("click", () => {
        window.location.href = `/person-info?name=${encodeURIComponent(p.name)}`;
      });

      matchList.appendChild(card);
    });
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>