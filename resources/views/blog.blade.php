<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog</title>
  <meta name="description" content="">
  <meta name="keywords" content="">



  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="{{url('/css/main.css')}}" rel="stylesheet">

</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/blog" class="active">Blog</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>What have I been up to?</h1>
      </div>
    </div><!-- End Page Title -->

    

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="https://www.smbceo.com/wp-content/uploads/2020/10/CompTIA-SecuritySY0-501.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Cyber Security</p>

              <h2 class="title">
                <a href="/blog/3">Learning CompTIA Security +</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="img/profile.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Luke Taylor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="https://media.istockphoto.com/id/1314580639/photo/military-young-woman-managing-server-network.jpg?s=612x612&w=0&k=20&c=KzdAjtDby4-9Gj08n0Wu0Q8ce8Fk3hbooD-hj_UCpxU=" alt="" class="img-fluid">
              </div>

              <p class="post-category">Computer Networks</p>

              <h2 class="title">
                <a href="/blog/2">How was being a military network engineer?</a>
              </h2>

              <div class="d-flex align-items-center">
              <img src="img/profile.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Luke Taylor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="https://fortitudemsp.co.uk/wp-content/uploads/2024/09/cyber-security-in-derby.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Cyber Security</p>

              <h2 class="title">
                <a href="/blog/1">Reasons behind my transition into cyber security</a>
              </h2>

              <div class="d-flex align-items-center">
              <img src="img/profile.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Luke Taylor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

         

        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#" class="active">1</a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href="https://github.com/LukeTaylor11" target="_blank"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/luke-taylor-478742119/" target="_blank"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->

  <script src="{{url('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('/vendor/aos/aos.js')}}"></script>
  <script src="{{url('/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{url('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->

    <script src="{{url('/js/main.js')}}"></script>



</body>

</html>