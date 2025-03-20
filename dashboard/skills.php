 <!--==================== SKILLS ====================-->
 <section class="skills section" id="skills">
     <h2 class="section__title">Skills / Achievements</h2>
     <span class="section__subtitle">My technical level</span>

     <div class="skills__container container grid">
         <div>
             <!--==================== SKILL-1 ====================-->
             <div class="skills__content skills__close">
                 <div class="skills__header">
                     <i class="uil uil-analytics skills__icon"></i>
                     <div>
                         <h1 class="skills__title">Programming Languanges</h1>
                         <!-- <span class="skills__subtitle">More than 2 years</span> -->
                     </div>

                     <i class="uil uil-angle-down skills__arrow"></i>
                 </div>
                 <div class="skills__list grid">
                     <?php foreach ($skills as $skl): ?>
                         <div class="skills__data">
                             <div class="skills__titles">
                                 <h3 class="skills__name"><?php echo ($skl["skills"]); ?></h3>
                             </div>
                             <div class="skills__bar">
                             </div>
                         </div>
                     <?php endforeach; ?>
                 </div>

             </div>




             <!--==================== SKILLS 2 ====================-->
             <div class="skills__content skills__close">
                 <div class="skills__header">
                     <i class="uil uil-money-bill skills__icon"></i>
                     <div>
                         <h1 class="skills__title">Special Skills</h1>
                         <!-- <span class="skills__subtitle">More than 2 years</span> -->
                     </div>

                     <i class="uil uil-angle-down skills__arrow"></i>
                 </div>
                 <div class="skills__list grid">
                     <?php foreach ($talent as $talent): ?>
                         <div class="skills__data">
                             <div class="skills__titles">
                                 <h3 class="skills__name"><?php echo ($talent["talent"]); ?></h3>
                             </div>
                             <div class="skills__bar">
                             </div>
                         </div>
                     <?php endforeach; ?>
                 </div>

             </div>

             <!--==================== SKILLS 3 ====================-->
             <div class="skills__content skills__close">
                 <div class="skills__header">
                     <i class="uil uil-award skills__icon"></i>
                     <div>
                         <h1 class="skills__title">Achievements</h1>
                         <!-- <span class="skills__subtitle">More than 2 years</span> -->
                     </div>

                     <i class="uil uil-angle-down skills__arrow"></i>
                 </div>
                 <div class="skills__list grid">
                     <?php foreach ($certificate as $cert): ?>
                         <div class="skills__data">
                             <div class="skills__titles">
                                 <h3 class="skills__name"><?php echo ($cert["certificate"]); ?></h3>
                             </div>
                             <div class="skills__bar">
                             </div>
                         </div>
                     <?php endforeach; ?>
                 </div>

             </div>

         </div>
     </div>
     </div>
 </section>