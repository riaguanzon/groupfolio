<?php
session_start();
// if (!isset($_SESSION["user"])) {
//   header("location: ../admin/setup.php");
// }

require_once '../classes/projects.class.php';
require_once '../classes/certificate.class.php';
require_once '../classes/infos.class.php';
require_once '../classes/skills.class.php';
require_once '../classes/admin.class.php';
require_once '../classes/talent.class.php';
require_once '../classes/user.class.php';
require_once '../tools/clean.php';

$objAccept = new Edit();

$team_members = $objAccept->team_members();
$objInfos = new Infos;
$objUser = new User;
$objSkills = new Skills;
$objProjects = new Projects;
$objTalents = new Talents;
$objCertificate = new Certificates;
$allprojects = $objProjects->allprojects();
$fetchimage = $objUser->team_images();
$showadmin = $objUser->admin();
// $fetchuser_id = $objUser->fetchimage($_SESSION['user']['user_id']);
$user_details = $objInfos->user_info();
$infos = $objInfos->account();
$infos = $objInfos->user_info();
$skills = $objSkills->acc();
$projects = $objProjects->ac();
$talent = $objTalents->fetchtalent();
$certificate = $objCertificate->fetchcertificate();
$name = $objUser->name();
$pending_requests = $objInfos->all_pending();

