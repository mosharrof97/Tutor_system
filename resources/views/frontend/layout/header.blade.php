<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tutors World</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('frontend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
  <div class="container-fluid bg-info">
    <div class="container d-flex align-items-center">
    <div class="col-md-6">
    <span>+88 09613 441122</span>
    </div>
    <div class="col-md-6 text-end">
            <span>Fb</span>
            <span>Fb</span>
            <span>Fb</span>
            <span>Fb</span>

    </div>
    </div>
  </div>
    <div class="container d-flex align-items-center">
           <a href="#" class="logo" style="margin-right:5px"><img src="{{asset('assets/img/avatars/1.png')}}" alt="" class="img-fluid"></a>

      <h1 class="logo me-auto"><a href="{{route('home')}}">Tutors World</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">Sign In</a></li>
          <li><a href="{{route('jobboard')}}">Job Board</a></li>
          <li><a href="{{route('about')}}">Become a Tuitor</a></li>

          {{-- <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('toturs')}}">Tutors</a></li>
          <li><a href="{{route('about')}}">Events</a></li>
          <li><a href="{{route('pricing')}}">Pricing</a></li> --}}
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Blog Details</a></li>
              <li class="dropdown"><a href="#"><span>Update</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Educational</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          {{-- <li><a href="{{route('contact')}}">Contact</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="courses.html" class="get-started-btn">Get Started</a>
    </div>
  </header><!-- End Header -->
  @yield('content')
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset('frontend')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('frontend')}}/assets/js/main.js"></script>
</body>
</html>
