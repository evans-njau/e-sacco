<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Assets/css/home.css">
    <link rel="stylesheet" href="Assets/css/AdminDashboard.css">
    <link rel="stylesheet" href="Assets/css/cantact.css">
    <link rel="stylesheet" href="Assets/css/About.css">
    <link rel="stylesheet" href="Assets/css/trips.css">
    <script src="https://kit.fontawesome.com/4f5951fdfb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="container-fluid row" >
        <div class="logo col-1 p-0">
            <img src="Assets/images/logo.bmp" alt="logo">
        </div>
        <ul class="nav col-8 p-0">
            <li class="nav-item "><a class="nav-link" href="{{route('index')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('trips')}}">Trips</a></li>
            <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('About')}}">About_us</a></li>
            <li class="nav-item"><a href="#Contacts" class="nav-link">Contacts</a></li>
        </ul>
        <ul class="nav col-2 p-0">
            <li class="nav-link" class="register"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            <li class="nav-link" class="login"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>
    @yield('home')
    @yield('trips')
    @yield('About')
    @yield('contacts')
    @yield('AdminDashboard')
    @yield('UserDashboard')
<!-- Footer Section -->
<footer class="footer bg-dark">
    <div class="footer-container">
  
      <!-- Links to Other Pages -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Booking</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
  
      <!-- Contact Details Section -->
      <div class="footer-col" id="Contacts">
        <h4>Contact Us</h4>
        <ul>
          <li>Email: info@2nkbookings.com</li>
          <li>Phone: +254 123 456 789</li>
          <li>Address: 2NK Building, Nairobi, Kenya</li>
        </ul>
      </div>
  
      <!-- Booking Guidelines Section -->
      <div class="footer-col">
        <h4>Booking Guidelines</h4>
        <p>Follow these guidelines for a smooth booking experience:</p>
        <ul>
          <li>Book at least 24 hours in advance.</li>
          <li>Ensure your contact details are accurate.</li>
          <li>Arrive 15 minutes before departure time.</li>
        </ul>
      </div>
  
      <!-- Google Map Section -->
      <div class="footer-col">
        <h4>Find Us</h4>
        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.159979189278!2d36.8219462!3d-1.2920653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10a97e5f95b7%3A0x708bb1e3e3e3d0d9!2sNairobi%2C+Kenya!5e0!3m2!1sen!2ske!4v1681234567890" 
            allowfullscreen="" 
            loading="lazy"></iframe>
        </div>
      </div>
  
    </div>
  
    <!-- Footer Bottom Section -->
    <div class="footer-bottom">
      <p>&copy; 2024 2NK Booking System | All Rights Reserved.</p>
    </div>
  </footer>
  <script src="Assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>