// var_dump($fetchimage);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>groupfolio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../img/code.png" rel="icon">
  <link href="../img/code.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="../assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">


  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename" style="color: white;"><img src="../img/code.png" alt="">groupfolio</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>

          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="../auth/login.php">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <!-- rgb(114, 200, 213)  -->
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>Welcome to our Creative Portfolio</h1>
            <p>We are a team of talented designers and programmers from Western Mindanao State University</p>
            <div class="d-flex">
              <a href="../auth/login.php" class="btn-get-started">Get Started</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <!-- <img src="../img/portf.png" class="img-fluid animated" alt="" style="margin-left: 15%; height: 400px;" > -->
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>About Us<br></span>
        <h2>About</h2>
        <p>We are a creative, innovative team of aspiring professionals skilled in development, design, and technology. </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <!-- Carousel Section -->
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
              <!-- Carousel Items -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../img/group1.jpg" class="d-block w-100 rounded shadow" alt="Group Image">
                </div>
                <div class="carousel-item">
                  <img src="../img/group2.jpg" class="d-block w-100 rounded shadow" alt="Team Image 1">
                </div>
                <div class="carousel-item">
                  <img src="../img/group3.jpg" class="d-block w-100 rounded shadow" alt="Team Image 2">
                </div>
                <div class="carousel-item">
                  <img src="../img/group.jpg" class="d-block w-100 rounded shadow" alt="Team Image 3">
                </div>
                <div class="carousel-item">
                  <img src="../img/group4.jpg" class="d-block w-100 rounded shadow" alt="Team Image 4">
                </div>
              </div>

              <!-- Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

          </div>

          <!-- Content Section -->
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>What to Expect?</h3>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Proficiency in both front-end (UI/UX design, responsive web interfaces) and back-end (server-side logic, database integration) programming.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>A commitment to creating user-friendly applications with intuitive interfaces and seamless user experiences.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Expect creative and effective approaches to solving challenges, blending technology and artistry to achieve impactful results.</span></li>
            </ul>
            <p>
              With backgrounds in computer technology, layout and UI/UX design, pixel art, photography, and videography, we blend technical expertise with artistic vision to deliver meaningful and functional outcomes. Together, we aim to push boundaries, grow as individuals, and contribute positively to our community and beyond.
            </p>
          </div>
        </div>


      </div>

    </section><!-- /About Section -->




    <section id="services" class="services section ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>SKILLS</span>
        <h2>Skills</h2>
        <p>The broad range of skills and expertise we hold.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="../icons/front-end-programming.png" alt="" style="height: 40px;">
              </div>
              <h3>Front-End Web Development</h3>
              </a>
              <p>Elevate your online presence with professional, user-friendly, and visually appealing websites built to engage your audience. We specialize in creating seamless, responsive, and interactive front-end solutions tailored to your brand and business needs.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="../icons/backend.png" alt="" style="height: 40px;">
              </div>
              <h3>Back-End Web Development</h3>
              </a>
              <p>Power your website or web application with a robust, secure, and scalable back-end infrastructure. I specialize in building the server-side architecture that drives your site’s functionality, ensures data integrity, and enables seamless interaction between the front-end and the database.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="../icons/computer.png" alt="" style="height: 40px;">
              </div>
              <h3>Full-Stack Web Development</h3>
              </a>
              <p>Transform your ideas into powerful, dynamic websites and web applications with a seamless integration of both front-end and back-end technologies. As a full-stack web developer, I offer end-to-end solutions, handling everything from the user interface to server-side logic, ensuring your project is fully functional, scalable, and optimized.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="../icons/ux-design.png" alt="" style="height: 40px;">
              </div>
              <h3>UI/UX Design</h3>
              </a>
              <p>Create exceptional digital experiences that engage, delight, and convert your users. I specialize in designing intuitive, user-centered interfaces that not only look beautiful but also function seamlessly. Whether you're building a website, app, or product, I provide end-to-end UI/UX design services to ensure your users have an effortless and enjoyable experience.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="../icons/mobile-app.png" alt="" style="height: 40px;">
              </div>
              <h3>Application Development</h3>
              </a>
              <p>Build powerful, scalable, and visually stunning applications with FlutterFlow—a cutting-edge, no-code platform that allows for rapid development of cross-platform mobile and web applications. Whether you need a simple app prototype or a fully functional product, I provide end-to-end FlutterFlow development services to bring your ideas to life quickly and efficiently.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="../icons/layout.png" alt="" style="height: 40px;">
              </div>
              <h3>Layout Designs</h3>
              </a>
              <p>Transform your content into visually appealing and organized layouts that enhance user experience and readability. I specialize in designing custom layouts that are not only aesthetically pleasing but also functional, ensuring your content is presented clearly and efficiently across all platforms and devices.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Portfolio</span>
        <h2>Portfolio</h2>
        <p>Featuring the Creative Works of our Team</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul> -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($allprojects as $proj): ?>

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <!-- <?php var_dump($proj['user_id']) ?> -->
                <!-- $fi['user_id'] -->
                <?php
                echo '<img src="upload_proj_img/' . $proj['user_id'] . $proj['project_id'] . '_test.jpg" class="img-fluid" alt="">';
                ?>
                <!-- <img src="../assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""> -->
                <div class="portfolio-info">
                  <h4><?php echo $proj['title']; ?></h4>
                  <p><?php echo $proj['description']; ?></p>

                  <a href="upload_proj_img/<?php echo $proj['user_id'] . $proj['project_id'] . '_test.jpg'; ?>"
                    title="<?php echo $proj['title']; ?>"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link">
                    <i class="bi bi-zoom-in"></i>
                  </a>

                  <a href="<?php echo $proj['projects']; ?>" target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>

            <?php endforeach ?>
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->


    <!-- Call To Action Section -->


    <!-- Team Section -->
    <section id="team" class="team section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Team</span>
        <h2>Team</h2>
        <p>This is our team, skilled professionals committed to bringing your vision to life.</p>
      </div><!-- End Section Title -->

      <div class="profile-card" style="border: none; padding: 15px; max-width: 370px; margin: 50px auto; text-align: center;">
            <?php
            $imagePath = 'uploads/' . $showadmin['user_id'] . '_test.jpg';
            $defaultImage = '../img/default-profile.png'; // Fallback image if the user's image doesn't exist

            // Check if the image file exists
            if (file_exists($imagePath) && !empty($showadmin['user_id'])) {
              $imageToShow = $imagePath;
            } else {
              $imageToShow = $defaultImage;
            }

            echo '<img class="img-fluid" style="width: 359px; height: 359px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;" src="' . $imageToShow . '">';
            ?>
            <div class="member-info text-center" style="font-family: Arial, sans-serif; color: #333;">
              <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 10px; color: rgb(116, 230, 248);">Admin</h3>
              <h4 style="font-size: 1.5rem; margin-bottom: 10px;"><?= htmlspecialchars($showadmin['firstname'] . " " . $showadmin['lastname']); ?></h4>
              <span style="font-size: 1rem; color: #777;"><?= htmlspecialchars($showadmin['email']); ?></span>
            </div>
          </div>  

      <div class="container">
        <div class="row gy-5 d-flex justify-content-center">
        <h3 style="font-size: 2rem; text-align: center; font-weight: bold; margin-bottom: 10px; color: rgb(116, 230, 248);">Members</h3>

          <?php foreach ($fetchimage as $fi) { ?>



            <!-- Single Team Member -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member ">
                <div class="pic ">
                  <?php
                  $imagePath = 'uploads/' . $fi['user_id'] . '_test.jpg';

                  if (file_exists($imagePath) && !empty($fi['user_id'])) {
                    echo '<img class="img-fluid" src="' . $imagePath . '">';
                  } else {
                    echo '<img class="img-fluid" src="../img/code.png">';
                  }
                  ?>

                </div>
                <div class="member-info">
                  <h4><?= $fi['firstname'] . " " . $fi['lastname']; ?></h4>
                  <span><?= $fi['email'] ?></span>
                </div>
              </div>
            </div><!-- End Team Member -->
          <?php } ?>
        </div>
      </div>
    </section><!-- /Team Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Contact Us</span>
        <h2>Contact</h2>
        <p>Contact Us!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Western Mindanao State University, Normal Road, Baliwasan, Zamboanga City</p>
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
                  <p>groupfolio@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.3735482103425!2d122.06084003046664!3d6.913571417896019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041dd7a24816f%3A0x51af215fb64cc81a!2sWestern%20Mindanao%20State%20University!5e1!3m2!1sen!2sph!4v1734773665670!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>



        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">



    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename" style="color: white; font-weight: 700;"><img src="../img/code.png" alt="" style="height: 38px;"> groupfolio</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Western Mindanao State University </p>
            <p>Normal Road, Baliwasan, Zamboanga City, 7000</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>groupfolio@gmail.com</span></p>
          </div>
        </div>





      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">groupfolio</strong> <span>All Rights Reserved</span></p>
      <div class="credits">


      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <?php require_once "../includes/dashboard.php" ?>

</body>

</html>