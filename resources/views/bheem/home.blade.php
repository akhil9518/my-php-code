<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bheem Bharat - Dynamic</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS Animation Library -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #001f66 0%, #002080 50%, #001f66 100%);
      color: white;
      font-family: 'Arial', sans-serif;
      padding-top: 80px;
      overflow-x: hidden;
    }

    /* Animated Background Particles */
    .particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .particle {
      position: absolute;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite;
    }

    .particle:nth-child(1) { width: 4px; height: 4px; top: 20%; left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { width: 6px; height: 6px; top: 60%; left: 20%; animation-delay: 2s; }
    .particle:nth-child(3) { width: 3px; height: 3px; top: 40%; left: 80%; animation-delay: 4s; }
    .particle:nth-child(4) { width: 5px; height: 5px; top: 80%; left: 70%; animation-delay: 1s; }
    .particle:nth-child(5) { width: 4px; height: 4px; top: 30%; left: 60%; animation-delay: 3s; }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.7; }
      50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
    }

    /* Enhanced Navbar */
    .navbar {
      padding: 1rem 2rem;
      background: rgba(0, 31, 102, 0.95) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
      z-index: 1030;
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      background: rgba(0, 31, 102, 1) !important;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
    }

    .navbar-nav .nav-link {
      color: white !important;
      font-weight: bold;
      margin: 0 10px;
      position: relative;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background: #ffb100;
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .navbar-nav .nav-link:hover::after {
      width: 100%;
    }

    .navbar-nav .nav-link:hover {
      color: #ffb100 !important;
      transform: translateY(-2px);
    }

    .navbar-brand img {
      height: 50px;
      transition: transform 0.3s ease;
    }

    .navbar-brand:hover img {
      transform: scale(1.1) rotate(5deg);
    }

    .tagline {
      font-size: 18px;
      font-weight: 400;
      color: white;
      margin-top: 5px;
      opacity: 0.8;
    }

    /* Hero Section Animations */
    .hero {
      padding: 60px 18px;
      min-height: 80vh;
      display: flex;
      align-items: center;
    }

    .hero h2 {
      font-size: 18px;
      font-weight: 400;
      margin-bottom: 20px;
    }

    .connecting-text {
      font-size: 55px;
      font-weight: 600;
      background: linear-gradient(45deg, #fff, #ffb100, #fff);
      background-size: 200% 200%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: gradientShift 3s ease-in-out infinite;
    }

    @keyframes gradientShift {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .hero h1 {
      font-size: 70px;
      font-weight: 800;
      line-height: 1.3;
      animation: slideInUp 1s ease-out;
    }

    .hero h1 span {
      color: #ff6b6b;
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .download-btn {
      margin-top: 20px;
      padding: 15px 30px;
      border-radius: 50px;
      background: linear-gradient(45deg, #fff, #ffb100);
      color: #001f66;
      font-weight: bold;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(255, 177, 0, 0.4);
      position: relative;
      overflow: hidden;
    }

    .download-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
      transition: left 0.5s;
    }

    .download-btn:hover::before {
      left: 100%;
    }

    .download-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(255, 177, 0, 0.6);
    }

    /* Map */
    .map-img {
      position: relative;
      z-index: 2;
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
      z-index: 3;
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

    .orange-circle {
      position: absolute;
      top: 9%;
      right: 16%;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, #ffb100, #ff9500);
      border-radius: 50%;
      z-index: 1;
      animation: circleFloat 4s ease-in-out infinite;
    }

    @keyframes circleFloat {
      0%, 100% { transform: translateY(0px) scale(1); }
      50% { transform: translateY(-20px) scale(1.1); }
    }

    /* About Section */
    .about-section {
      background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
      color: #001f66;
      padding: 80px 20px;
      position: relative;
      overflow: hidden;
    }

    .about-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(90deg, #001f66, #ffb100, #001f66);
      animation: lineMove 3s linear infinite;
    }

    @keyframes lineMove {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    .about-section h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #001f66;
      position: relative;
    }

    .about-section h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 4px;
      background: #ffb100;
      border-radius: 2px;
      animation: expandLine 1.5s ease-out;
    }

    @keyframes expandLine {
      from { width: 0; }
      to { width: 60px; }
    }

    .about-section p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #001f66;
      opacity: 0.9;
    }

    .about-img {
      max-width: 410px;
      transition: transform 0.3s ease;
    }

    .about-img:hover {
      transform: scale(1.05) rotate(2deg);
    }

    /* How It Works Section */
    .how-section {
      background: linear-gradient(135deg, #fff 0%, #f0f8ff 100%);
      color: #001f66;
      padding: 80px 20px;
    }

    .how-section h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 30px;
      color: #001f66;
      position: relative;
    }

    .how-section ul {
      padding: 0;
      list-style: none;
    }

    .how-section ul li {
      font-size: 18px;
      margin-bottom: 20px;
      color: #001f66;
      padding-left: 30px;
      position: relative;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .how-section ul li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      background: linear-gradient(45deg, #001f66, #ffb100);
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .how-section ul li:hover {
      transform: translateX(10px);
      color: #0026d3;
    }

    .how-section ul li:hover::before {
      transform: translateY(-50%) scale(1.2);
    }

    .how-img {
      width: 550px;
      transition: all 0.3s ease;
    }

    .how-img:hover {
      transform: scale(1.1);
    }

    /* Why Choose Section */
    .why-section {
      background: linear-gradient(135deg, #001f66 0%, #002080 50%, #001f66 100%);
      padding: 80px 20px;
      position: relative;
      overflow: hidden;
    }

    .why-section::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255, 177, 0, 0.1) 0%, transparent 70%);
      animation: rotateBackground 20s linear infinite;
    }

    @keyframes rotateBackground {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .why-section h2 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
      position: relative;
      z-index: 2;
    }

    .why-list {
      padding-left: 0;
      list-style: none;
      position: relative;
      z-index: 2;
    }

    .why-list li {
      font-size: 16px;
      margin-bottom: 12px;
      line-height: 1.6;
      padding-left: 25px;
      position: relative;
      opacity: 0;
      animation: fadeInUp 0.6s ease-out forwards;
    }

    .why-list li:nth-child(1) { animation-delay: 0.1s; }
    .why-list li:nth-child(2) { animation-delay: 0.2s; }
    .why-list li:nth-child(3) { animation-delay: 0.3s; }
    .why-list li:nth-child(4) { animation-delay: 0.4s; }
    .why-list li:nth-child(5) { animation-delay: 0.5s; }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .why-list li::before {
      content: '✓';
      position: absolute;
      left: 0;
      top: 0;
      color: #ffb100;
      font-weight: bold;
      font-size: 18px;
      animation: checkmark 0.5s ease-out;
    }

    @keyframes checkmark {
      from { transform: scale(0) rotate(0deg); }
      to { transform: scale(1) rotate(360deg); }
    }

    .why-img-wrapper {
      display: inline-block;
      position: relative;
      z-index: 2;
    }

    .why-img {
      max-width: 330px;
      display: block;
      border-radius: 49px;
      outline: 10px solid #fff;
      outline-offset: -39px;
      transition: all 0.3s ease;
      filter: brightness(1.1);
    }

    .why-img:hover {
      transform: scale(1.05);
      outline-color: #ffb100;
      filter: brightness(1.2);
    }

    /* Join Section */
    .join-section {
      padding: 120px 0 80px;
      background: linear-gradient(135deg, #fff 0%, #f8f9ff 50%, #fff 100%);
      position: relative;
      overflow: hidden;
    }

    .join-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(0,31,102,0.05)"/><circle cx="75" cy="75" r="1" fill="rgba(255,177,0,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
      pointer-events: none;
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
      background: linear-gradient(45deg, #002060, #0026d3, #002060);
      background-size: 200% 200%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: textGradient 4s ease-in-out infinite;
    }

    @keyframes textGradient {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .headline .circle {
      position: absolute;
      top: 10px;
      right: -60px;
      width: 150px;
      height: 150px;
      background: radial-gradient(circle, #ffb100, #ff9500);
      border-radius: 50%;
      z-index: 1;
      animation: bounceCircle 3s ease-in-out infinite;
    }

    @keyframes bounceCircle {
      0%, 100% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(1.1) rotate(180deg); }
    }

    .join-text p {
      margin: 20px 0;
      font-size: 18px;
      color: #0026d3;
      position: relative;
    }

    .join-text ul {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }

    .join-text ul li {
      font-size: 24px;
      margin-bottom: 15px;
      color: #0026d3;
      position: relative;
      padding-left: 40px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .join-text ul li::before {
      content: "→";
      color: #ffb100;
      font-size: 22px;
      position: absolute;
      left: 0;
      top: 0;
      transition: all 0.3s ease;
    }

    .join-text ul li:hover {
      transform: translateX(10px);
      color: #001f66;
    }

    .join-text ul li:hover::before {
      transform: translateX(5px) scale(1.2);
    }

    .join-text .bottom-line {
      font-weight: 700;
      font-size: 20px;
      margin-top: 20px;
      color: #0026d3;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .join-img {
      border: 6px solid #002060;
      border-radius: 20px;
      overflow: hidden;
      max-width: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .join-img:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    /* Register Section */
    .register-section {
      padding: 120px 20px 60px;
      background: linear-gradient(135deg, #001d80 0%, #002080 50%, #001d80 100%);
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .register-section::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: repeating-conic-gradient(from 0deg, transparent 0deg 10deg, rgba(255, 177, 0, 0.1) 10deg 20deg);
      animation: rotatePattern 30s linear infinite;
    }

    @keyframes rotatePattern {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .register-section h1 {
      font-size: 72px;
      font-weight: 900;
      line-height: 1.2;
      position: relative;
      z-index: 2;
      text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
      animation: titleGlow 3s ease-in-out infinite;
    }

    @keyframes titleGlow {
      0%, 100% { text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3); }
      50% { text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3), 0 0 20px rgba(255, 177, 0, 0.5); }
    }

    .register-section p {
      font-size: 18px;
      margin-top: 15px;
      margin-bottom: 30px;
      position: relative;
      z-index: 2;
      opacity: 0.9;
    }

    .btn-register {
      background: linear-gradient(45deg, #fff, #ffb100);
      color: #001d80;
      font-weight: 700;
      padding: 15px 50px;
      border-radius: 50px;
      border: none;
      font-size: 18px;
      transition: all 0.3s ease;
      position: relative;
      z-index: 2;
      box-shadow: 0 8px 25px rgba(255, 177, 0, 0.4);
      overflow: hidden;
    }

    .btn-register::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
      transition: left 0.5s;
    }

    .btn-register:hover::before {
      left: 100%;
    }

    .btn-register:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 12px 35px rgba(255, 177, 0, 0.6);
    }

    .bottom-bar {
      background: linear-gradient(45deg, #fff, #f0f8ff);
      color: #001d80;
      font-weight: 700;
      font-size: 18px;
      border-radius: 50px;
      padding: 20px 40px;
      margin: 50px auto 0;
      display: inline-block;
      min-width: 80%;
      position: relative;
      z-index: 2;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .bottom-bar:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    /* Scroll to Top Button */
    .scroll-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: linear-gradient(45deg, #ffb100, #ff9500);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      opacity: 0;
      visibility: hidden;
      z-index: 1000;
      box-shadow: 0 4px 15px rgba(255, 177, 0, 0.4);
    }

    .scroll-to-top.show {
      opacity: 1;
      visibility: visible;
    }

    .scroll-to-top:hover {
      transform: translateY(-5px) scale(1.1);
      box-shadow: 0 8px 25px rgba(255, 177, 0, 0.6);
    }

    /* Loading Animation */
    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #001f66, #002080);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: opacity 0.5s ease;
    }

    .loading-spinner {
      width: 60px;
      height: 60px;
      border: 4px solid rgba(255, 177, 0, 0.3);
      border-left: 4px solid #ffb100;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Authentication Modal Styling */
    .auth-modal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .auth-modal.show {
      opacity: 1;
      visibility: visible;
    }

    .auth-modal .modal-content {
      background: white;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
      position: relative;
    }

    .auth-modal .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 24px;
      cursor: pointer;
      color: #001f66;
    }

    .auth-modal h2 {
      color: #001f66;
      margin-bottom: 20px;
      text-align: center;
    }

    .auth-modal .form-group {
      margin-bottom: 15px;
    }

    .auth-modal label {
      color: #001f66;
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .auth-modal input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .auth-modal button {
      width: 100%;
      padding: 10px;
      background: linear-gradient(45deg, #ffb100, #ff9500);
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .auth-modal button:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 177, 0, 0.4);
    }

    .auth-modal .switch-auth {
      text-align: center;
      margin-top: 15px;
      color: #001f66;
    }

    .auth-modal .switch-auth a {
      color: #0026d3;
      text-decoration: none;
      font-weight: bold;
    }

    .auth-modal .switch-auth a:hover {
      text-decoration: underline;
    }

    /* Responsive Enhancements */
    @media (max-width: 991px) {
      body {
        padding-top: 140px;
      }
      
      .hero {
        text-align: center;
        padding: 40px 20px;
      }
      
      .connecting-text {
        font-size: 35px;
      }
      
      .hero h1 {
        font-size: 45px;
        line-height: 1.2;
      }
      
      .hero h1 span {
        font-size: 55px;
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

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #001f66;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(45deg, #ffb100, #ff9500);
      border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(45deg, #ff9500, #ffb100);
    }
  </style>
</head>
<body>
  <!-- Loading Overlay -->
  <div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner"></div>
  </div>

  <!-- Animated Background Particles -->
  <div class="particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
    <div class="container-fluid">
      <div class="navbar-brand">
        <img src="../images/white-logo-removebg-preview.png" alt="Bheem Bharat Logo">
        <div class="tagline">EKTA, SAMARTHAN, VIKAS</div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav" id="navbarNavItems">
          <!-- Navbar items will be dynamically updated by JavaScript -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="container hero">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
        <p class="connecting-text">CONNECTING</p>
        <h1>
          THE BHIM COMMUNITY ACROSS <br>
          <span>INDIA</span>
        </h1>
        <button class="download-btn" onclick="animateButton(this)">Download the App</button>
      </div>
      <div class="col-lg-6 col-md-12 text-center position-relative map-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
        <div class="orange-circle"></div>
        <img src="../images/emptymap.svg" alt="India Map" class="map-img img-fluid" />
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
  </section>

  <!-- About Section -->
  <section id="about" class="container-fluid about-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
          <h2>ABOUT BHEEMBHARAT</h2>
          <p data-aos="fade-up" data-aos-delay="100">
            Bheem Bharat is a digital platform created for the SC/ST Bhim community of India. Our vision is to connect community members across cities and states, making life easier and stronger together.
          </p>
          <p data-aos="fade-up" data-aos-delay="200">
            Whether you are shifting to a new city, searching for a home, or looking for a matrimonial alliance within the community, BheemBharat.com brings trusted connections right to your fingertips.
          </p>
          <p data-aos="fade-up" data-aos-delay="300">
            We are not just a platform – we are a movement for unity, support, and growth of the Bhim community.
          </p>
        </div>
        <div class="col-md-6 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <img src="../images/about-us.png" alt="About Bheem Bharat" class="about-img">
        </div>
      </div>
    </div>
  </section>

 
  <section id="how" class="container-fluid how-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center" data-aos="fade-right" data-aos-duration="1000">
          <img src="../images/howitworks-removebg-preview.png" alt="How It Works" class="how-img">
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <h2>HOW IT WORKS</h2>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100"><b>Register</b> on the website.</li>
            <li data-aos="fade-up" data-aos-delay="200">Select the service you need – <b>Accommodation</b> or <b>Matrimonial</b>.</li>
            <li data-aos="fade-up" data-aos-delay="300">Get connected to the <b>Area Admin</b> of your city or region.</li>
            <li data-aos="fade-up" data-aos-delay="400">The admin will help you with <b>rooms, flats, or community matchmaking</b>.</li>
            <li data-aos="fade-up" data-aos-delay="500">Pay only the agreed service/brokerage amount.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Section -->
  <section class="container-fluid why-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-white" data-aos="fade-right" data-aos-duration="1000">
          <h2>WHY CHOOSE BHEEM BHARAT?</h2>
          <ul class="why-list">
            <li>Exclusive for the <b>Bhim SC/ST Community.</b></li>
            <li><b>Pan-India network</b> of area admins & helpers.</li>
            <li><b>Reliable, safe & supportive community</b> connections.</li>
            <li><b>Affordable service</b> with no hidden charges.</li>
            <li>A platform to <b>unite and uplift our people.</b></li>
          </ul>
        </div>
        <div class="col-md-6 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="why-img-wrapper">
            <img src="../images/whychoosepic-removebg-preview.png" alt="Why Choose Bheem Bharat">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Join the Movement Section -->
  <section class="join-section">
    <div class="container">
      <div class="row align-items-center gx-5">
        <div class="col-lg-6 join-text" data-aos="fade-right" data-aos-duration="1000">
          <div class="headline">
            <h1>
              JOIN THE <br />
              MOVEMENT
            </h1>
            <div class="circle"></div>
          </div>
          <p data-aos="fade-up" data-aos-delay="200">Be a part of Bheem Bharat today.</p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="300">Find a <strong>Home.</strong></li>
            <li data-aos="fade-up" data-aos-delay="400">Find a <strong>Life Partner.</strong></li>
            <li data-aos="fade-up" data-aos-delay="500">Find Your <strong>Community.</strong></li>
          </ul>
          <p class="bottom-line" data-aos="fade-up" data-aos-delay="600">Together, we rise. Together, we build.</p>
        </div>
        <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <img src="../images/joinmomemt-removebg-preview.png" alt="Join Movement" class="join-img" />
        </div>
      </div>
    </div>
  </section>

  <!-- Register Section -->
  <section class="register-section" id="register">
    <div class="container">
      <img src="../images/white-logo-removebg-preview.png" alt="Bheem Bharat Logo" class="img-fluid mb-3" style="max-width: 400px" data-aos="zoom-in" />
      <p data-aos="fade-up" data-aos-delay="200">Ekta, Samarthan, Vikas</p>
      <button class="btn-register" onclick="showAuthModal('signup')" data-aos="fade-up" data-aos-delay="400">REGISTER NOW</button>
      <div class="bottom-bar mt-4" data-aos="fade-up" data-aos-delay="600">www.bheembharat.com</div>
    </div>
  </section>

  <!-- Authentication Modal -->
  <div class="auth-modal" id="authModal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeAuthModal()">&times;</span>
      <div id="authFormContent"></div>
    </div>
  </div>

  <!-- Scroll to Top Button -->
  <div class="scroll-to-top" id="scrollToTop" onclick="scrollToTop()">↑</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Animation Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script>
    // Initialize AOS
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      offset: 50
    });

    // Loading animation
    window.addEventListener('load', function() {
      const loadingOverlay = document.getElementById('loadingOverlay');
      setTimeout(() => {
        loadingOverlay.style.opacity = '0';
        setTimeout(() => {
          loadingOverlay.style.display = 'none';
        }, 500);
      }, 1500);
      updateNavbar();
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      const scrollToTopBtn = document.getElementById('scrollToTop');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
      if (window.scrollY > 300) {
        scrollToTopBtn.classList.add('show');
      } else {
        scrollToTopBtn.classList.remove('show');
      }
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Button animation
    function animateButton(button) {
      button.style.transform = 'scale(0.95)';
      setTimeout(() => {
        button.style.transform = 'scale(1)';
        showNotification('Download starting...', 'info');
      }, 150);
    }

    // Scroll to top functionality
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    // Notification system
    function showNotification(message, type = 'info') {
      const notification = document.createElement('div');
      notification.className = `alert alert-${type === 'info' ? 'primary' : type === 'success' ? 'success' : 'warning'} position-fixed`;
      notification.style.cssText = `
        top: 100px; right: 20px; z-index: 9999; 
        animation: slideInRight 0.5s ease-out;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      `;
      notification.innerHTML = `
        <strong>${message}</strong>
        <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
      `;
      document.body.appendChild(notification);
      setTimeout(() => {
        if (notification.parentElement) {
          notification.style.animation = 'slideOutRight 0.5s ease-out';
          setTimeout(() => notification.remove(), 500);
        }
      }, 3000);
    }

    // Add CSS animations for notifications
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
      }
      @keyframes slideOutRight {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
      }
    `;
    document.head.appendChild(style);

    // Authentication system
    function updateNavbar() {
      const navbarNavItems = document.getElementById('navbarNavItems');
      const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
      navbarNavItems.innerHTML = '';

      if (isLoggedIn) {
        navbarNavItems.innerHTML = `
          <li class="nav-item"><a class="nav-link active" href="#home">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="/realestate">SOCIETY/COLONY</a></li>
          <li class="nav-item"><a class="nav-link" href="/matrimoianl-info">MATRIMONY</a></li>
          <li class="nav-item"><a class="nav-link" href="/content">ABOUT US</a></li>
          <li class="nav-item"><a class="nav-link" href="#register">CONTACT US</a></li>
          <li class="nav-item"><a class="nav-link" href="#" onclick="logout()">LOGOUT</a></li>
        `;
      } else {
        navbarNavItems.innerHTML = `
          <li class="nav-item"><a class="nav-link" href="#" onclick="showAuthModal('login')">LOGIN</a></li>
          <li class="nav-item"><a class="nav-link" href="#" onclick="showAuthModal('signup')">SIGN UP</a></li>
        `;
      }
    }

    function showAuthModal(type) {
      const authModal = document.getElementById('authModal');
      const authFormContent = document.getElementById('authFormContent');
      authModal.classList.add('show');

      if (type === 'login') {
        authFormContent.innerHTML = `
          <h2>Login</h2>
          <div class="form-group">
            <label for="loginEmail">Email</label>
            <input type="email" id="loginEmail" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" placeholder="Enter your password" required>
          </div>
          <button onclick="handleLogin()">Login</button>
          <div class="switch-auth">
            Don't have an account? <a href="#" onclick="showAuthModal('signup')">Sign Up</a>
          </div>
        `;
      } else {
        authFormContent.innerHTML = `
          <h2>Sign Up</h2>
          <div class="form-group">
            <label for="signupEmail">Email</label>
            <input type="email" id="signupEmail" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="signupPassword">Password</label>
            <input type="password" id="signupPassword" placeholder="Enter your password" required>
          </div>
          <button onclick="handleSignup()">Sign Up</button>
          <div class="switch-auth">
            Already have an account? <a href="#" onclick="showAuthModal('login')">Login</a>
          </div>
        `;
      }
    }

    function closeAuthModal() {
      const authModal = document.getElementById('authModal');
      authModal.classList.remove('show');
    }

    function handleSignup() {
      const email = document.getElementById('signupEmail').value;
      const password = document.getElementById('signupPassword').value;

      if (!email || !password) {
        showNotification('Please fill in all fields', 'warning');
        return;
      }

      // Store user credentials in localStorage (for demo purposes)
      localStorage.setItem('userEmail', email);
      localStorage.setItem('userPassword', password);
      showNotification('Sign up successful! Please login.', 'success');
      closeAuthModal();
      showAuthModal('login');
    }

    function handleLogin() {
      const email = document.getElementById('loginEmail').value;
      const password = document.getElementById('loginPassword').value;
      const storedEmail = localStorage.getItem('userEmail');
      const storedPassword = localStorage.getItem('userPassword');

      if (email === storedEmail && password === storedPassword) {
        localStorage.setItem('isLoggedIn', 'true');
        showNotification('Login successful!', 'success');
        closeAuthModal();
        updateNavbar();
      } else {
        showNotification('Invalid email or password', 'warning');
      }
    }

    function logout() {
      localStorage.removeItem('isLoggedIn');
      showNotification('Logged out successfully', 'success');
      updateNavbar();
    }

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const particles = document.querySelectorAll('.particle');
      particles.forEach((particle, index) => {
        const speed = (index + 1) * 0.5;
        particle.style.transform = `translateY(${scrolled * speed}px)`;
      });
    });

    // Add interactive hover effects for list items
    document.querySelectorAll('.how-section ul li, .why-list li').forEach(li => {
      li.addEventListener('mouseenter', function() {
        this.style.transform = 'translateX(10px)';
        this.style.color = '#0026d3';
      });
      li.addEventListener('mouseleave', function() {
        this.style.transform = 'translateX(0)';
        this.style.color = '';
      });
    });

    // Typing effect for hero text
    function typeWriter(element, text, speed = 100) {
      let i = 0;
      element.innerHTML = '';
      function type() {
        if (i < text.length) {
          element.innerHTML += text.charAt(i);
          i++;
          setTimeout(type, speed);
        }
      }
      type();
    }

    setTimeout(() => {
      const heroTitle = document.querySelector('.hero h1');
      if (heroTitle) {
        const originalText = heroTitle.textContent;
        typeWriter(heroTitle, originalText, 50);
      }
    }, 2000);

    // Add resize handler for responsive animations
    window.addEventListener('resize', () => {
      AOS.refresh();
    });

    console.log('Bheem Bharat - Dynamic Website with Authentication Loaded Successfully! 🎉');
  </script>
</body>
</html>