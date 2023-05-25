<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to NMK Law Chambers</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/Images/NMK Law Logo 02.png') }}" rel="icon">
  <link href="{{ URL::asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:info@nmklaw.co.uk">info@nmklaw.co.uk</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0161 215 1931
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/NMKlaw" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="#">NMK Law Chambers</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo"><img src="{{ URL::asset('assets/Images/NMK Law Logo 01.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Why Us</a></li>
          <li><a class="nav-link scrollto" href="#Practice">Practice Areas</a></li>
          <li><a class="nav-link scrollto d-none" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto d-none" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto d-none" href="#team">Team</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1 class="d-none">Welcome to NMK Law Chambers</h1>
      <h2 class="mt-4 mb-1 d-none">Building Bridges, Transforming Lives: Your Immigration Journey Starts Here</h2>
      <h1 class="mb-5">Guiding You Towards Justice and Peace</h1>
      <a href="tel:+01612151931" class="btn-get-started scrollto">Call Now</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <span>About NMKLaw Chambers</span>
          <h2>About NMKLaw Chambers</h2>
        </div>


        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{ URL::asset('assets/Images/AdobeStock_228320666.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>We are a full-service law firm in Manchester.</h3>
            <p class="fst-italic">
              At NMK Law Chambers, we are a distinguished law firm specializing in Immigration Law, Asylum Law, Family Law, and Civil Litigation. With over three years of experience, we have established ourselves as a trusted legal partner, dedicated to providing exceptional service and unwavering support to our clients.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>  Over 15 years Experienced Attorneys.</li>
              <li><i class="bi bi-check-circle"></i>  Speak Directly with a specialist.</li>
              <li><i class="bi bi-check-circle"></i>  Client Oriented Results Driven.</li>
              <li><i class="bi bi-check-circle"></i>  Free Initial advice.</li>
            </ul>
            <p class="d-none">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <span>Why Us</span>
          <h2>Why Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 my-4 d-flex" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Experience and Expertise</h4>
              <p>With over 15 years of practice, NMK Law Chambers boasts a team of skilled attorneys with extensive knowledge and experience in immigration law, asylum law, family law, and civil litigation. We are well-equipped to tackle even the most complex legal challenges, ensuring top-notch representation for our clients.</p>
            </div>
          </div>

          <div class="col-lg-4 my-4 d-flex" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Client-Centered Approach</h4>
              <p>We prioritize our clients' needs and concerns, providing personalized attention and tailored legal strategies. At NMK Law Chambers, we believe in clear communication, keeping you informed and involved throughout the legal process. Your satisfaction and success are our ultimate goals.</p>
            </div>
          </div>

          <div class="col-lg-4 my-4 d-flex" data-aos="fade-up" data-aos-delay="250">
            <div class="box">
              <span>03</span>
              <h4>Compassion and Empathy</h4>
              <p>We prioritize our clients' needs and concerns, providing personalized attention and tailored legal strategies. At NMK Law Chambers, we believe in clear communication, keeping you informed and involved throughout the legal process. Your satisfaction and success are our ultimate goals.</p>
            </div>
          </div>

          <div class="col-lg-4 my-4 d-flex" data-aos="fade-up" data-aos-delay="350">
            <div class="box">
              <span>04</span>
              <h4>Strategic Advocacy</h4>
              <p>Our lawyers are skilled strategists, meticulously analysing the details of your case and devising effective legal approaches. Whether it involves negotiation, mediation, or litigation, we tirelessly advocate for your rights and relentlessly pursue the best possible outcome on your behalf.</p>
            </div>
          </div>

          <div class="col-lg-4 my-4 d-flex" data-aos="fade-up" data-aos-delay="450">
            <div class="box">
              <span>05</span>
              <h4>Professional Excellence</h4>
              <p>At NMK Law Chambers, we maintain the highest standards of professionalism, integrity, and ethical conduct. Our reputation for excellence in legal practice is built upon a commitment to delivering exceptional service and achieving outstanding results for our clients.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->


    
    <!-- ======= Clients Section ======= --
    <section id="clients" class="clients d-none">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="Practice" class="services">
      <div class="container">

        <div class="section-title">
          <span>Our Practice Areas</span>
          <h2>Our Practice Areas</h2>
          <p class="d-none">Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-xxl-3 col-md-6 d-flex align-items-stretch my-4 " data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="#">Immigration Law</a></h4>
              <p>Our team of skilled immigration lawyers is well-versed in the complexities of immigration law. We assist individuals, families, and businesses in navigating the intricate immigration process, whether it involves visas, permanent residency, work permits, or citizenship applications. From start to finish, we work diligently to ensure your immigration goals are achieved with precision and efficiency.</p>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6 d-flex align-items-stretch my-4 " data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="#">Asylum Law</a></h4>
              <p>Seeking asylum is a critical step for individuals fleeing persecution or fear of persecution in their home countries. At NMK Law Chambers, we understand the gravity of asylum cases and the need for compassionate legal representation. Our experienced asylum attorneys provide steadfast support, guiding you through the asylum process, preparing strong cases, and advocating for your rights every step of the way.</p>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6 d-flex align-items-stretch my-4 " data-aos="fade-up" data-aos-delay="250">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="#">Family Law</a></h4>
              <p>Our dedicated family law practitioners understand the unique challenges faced by families during legal disputes. We handle a wide range of family law matters, including divorce, child custody, child support, spousal support, and adoption. With sensitivity and discretion, we strive to protect your interests while advocating for fair and equitable resolutions that prioritize the well-being of you and your loved ones.</p>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6 d-flex align-items-stretch my-4 " data-aos="fade-up" data-aos-delay="350">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="#">Civil Litigation</a></h4>
              <p>When disputes arise, our seasoned litigators are ready to provide effective representation in civil litigation matters. We handle a diverse range of cases, including contract disputes, personal injury claims, property disputes, employment issues, and more. With our strategic approach, extensive legal knowledge, and formidable courtroom skills, we are dedicated to achieving favorable outcomes for our clients.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= --
    <section id="cta" class="cta d-none">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!- End Cta Section -->

    <!-- ======= Portfolio Section ======= --
    <section id="portfolio" class="portfolio d-none">
      <div class="container">

        <div class="section-title">
          <span>Portfolio</span>
          <h2>Portfolio</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!- End Portfolio Section -->

    <!-- ======= Pricing Section ======= --
    <section id="pricing" class="pricing d-none">
      <div class="container">

        <div class="section-title">
          <span>Pricing</span>
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!- End Pricing Section -->

    <!-- ======= Team Section ======= --
    <section id="team" class="team d-none">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="/assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="/assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="/assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>If you require expert legal assistance in matters of immigration law, asylum law, family law, or civil litigation, look no further than NMK Law Chambers. Schedule a consultation with our experienced attorneys today to discuss your legal needs. We are dedicated to providing you with the guidance, support, and effective representation necessary to resolve your legal challenges successfully.
          </p>
        </div>

        <div class="row" data-aos="fade-up">
          <a href="https://www.google.com/maps/place/13+Broughton+Ln,+Cheetham+Hill,+Manchester+M8+9TY,+UK/@53.4947243,-2.2544312,17z/data=!3m1!4b1!4m6!3m5!1s0x487bb1cdeda7fcf1:0x7b121389f42f711!8m2!3d53.4947211!4d-2.2518563!16s%2Fg%2F11c5kj4b4f?entry=ttu" target="_blank">
          <div class="col-lg-3 col-md-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>© First Floor 13-C Broughton Lane, Manchester, M8 9TY</p>
            </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="mailto:info@nmklaw.co.uk">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@nmklaw.co.uk</p>
            </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="tel:+01612151931">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>0161 215 1931</p>
            </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="tel:+07768629810">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Emergency No</h3>
              <p>07768 629810 </p>
            </div>
            </a>
          </div>

        </div>

        <div class="row d-none" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2373.530164916648!2d-2.256469718498772!3d53.49472420247374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1cdeda7fcf1%3A0x7b121389f42f711!2s13%20Broughton%20Ln%2C%20Cheetham%20Hill%2C%20Manchester%20M8%209TY%2C%20UK!5e0!3m2!1sen!2s!4v1684952572225!5m2!1sen!2s"frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h3>NMK Law Chambers</h3>
              <p>
                <a class="text-white" href="https://www.google.com/maps/place/13+Broughton+Ln,+Cheetham+Hill,+Manchester+M8+9TY,+UK/@53.4947243,-2.2544312,17z/data=!3m1!4b1!4m6!3m5!1s0x487bb1cdeda7fcf1:0x7b121389f42f711!8m2!3d53.4947211!4d-2.2518563!16s%2Fg%2F11c5kj4b4f?entry=ttu" target="_blank">
                © First Floor 13-C Broughton Lane,<br> Manchester, M8 9TY</a><br><br>
                <strong>Phone:</strong> <a class="text-white" href="+01612151931">0161 215 1931</a><br>
                <strong>Email:</strong> <a class="text-white" href="mailto:info@nmklaw.co.uk">info@nmklaw.co.uk</a><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/NMKlaw" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-1"></div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Practice Areas</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Immigration Law</li>
              <li><i class="bx bx-chevron-right"></i> Asylum Law</li>
              <li><i class="bx bx-chevron-right"></i> Family Law</li>
              <li><i class="bx bx-chevron-right"></i> Civil Litigation</li>
            </ul>
          </div>

          <div class="col-lg-1"></div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Why Choose Us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Experience and Expertise</li>
              <li><i class="bx bx-chevron-right"></i> Client-Centered Approach</li>
              <li><i class="bx bx-chevron-right"></i> Compassion and Empathy</li>
              <li><i class="bx bx-chevron-right"></i> Strategic Advocacy</li>
              <li><i class="bx bx-chevron-right"></i> Professional Excellence</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter d-none">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>NMK Law Chambers </span></strong>. All Rights Reserved
      </div>
      <div class="credits d-none">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('assets/js/main.js')}}"></script>

</body>

</html>