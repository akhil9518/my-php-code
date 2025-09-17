<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Person Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body { 
      background: #f4f6f9; 
      padding: 100px 20px 40px; /* top padding for fixed navbar */
      font-family: Arial, sans-serif; 
    }
    .profile-box {
      max-width: 700px;
      margin: auto;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 30px;
      text-align: center;
    }
    .profile-box img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #0026d3;
      margin-bottom: 20px;
    }
    h2 { color: #0026d3; }
    .family-info, .extra-info {
      text-align: left;
      margin-top: 20px;
    }
    .info-title {
      font-weight: bold;
      color: #444;
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

  <!-- Person Profile Section -->
  <div class="profile-box">
    <img id="profile-img" src="" alt="Profile">
    <h2 id="profile-name"></h2>
    <p><span id="profile-age"></span> years | <span id="profile-city"></span></p>
    <p><strong>Occupation:</strong> <span id="profile-occupation"></span></p>

    <div class="family-info">
      <h4>👨‍👩‍👧 Family Info</h4>
      <p><span class="info-title">Father:</span> <span id="father-name"></span></p>
      <p><span class="info-title">Mother:</span> <span id="mother-name"></span></p>
    </div>

    <div class="extra-info">
      <h4>✨ Hobbies & Thinking</h4>
      <p><span id="hobbies"></span></p>
      <p><em>"<span id="thinking"></span>"</em></p>
    </div>
  </div>

  <script>
    // Extra info dataset for all profiles
    const extraInfo = {
      // Lucknow - Men
      "Rahul Verma": { father: "Suresh Verma", mother: "Anita Verma", hobbies: "Cricket, Reading, Traveling", thinking: "Live life with passion and purpose." },
      "Amit Singh": { father: "Rakesh Singh", mother: "Sunita Singh", hobbies: "Photography, Cooking", thinking: "Balance is the key to happiness." },
      "Deepak Yadav": { father: "Mohan Yadav", mother: "Rekha Yadav", hobbies: "Gym, Music", thinking: "Health is wealth." },
      "Saurabh Mishra": { father: "Vijay Mishra", mother: "Geeta Mishra", hobbies: "Chess, Writing", thinking: "Knowledge is power." },
      "Vikas Shukla": { father: "Arun Shukla", mother: "Sarita Shukla", hobbies: "Traveling, Blogging", thinking: "Explore the world, learn every day." },

      // Lucknow - Women
      "Priya Sharma": { father: "Rajesh Sharma", mother: "Sunita Sharma", hobbies: "Dancing, Reading, Traveling", thinking: "I believe in positivity and hard work." },
      "Neha Gupta": { father: "Anil Gupta", mother: "Meena Gupta", hobbies: "Cooking, Painting", thinking: "Family and career both matter equally." },
      "Shweta Singh": { father: "Vikram Singh", mother: "Rita Singh", hobbies: "Yoga, Gardening", thinking: "Stay grounded, aim high." },
      "Ankita Yadav": { father: "Manoj Yadav", mother: "Kiran Yadav", hobbies: "Coding, Hiking", thinking: "Innovation drives progress." },
      "Kavita Mishra": { father: "Sanjay Mishra", mother: "Poonam Mishra", hobbies: "Reading, Debating", thinking: "Justice and truth always prevail." },

      // Jaipur - Men
      "Arjun Meena": { father: "Ramesh Meena", mother: "Lalita Meena", hobbies: "Cycling, Sketching", thinking: "Hard work shapes the future." },
      "Rohit Sharma": { father: "Vijay Sharma", mother: "Anju Sharma", hobbies: "Cooking, Traveling", thinking: "Life is a journey, enjoy every moment." },
      "Nitin Jain": { father: "Suresh Jain", mother: "Neeta Jain", hobbies: "Chess, Reading", thinking: "Success comes with persistence." },
      "Lokesh Saini": { father: "Mohan Saini", mother: "Kamla Saini", hobbies: "Swimming, Music", thinking: "Stay healthy, stay happy." },
      "Mohit Agarwal": { father: "Rakesh Agarwal", mother: "Sunita Agarwal", hobbies: "Photography, Trekking", thinking: "Capture moments, live fully." },

      // Jaipur - Women
      "Anjali Sharma": { father: "Ajay Sharma", mother: "Rekha Sharma", hobbies: "Sewing, Painting", thinking: "Creativity fuels the soul." },
      "Ritika Jain": { father: "Sanjay Jain", mother: "Poonam Jain", hobbies: "Reading, Yoga", thinking: "Inner peace is true wealth." },
      "Sonam Gupta": { father: "Vinod Gupta", mother: "Meera Gupta", hobbies: "Coding, Dancing", thinking: "Technology and art go hand in hand." },
      "Pooja Agarwal": { father: "Ravi Agarwal", mother: "Suman Agarwal", hobbies: "Music, Gardening", thinking: "Care for others, care for nature." },
      "Meera Saini": { father: "Hari Saini", mother: "Kamla Saini", hobbies: "Reading, Traveling", thinking: "Life is an adventure." },

      // Bhopal - Men
      "Rohit Verma": { father: "Mahesh Verma", mother: "Anita Verma", hobbies: "Cricket, Sketching", thinking: "Dream big, work hard." },
      "Sandeep Patel": { father: "Dinesh Patel", mother: "Sunita Patel", hobbies: "Chess, Reading", thinking: "Knowledge is the foundation of success." },
      "Manish Sharma": { father: "Rakesh Sharma", mother: "Geeta Sharma", hobbies: "Coding, Hiking", thinking: "Innovation drives change." },
      "Ankit Singh": { father: "Vijay Singh", mother: "Rekha Singh", hobbies: "Swimming, Music", thinking: "Health is the key to happiness." },
      "Vivek Jain": { father: "Suresh Jain", mother: "Neeta Jain", hobbies: "Photography, Traveling", thinking: "Explore the world, live fully." },

      // Bhopal - Women
      "Pooja Sharma": { father: "Rajesh Sharma", mother: "Sunita Sharma", hobbies: "Dancing, Reading, Traveling", thinking: "I believe in positivity and hard work." },
      "Sneha Patel": { father: "Mohan Patel", mother: "Kiran Patel", hobbies: "Painting, Yoga", thinking: "Art and mindfulness bring peace." },
      "Kriti Singh": { father: "Arun Singh", mother: "Rita Singh", hobbies: "Fashion Design, Blogging", thinking: "Creativity is my passion." },
      "Neha Jain": { father: "Sanjay Jain", mother: "Poonam Jain", hobbies: "Coding, Reading", thinking: "Technology shapes the future." },
      "Ankita Gupta": { father: "Vinod Gupta", mother: "Meera Gupta", hobbies: "Debating, Traveling", thinking: "Knowledge and experiences define us." }
    };

    const params = new URLSearchParams(window.location.search);
    const name = params.get("name");

    // Retrieve profiles from localStorage
    const profiles = JSON.parse(localStorage.getItem("profiles") || "[]");
    const person = profiles.find(p => p.name === name);

    if (person) {
      document.getElementById("profile-img").src = person.img;
      document.getElementById("profile-name").textContent = person.name;
      document.getElementById("profile-age").textContent = person.age;
      document.getElementById("profile-city").textContent = `${person.city}, ${person.area}`;
      document.getElementById("profile-occupation").textContent = person.occupation;

      if (extraInfo[name]) {
        document.getElementById("father-name").textContent = extraInfo[name].father;
        document.getElementById("mother-name").textContent = extraInfo[name].mother;
        document.getElementById("hobbies").textContent = extraInfo[name].hobbies;
        document.getElementById("thinking").textContent = extraInfo[name].thinking;
      } else {
        // Fallback if extra info is missing
        document.getElementById("father-name").textContent = "Not available";
        document.getElementById("mother-name").textContent = "Not available";
        document.getElementById("hobbies").textContent = "Not available";
        document.getElementById("thinking").textContent = "Not available";
      }
    } else {
      // Handle case where person is not found
      document.querySelector(".profile-box").innerHTML = "<p class='text-center text-danger'>Profile not found.</p>";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>