<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SewaMobilKu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('nova/nova2/assets/img/logo_rental.ico') }}" rel="icon">
  <link href="{{ asset('nova/nova2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('nova/nova2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('nova/nova2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('nova/nova2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('nova/nova2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('nova/nova2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('nova/nova2/assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('nova/nova2/assets/img/rental_mobil2.png') }}" alt="" class="logo-img" data-aos="fade-in">
        </a>        
        
      <nav id="navmenu" class="navmenu">
        <ul>
            <li class="nav-item">
                <a class="nav-link active me-md-4" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active me-md-4" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active me-md-4" href="#about-us">Tentang Kami</a>
            </li>
            <li class="dropdown"><a href="#"><span>Page</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link active me-md-4" href="#mobil">Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-md-4" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-md-4" href="#contact">Contact</a>
                    </li>
                </ul>
            </li>    
            <li class="nav-item">
                <a class="nav-link active me-md-4" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

    <main class="main">

    <!-- Hero Section -->
        <section id="home" class="hero section dark-background">

        <img src="{{ asset('nova/nova2/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
            <div class="col-xl-4">
                <h1 data-aos="fade-up">Teman Setia Perjalanan Anda.</h1>
                <blockquote data-aos="fade-up" data-aos-delay="100">
                <p>Nikmati kenyamanan perjalanan Anda dengan pilihan mobil yang tepat, fleksibel, dan mudah diakses kapan saja. </p>
                </blockquote>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="#layanan" class="btn-get-started">Get Started</a>
                </div>
            </div>
            </div>
        </div>

        </section><!-- /Hero Section -->

        <!-- Why Us Section -->
        <section id="layanan" class="why-us section">

            <div class="container">

                <div class="row g-0">

                    <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('nova/nova2/assets/img/why-us-bg.jpg') }}" alt="">
                    </div>

                    <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "centeredSlides": true,
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".swiper-button-next",
                                "prevEl": ".swiper-button-prev"
                            }
                            }
                        </script>
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Layanan</h2>
                            </div>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Layanan Sewa Mobil dengan Durasi Fleksibel</h3>
                                    <p>Menyediakan layanan sewa mobil dengan pilihan durasi yang fleksibel, seperti sewa per jam, harian, atau mingguan, sesuai dengan kebutuhan pelanggan.</p>
                                </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Layanan Antar-Jemput Mobil</h3>
                                    <p>Memberikan kemudahan pengantaran dan penjemputan mobil di lokasi yang diinginkan pelanggan, seperti di bandara, hotel, atau rumah.</p>
                                </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Layanan 24 Jam</h3>
                                    <p>Menyediakan layanan sewa mobil yang dapat diakses kapan saja selama 24 jam, baik untuk pengambilan atau pengembalian kendaraan, memberikan fleksibilitas bagi pelanggan.</p>
                                </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Penyewaan Mobil untuk Keperluan Bisnis atau Pribadi</h3>
                                    <p>Menyediakan mobil untuk kebutuhan bisnis atau pribadi, memberikan pilihan kendaraan sesuai dengan tujuan perjalanan.</p>
                                </div>
                                </div><!-- End slide item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section><!-- /Why Us Section -->

        <section id="about-us" class="call-to-action section dark-background">
            <img src="{{ asset('nova/nova2/assets/img/mobil2.jpg') }}" alt="">
        
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Tentang Kami</h2>
                            </div>
                            <p>Selamat datang di <strong>Sewa Mobilku</strong>, tempat Anda dapat menemukan solusi transportasi yang nyaman, fleksibel, dan mudah diakses kapan saja. Kami menyediakan berbagai pilihan mobil yang dapat disesuaikan dengan kebutuhan Anda, mulai dari kendaraan pribadi, mobil keluarga, hingga mobil bisnis dan petualangan. 
                            Dengan armada mobil yang selalu terawat, <strong>Sewa Mobilku</strong> siap memberikan kenyamanan dan keamanan dalam setiap perjalanan Anda. Layanan kami yang fleksibel memungkinkan Anda untuk menyewa mobil sesuai dengan waktu dan tempat yang Anda inginkan, memberikan kemudahan tanpa batas. 
                            Kami berkomitmen untuk menjadi teman setia dalam perjalanan Anda, memberikan pengalaman berkendara yang menyenangkan, aman, dan terjangkau. Dengan berbagai pilihan yang tersedia, Anda dapat mempercayakan perjalanan Anda kepada kami. Temukan kenyamanan dalam setiap perjalanan bersama <strong>Sewa Mobilku</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mobil" class="mobi section">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center mb-5">
                            <div class="container section-title" data-aos="fade-up">
                                <h2 class="display-4 text-primary">Daftar Mobil</h2>
                                <p class="lead text-muted">Pilih mobil yang sesuai dengan kebutuhan Anda!</p>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <!-- Start Team Member -->
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="team-member shadow-lg border border-light rounded">
                                    <div class="member-img overflow-hidden rounded">
                                        <img src="{{ asset('nova/nova2/assets/img/team/car1.jpg') }}" class="img-fluid" alt="Walter White's Car", style="margin-top: 6rem">
                                    </div>
                                    <div class="member-info p-4 d-flex flex-column justify-content-between align-items-start bg-light rounded-bottom">
                                        <div>
                                            <p class="fw-bold h5">fortuner</p>
                                            <p class="text-muted">Rp 500.000 / per hari</p>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn btn-primary mt-3 align-self-end">Pesan</a>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
        
                            <!-- Start Team Member -->
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                <div class="team-member shadow-lg border border-light rounded">
                                    <div class="member-img overflow-hidden rounded">
                                        <img src="{{ asset('nova/nova2/assets/img/team/car6.jpg') }}" class="img-fluid" alt="Sarah Jhonson's Car", style="margin-top: 6rem">
                                    </div>
                                    <div class="member-info p-4 d-flex flex-column justify-content-between align-items-start bg-light rounded-bottom">
                                        <div>
                                            <p class="fw-bold h5">Toyota Yaris</p>
                                            <p class="text-muted">Rp 450.000 / per hari</p>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn btn-primary mt-3 align-self-end">Pesan</a>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
        
                            <!-- Start Team Member -->
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="team-member shadow-lg border border-light rounded">
                                    <div class="member-img overflow-hidden rounded">
                                        <img src="{{ asset('nova/nova2/assets/img/team/car3.jpg') }}" class="img-fluid" alt="William Anderson's Car", style="margin-top: 6rem">
                                    </div>
                                    <div class="member-info p-4 d-flex flex-column justify-content-between align-items-start bg-light rounded-bottom">
                                        <div>
                                            <p class="fw-bold h5">Toyota Calya G</p>
                                            <p class="text-muted">Rp 600.000 / per hari</p>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn btn-primary mt-3 align-self-end">Pesan</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Team Member -->
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="team-member shadow-lg border border-light rounded">
                                    <div class="member-img overflow-hidden rounded">
                                        <img src="{{ asset('nova/nova2/assets/img/team/car5.jpg') }}" class="img-fluid" alt="William Anderson's Car", style="margin-top: 6rem">
                                    </div>
                                    <div class="member-info p-4 d-flex flex-column justify-content-between align-items-start bg-light rounded-bottom">
                                        <div>
                                            <p class="fw-bold h5">Suzuki Carry</p>
                                            <p class="text-muted">Rp 200.000 / per hari</p>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn btn-primary mt-3 align-self-end">Pesan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>             
        <section id="team" class="team section dark-background">
            <div class="container">
                <div class="row justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Team Engineering</h2>
                            </div>
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="team-member">
                                        <div class="member-img">
                                            <img src="{{ asset('nova/nova2/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <h4>Walter White</h4>
                                            <span>Chief Executive Officer</span>
                                        </div>
                                    </div>
                                </div><!-- End Team Member -->
        
                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                    <div class="team-member">
                                        <div class="member-img">
                                            <img src="{{ asset('nova/nova2/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <h4>Sarah Jhonson</h4>
                                            <span>Product Manager</span>
                                        </div>
                                    </div>
                                </div><!-- End Team Member -->
        
                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                    <div class="team-member">
                                        <div class="member-img">
                                            <img src="{{ asset('nova/nova2/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <h4>William Anderson</h4>
                                            <span>CTO</span>
                                        </div>
                                    </div>
                                </div><!-- End Team Member -->
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->
        
        <section id="contact" class="contact section">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                </div>
                <div class="row gy-4">
      
                    <div class="col-lg-5">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                        <h3>Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->
        
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->
        
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->
        
                    </div>
        
                    <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                        <div class="row gy-4">
        
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
        
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
        
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>
        
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>
        
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
        
                            <button type="submit">Send Message</button>
                        </div>
        
                        </div>
                    </form>
                </div><!-- End Contact Form -->     
              </div>     
            </div>
        </section><!-- /Contact Section -->
    </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">SewaMobilKu</span>
            </a>
            <p>Kami memudahkan perjalanan Anda dengan proses pemesanan yang cepat, armada terpercaya, dan layanan pelanggan yang siap membantu kapan saja. Sewa mobil mudah, nyaman, dan aman hanya di SewaMobilKu.</p>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
          </div>

          <div class="col-lg-2 col-6 footer-links">
          </div>

        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('nova/nova2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('nova/nova2/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('nova/nova2/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('nova/nova2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('nova/nova2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('nova/nova2/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('nova/nova2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('nova/nova2/assets/js/main.js') }}"></script>

</body>

</html>