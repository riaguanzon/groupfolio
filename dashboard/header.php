 <!--==================== HEADER ====================-->

 <header class="header" id="header">
     <nav class="nav container">
         <a href="../admin/groupfolio.php" class="nav__logo">
             <img src="../img/code.png" alt="" style="width: 40px;">
             grouportlio</a>
         <div class="nav__menu" id="nav-menu">
             <ul class="nav__list grid">
                 <li class="nav__item">
                     <a href="#home" class="nav__link">
                         <i class="uil uil-estate nav__icon"></i>Home
                     </a>
                 </li>
                 <li class="nav__item">
                     <a href="#about" class="nav__link">
                         <i class="uil uil-user nav__icon"></i>About
                     </a>
                 </li>
                 <li class="nav__item">
                     <a href="#skills" class="nav__link">
                         <i class="uil uil-file-alt nav__icon"></i>Skills
                     </a>
                 </li>
                 <li class="nav__item">
                     <a href="#qualification" class="nav__link">
                         <i class="uil uil-briefcase-alt nav__icon"></i>Qualification
                     </a>
                 </li>
                 <li class="nav__item">
                     <a href="#portfolio" class="nav__link">
                         <i class="uil uil-scenery nav__icon"></i>Projects
                     </a>
                 </li>
                 </li>
                 <li class="nav__item">
                     <a href="#team" class="nav__link">
                         <i class="uil uil-message nav__icon"></i>Team
                     </a>
                 </li>
                 <li class="nav__item">
                     <a href="../auth/logout.php" class="nav__link">
                         <i class=""></i>Logout</a>
                 </li>
                 <li class="nav__item">
                     <a href="" class="nav__link">
                         <i class="uil uil-moon change-theme" id="theme-button"></i></a>
                 </li>

                 <!-- <li class="nav__item">
                     <a href="../auth/logout.php" class="nav__link">
                         <i class="fa-solid fa-arrow-right-from-bracket"></i>
                     </a>
                 </li> -->
             </ul>
         </div>
     </nav>
 </header>

 <!--==================== MAIN ====================-->
 <main class="main">
     <!--==================== HOME ====================-->
     <section class="home section" id="home">
         <div class="home__container container grid">
             <div class="home__content grid">
                 <div class="home__social">
                     <a href="<?php echo  $infos['facebook'] ?>" target="_blank" class="home__social-icon">
                         <i class="uil uil-linkedin-alt"></i>
                     </a>
                     <a href="<?php echo  $infos['insta'] ?>" target="_blank" class="home__social-icon">
                         <i class="uil uil-instagram-alt"></i>
                     </a>
                     <a href="<?php echo  $infos['github'] ?>" target="_blank" class="home__social-icon">
                         <i class="uil uil-github-alt"></i>
                     </a>

                 </div>

                 <div class="home__img">
                     <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                         <!-- Define the mask -->
                         <defs>
                             <mask id="mask0" mask-type="alpha">
                                 <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" fill="white" />
                             </mask>
                         </defs>

                         <!-- Apply the mask and insert the PHP image -->
                         <g mask="url(#mask0)">
                             <!-- Ensure the image covers the entire blob -->
                             <?php echo '<image class="home__blob-img" x="0" y="0" width="200" height="187" preserveAspectRatio="xMidYMid slice" xlink:href="../admin/uploads/' . $fetchimage . '_test.jpg"/>'; ?>
                         </g>
                     </svg>
                 </div>


                 <div class="home__data">
                     <h2>Hi! I'm,</h2>
                     <h1 class="home__title"> <?php echo  $infos['firstname'] . " " . $infos['lastname'] ?></h1>
                     <h2 class="home__subtitle"><?php echo  $infos['section'] ?></h2>
                     <i class="fa-regular fa-envelope"></i> <?php echo  $infos['email'] ?>
                     <!-- <a href="#contact" class="button button--flex home__button">
                                Contact Me<i class="uil uil-message button__icon"></i>
                            </a> -->
                 </div>
             </div>

             <div class="home__scroll">
                 <a href="#about" class="home__scroll-button button--flex">
                     <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                     <span class="home__scroll-name">Scroll Down</span>
                     <i class="uil uil-arrow-down home__scroll-arrow"></i>
                 </a>
             </div>
         </div>
     </section>



     <!--==================== ABOUT ====================-->
     <section class="about section" id="about">
         <h2 class="section__title">About Me</h2>
         <span class="section__subtitle">My Introduction</span>

         <div class="about__container container grid">
             <?php
                echo '<img src="../admin/uploads/' . $fetchimage . '_test.jpg" >';
                ?>

             <div class="about__data">
                 <p class="about__description">
                     <?php echo  $infos['bio'] ?>
                 </p>
                 <!-- <div class="about__info">
                        <div>
                            <span class="about__info-title">03+</span>
                            <span class="about__info-name">Years <br> experience</span>
                        </div>
                        
                        <div>
                            <span class="about__info-title">05+</span>
                            <span class="about__info-name">Completed <br> certifications</span>
                        </div>
                        <div>
                            <span class="about__info-title">02+</span>
                            <span class="about__info-name">companies<br>worked</span>
                        </div>
                    </div> -->

                 <div class="about__buttons">
                     <a id='edit-profile' data-id="<?= $_SESSION['user']['user_id'] ?>" class="button button--flex">
                         Edit Profile<i class="uil uil-edit-alt button__icon"></i>
                     </a>
                 </div>
             </div>
         </div>
     </section>