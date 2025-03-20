<footer class="footer">

        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">
                        <h1 class="home__title"> <?php echo  $infos['firstname'] . " " . $infos['lastname'] ?></h1>
                    </h1>
                    <span class="footer__subtitle"><?php echo  $infos['email'] ?></span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="<?php echo  $infos['facebook'] ?>" target="_blank" class="footer__social">
                        <i class="uil uil-linkedin"></i>
                    </a>
                    <a href="<?php echo  $infos['insta'] ?>" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="<?php echo  $infos['github'] ?>" target="_blank" class="footer__social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; <?php echo $_SESSION["user"]["username"] ?>. All rights reserved.</p>
        </div>
    </footer>