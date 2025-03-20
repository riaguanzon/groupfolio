<!--==================== PORTFOLIO ====================-->
<section class="portfolio section" id="portfolio">
    <div class="center">
        <h2 class="section__title">Projects</h2>
        <span class="section__subtitle">Most recent works</span>
        <div class="add-project-container">
            <a href="../admin/addproject.php" class="add-project-link">Add Projects</a>
        </div>
    </div>
    <div class="portfolio__container container swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($projects as $proj):?>
                <!--==================== PORTFOLIO ITEM ====================-->
                <div class="portfolio__content grid swiper-slide">
                    <?php 
                    echo '<img src="../admin/upload_proj_img/'. $fetchimage . $proj['project_id'] . '_test.jpg" >';
                    ?>
                    <div class="portfolio_">
                        <div style="text-align: right;">
                            <!-- Trash icon with an onclick event -->
                            <a href="" class="delete-button" data-id="<?= $proj['project_id'] ?>"><i class="fa-solid fa-trash" style="color: #95a1b7;"> </i></a>
                        </div>
                        <h3 class="portfolio__title"><?php echo $proj['title']; ?></h3>
                        <p class="portfolio__description"><?php echo $proj['description']; ?></p>

                        <a href="<?php echo $proj['projects']; ?>" target="_blank" class="button button--flex button--small portfolio__button">View
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>


        <?php
        if (count($projects) >= 2) { ?>
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>
        <?php   }
        ?>
        <div class="swiper-pagination"></div>
    </div>
</section>