<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') {{ $general->title }}</title>
  
  @yield('meta')

  <!-- Favicons -->
  <link href="{{ asset('storage/'.$general->favicon)}}" rel="icon">
  <link href="{{ asset('storage/'.$general->favicon)}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/css/style.css')}}" rel="stylesheet">

  @isset($general->sharethis)
      {!! $general->sharethis !!}
  @endisset

  @isset($general->gverification)
      {!! $general->gverification !!}
  @endisset
  <!-- =======================================================
  * Template Name: Moderna - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top {{ request()->is('/') ? 'header-transparent' : '' }}">
    <div class="container">

      <div class="logo float-left">
        @if ($general->logo)
        <a href="/"><img src="{{ asset('storage/'.$general->logo) }}" alt="" class="img-fluid"></a>
        @else
        <h1 class="text-light"><a href="/"><span>{{ $general->name }}</span></a></h1>
        @endif
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li {{ request()->is('/') ? 'class=active' : '' }}><a href="{{ route('homepage') }}">Home</a></li>
          <li {{ request()->is('wisata') ? 'class=active' : '' }}><a href="{{ route('wisata') }}">Wisata</a></li>
          <li {{ request()->is('akomodasi') ? 'class=active' : '' }}><a href="{{ route('akomodasi') }}">Akomodasi</a></li>
          <li {{ request()->is('cafe-resto') ? 'class=active' : '' }}><a href="{{ route('caferesto') }}">Cafe & Resto</a></li>
          <li {{ request()->is('artikel') ? 'class=active' : '' }}><a href="{{ route('artikel') }}">Artikel</a></li>
        </ul>
      </nav>

    </div>
  </header>

  @yield('hero')

  <main id="main">

    @yield('content')

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Supported by:</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.alibabacloud.com/" target="_blank">Alibabacloud.com</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://bootstrapmade.com" target="_blank">Bootstrapmade.com</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://codepolitan.com" target="_blank">Codepolitan.com</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              @foreach ($link as $link)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ $link->link }}">{{ $link->name }}</a></li>
              @endforeach
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              {{ $general->address1 }}
              @isset($general->address2)
              <br>
              {{ $general->address2 }}
              @endisset
              
              <br><br>
              <strong>Phone:</strong> {{ $general->phone }}<br>
              <strong>Email:</strong> {{ $general->email }}<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>DiBanyuwangi.CYou</h3>
            <p>DiBanyuwangi.Cyou merupakan Guide Book Banyuwangi versi website yang memberikan informasi seputar wisata, hotel atau penginapan, cafe atau resto dan informasi tentang Banyuwangi lainnya.</p>
            <div class="social-links mt-3">
              <a href="{{ $general->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ $general->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $general->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ $general->footer }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <div class="mode" id="theme">
    <span class="icon" onclick="setDarkMode()" id="darkBtn">🌚</span>
   </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('front/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('front/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('front/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/js/main.js') }}"></script>

  <script>
    $(document).ready(function(){
        $("img").addClass("img-responsive");
        $("img").css("max-width", "100%");
    });
    </script>

    <script>
    $(document).ready(function(){
        $("iframe").addClass("img-responsive");
        $("iframe").css("max-width", "100%");
    });
    </script>
    
    <script>
  if (localStorage.getItem('theme') == 'dark')
      setDarkMode()

      // 🌝🌚
      

  function setDarkMode() {
    let emoticon = ''
    let isDark = document.body.classList.toggle('darkmode')
    if (isDark) {
      emoticon = '🌝'
      localStorage.setItem('theme','dark')
      
    } else {
      emoticon = '🌚'
      localStorage.removeItem('theme')
    }
    document.getElementById('darkBtn').innerHTML = emoticon
  }
  

 </script>


  @stack('scripts')

</body>

</html>