<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - QuickStart Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">{{ $settings->site_title }}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Profile</a></li>
          <li><a href="#pricing">Produk</a></li>
          <li><a href="#features">Artikel</a></li>
          <li><a href="#services">Galery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Welcome to <span>{{ $settings->site_title }}</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Quickly start your project now and set the stage for success<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
          <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exa</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

   <!-- About Section -->
   <section id="about" class="about section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p class="who-we-are">Who We Are</p>
          <h3>Menghubungkan Masa Depan dengan Internet Cepat dan Stabil</h3>
          <p class="fst-italic">
            Kami adalah penyedia layanan internet terpercaya yang menghadirkan koneksi cepat, stabil, dan terjangkau untuk kebutuhan rumah dan bisnis Anda.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Koneksi internet berkecepatan tinggi hingga 1 Gbps.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Layanan pelanggan 24/7 siap membantu kapan saja.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Paket fleksibel yang dapat disesuaikan dengan kebutuhan Anda, baik untuk rumah, kantor, maupun gaming.</span></li>
          </ul>

          <a href="{{ route('profile_lengkap') }}" class="btn btn-primary mt-3">
            Baca Selengkapnya
          </a>
        </div>

        <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-lg-6">
              <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-lg-12">
                  <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                  <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- /About Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

      </div>

    </div>

  </section><!-- /Clients Section -->
  

    <!-- Bagian Harga -->
<section id="pricing" class="pricing section">

    <!-- Judul Bagian -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Paket Harga</h2>
        <p>Pilih paket internet yang sesuai dengan kebutuhan Anda dan nikmati koneksi cepat serta stabil.</p>
    </div><!-- Akhir Judul Bagian -->

    
    <div class="container">
      <div class="row gy-4">
        @foreach($products as $product)
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item text-center p-4 border rounded shadow-sm h-100">
              <h3>{{ $product->name }}</h3>
              <h4><sup>Rp</sup> {{ number_format($product->price) }}<span> / bulan</span></h4>
              <ul class="text-start">
                @foreach(array_slice(explode("\n", $product->points), 0, 3) as $point)
                  <li>{{ trim($point) }}</li>
                @endforeach
              </ul>
    
              {{-- Tombol Info Lebih Lanjut --}}
              {{-- <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary mt-3">
                Info Lebih Lanjut
              </a> --}}
            </div>
          </div>
        @endforeach
      </div>
    </div>
    
</section>


    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Artikel</h2>
        <p>Menyajikan informasi menarik dan bermanfaat seputar teknologi, inovasi, dan gaya hidup digital.</p>
      </div><!-- End Section Title -->


    </section><!-- /Features Section -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">
        @foreach($articles as $article)
        <div class="row gy-4 justify-content-between features-item">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="width: 400px; height: 300px; object-fit: cover; border-radius: 10px;">
          </div>
          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>{{ $article->title }}</h3>
              <p style="max-width: 100%; word-break: break-word; white-space: normal; overflow-wrap: break-word;">
                {{ $article->content }}
              </p>
              
            </div>
          </div>

        </div><!-- Features Item -->
        @endforeach
      </div>

    </section><!-- /Features Details Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
        @foreach($galleries as $gallery)
        <div class="row gy-4 justify-content-between features-item">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"  class="img-fluid" style="width: 400px; height: 300px; object-fit: cover;"">
            </div>
            <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>{{ $gallery->title }}</h3>
                <p style="max-width: 100%; word-break: break-word; white-space: normal; overflow-wrap: break-word;">
                  {{ $gallery->description }}
                </p>
              </div>
            </div>
            @endforeach
          </div>

    </section><!-- /Services Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>{{ $settings->alamat }}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Hubungi Kami</h3>
              <p>{{ $settings->contact_phone }}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Kami</h3>
              <p>{{ $settings->contact_email }}</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-delay="300">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" 
              frameborder="0" 
              class="d-block mx-auto"
              style="border:0; width: 100%; max-width: 800px; height: 400px;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>        
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">QuickStart</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            @if($settings->facebook)<a href="{{ $settings->facebook }}"><i class="bi bi-facebook"></i></a>@endif
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Alamat</h4>
          <p>{{ $settings->alamat }}</p>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter ms-auto">
          <h4>Support</h4>
          <p class="mt-3"><strong>Phone:</strong> <span>{{ $settings->contact_phone }}</span></p>
          <p><strong>Email:</strong> <span>{{ $settings->contact_email }}</span></p>
        </div>
        

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickStart</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Dist<a href="https://themewagon.com">ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>