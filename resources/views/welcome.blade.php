<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{url('/css/main.css')}}" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">

        <h1 class="sitename">Portfolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="file:///C:/Users/luket/Documents/Tech/portfolio_new/blog.html">Blog</a></li>
   
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Luke Taylor</h2>
            <h4 class="animate__animated animate__fadeInDown">Web Developer / Network Engineer</h4>
            <p class="animate__animated animate__fadeInUp">Experienced full stack web developer and network engineer looking for a transition into the cyber security space. Feel free to view my personal site and contact me for potential employment.</p>
            <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contact Me</a>
          </div>
        </div>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->



    <!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>My Projects</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Website</li>
        <li data-filter=".filter-product">App</li>
        <li data-filter=".filter-branding">Network Lab</li>
        <li data-filter=".filter-books">Ethical Hacking</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">


        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4e5f0.appspot.com/o/images%2Fsimple_music_website.png?alt=media&token=628687e3-3cbe-4be8-8430-00f7ffb5ddaf" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Simple Music</a></h4>
              <p>This was my first ever personal project. It's a site that pulls music from youtube using their API and automatically adds it to a queue which won't interrupt the song currently playing.</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

         
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4e5f0.appspot.com/o/images%2Fjmorph_macros.png?alt=media&token=de7eaa02-3519-497f-b389-4b2a1ca908d2" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">JMorph Macros</a></h4>
              <p>This is a personal project for the game World of Warcraft. It provides the user with an ingame macro for the appearance of any other player they want. It does this by using Blizzard's Battle.net api. It was a very fun project to work on and quite successful. 8.3k youtube views plus active use</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4e5f0.appspot.com/o/images%2Fkohima_museum.png?alt=media&token=acb77186-50a8-4f86-909f-ea20a5986899" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Kohima Museum</a></h4>
              <p>This is a simple word press website I got asked to re-design and add new features to. It was my first time using wordpress and it seemed very simple to use. I enjoyed the project, although I do prefer manually creating the websites from scratch.</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4e5f0.appspot.com/o/images%2Freceipts_calculator.png?alt=media&token=1c8ddf5b-da6d-467c-bde8-7c747ea9dcf1" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Receipts Calculator App</a></h4>
              <p>This was a personal project I made to use when I got sent away on work courses. At the end of each course I had to claim back my receipts and this was an easy way to calculate the total price, with included screenshots of each receipt which saved me a lot of time.</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4e5f0.appspot.com/o/images%2Freceipts_calculator.png?alt=media&token=1c8ddf5b-da6d-467c-bde8-7c747ea9dcf1" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Receipts Calculator App</a></h4>
              <p>This was a personal project I made to use when I got sent away on work courses. At the end of each course I had to claim back my receipts and this was an easy way to calculate the total price, with included screenshots of each receipt which saved me a lot of time.</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->


     

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4e5f0.appspot.com/o/images%2Fjmorph_macros.png?alt=media&token=de7eaa02-3519-497f-b389-4b2a1ca908d2" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">JMorph Macros</a></h4>
              <p>This is a personal project for the game World of Warcraft. It provides the user with an ingame macro for the appearance of any other player they want. It does this by using Blizzard's Battle.net api. It was a very fun project to work on and quite successful. 8.3k youtube views plus active use</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

       

      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section><!-- /Portfolio Section -->

   <!-- Call To Action Section  -->
   <section id="call-to-action" class="call-to-action section dark-background">

    <div class="container">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-9 text-center text-xl-start">
          <h3>Download my CV</h3>
          <p>If you wish to know more about me for employment please grab a copy of my CV</p>
        </div>
        <div class="col-xl-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Download</a>
        </div>
      </div>

    </div>

  </section>
  <!-- /Call To Action Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Skills</h2>
    <p>Examples of what i've done</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": false,
          "speed": 3000,
          "autoplay": {
            "delay": 8000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 10
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Inventory Tracking System</h3>
            <h4>PHP & Laravel</h4>
            <p>
              <span>This was a system for controlling our stock in the backend of the Thought Foundation Website. I isntalled a plugin called Stevebauman Inventory to help me with the development. Once it was possible to add products, categories, companies and SKU codes I added barcode scanner functionality.</span>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Social Media Integration and Sharing</h3>
            <h4>PHP & Laravel</h4>
            <p>
              <span>On the social media page of the website, I used three different jQuery plguins to display our facebook, instagram and twitter. I set it up to link to our accounts and modfied the CSS slightly. I then used the youtube API to get the three most recent videos and added an iPlayer for each one. I have also used a plugin called AddThis to create social media sharing buttons for both blog posts and event posts. This takes the URL of the page and displays the information in a user-friendly format.</span>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Automated Email Campaigns</h3>
            <h4>PHP & Laravel</h4>
            <p>
              <span>I setup gmails SMTP on our server and synced our mailing list to a mailchimp list. I done this by calling the mailchimp API whenever a user accepted their email confirmation upon signing up. Whenever one of our users get updated in our backend, I have an automated API call to update mailchimp. I then split all of our users into different categories so we can specifically target them when creating an email campaign.</span>
            </p>
            <p>
              <span>For users that unsubscribe via a mailchimp email, I have a webhook setup listening which will set them as inactive in our dtabase to prevent spam and keep both mail lists in sync.</span>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>User Logins and Permissions</h3>
            <h4>PHP & Laravel</h4>
            <p>
              <span>When first creating the backend, the first thing I did was setup user profiles so that only employees could login. Then I created permisssions which are read, write, edit, and admin. When a user logs in, the permissions are taken from the database and stored in the current session. Now whenever a user tries to make an action on the site, the permissions trait I created tells the system whether they have the correct permission required to do so.</span>
            </p>
          </div>
        </div><!-- End testimonial item -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Artwork Submissions System</h3>
            <h4>PHP & Laravel</h4>
            <p>
              <span>This was a form which used dropzone to allow the user to upload multiple images at once via drag and drop. Uploaded images can be accessed on the backend of the website and discussed using facebook-style comments.</span>
            </p>
            <p>
              <span> If a submission is rejected an automated email is sent out telling the user, and if it's accepted we will send a personalised email ourselves.</span>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->


    

 






   

    

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Posts</h2>
        <p>Recent Blog Posts<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="https://www.smbceo.com/wp-content/uploads/2020/10/CompTIA-SecuritySY0-501.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Cyber Security</p>

              <h2 class="title">
                <a href="blog-details.html">Learning CompTIA Security +</a>
              </h2>

              <div class="d-flex align-items-center">
               
                <div class="post-meta">
                  <p class="post-author">Luke Taylor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">March 18, 2025</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="https://media.istockphoto.com/id/1314580639/photo/military-young-woman-managing-server-network.jpg?s=612x612&w=0&k=20&c=KzdAjtDby4-9Gj08n0Wu0Q8ce8Fk3hbooD-hj_UCpxU=" alt="" class="img-fluid">
              </div>

              <p class="post-category">Computer Networks</p>

              <h2 class="title">
                <a href="blog-details.html">How was being a military network engineer?</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Luke Taylor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">March 18, 2025</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="" alt="" class="img-fluid">
              </div>

              <p class="post-category">Cyber Security</p>

              <h2 class="title">
                <a href="blog-details.html">Reasons behind my transition into cyber security</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Luke Taylor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">March 18, 2025</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Get in touch</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
           

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Me</h3>
                <p>+44 7532701359</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Me</h3>
                <p>luke.taylor11@hotmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
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
    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-github"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->

    <script src="{{url('/js/main.js')}}"></script>


</body>

</html>