 <!--==================== QUALIFICATION ====================-->
 <section class="qualification__section" id="qualification">
     <h2 class="section__title">Qualification</h2>
     <span class="section__subtitle">My personal journey</span>

     <div class="qualification__container container">
         <div class="qualification__tabs">
             <div class="qualification__button button--flex qualification__active" data-target='#education'>
                 <i class="uil uil-graduation-cap qualification__icon"></i>
                 Education
             </div>

            
         </div>

         <div class="qualification__sections">
             <!--==================== QUALIFICATION CONTENT 1 ====================-->
             <div class="qualification__content qualification__active" data-content id="education">
                 <!--==================== QUALIFICATION 1 ====================-->
                 <div class="qualification__data">
                     <div>
                         <h3 class="qualification__title">
                             <?php echo  $infos['college'] ?></h3>
                         <span class="qualification__subtitle">College</span>
                         <div class="qualification__calendar">
                             <i class="uil uil-calendar-alt"></i>
                             <?php echo  $infos['collegegrad'] ?>
                         </div>
                         <!-- <span>Edit   </span><i class="fa-solid fa-arrow-right"></i>   -->
                     </div>

                     <div>
                         <span class="qualification__rounder"></span>
                         <span class="qualification__line"></span>
                     </div>
                 </div>

                 <!--==================== QUALIFICATION 2 ====================-->
                 <div class="qualification__data">
                     <div></div>
                     <div>
                         <span class="qualification__rounder"></span>
                         <span class="qualification__line"></span>
                     </div>

                     <div>
                         <h3 class="qualification__title"><?php echo  $infos['shs'] ?></h3>
                         <span class="qualification__subtitle">Senior High School</span>
                         <div class="qualification__calendar">
                             <i class="uil uil-calendar-alt"></i>
                             <?php echo  $infos['seniorgrad'] ?>
                         </div>
                         <!-- <span>Edit   </span><i class="fa-solid fa-arrow-right"></i>   -->
                     </div>
                 </div>

                 <!--==================== QUALIFICATION 3 ====================-->
                 <div class="qualification__data">
                     <div>
                         <h3 class="qualification__title"><?php echo  $infos['high'] ?></h3>
                         <span class="qualification__subtitle">Junior High School</span>
                         <div class="qualification__calendar">
                             <i class="uil uil-calendar-alt"></i>
                             <?php echo  $infos['juniorgrad'] ?>
                         </div>
                         <!-- <span>Edit   </span><i class="fa-solid fa-arrow-right"></i>   -->
                     </div>

                     <div>
                         <span class="qualification__rounder"></span>
                         <span class="qualification__line"></span>
                     </div>
                 </div>

                 <!--==================== QUALIFICATION 4 ====================-->
                 <div class="qualification__data">
                     <div></div>
                     <div>
                         <span class="qualification__rounder"></span>
                         <!-- <span class="qualification__line"></span> -->
                     </div>

                     <div>
                         <h3 class="qualification__title"><?php echo  $infos['elem'] ?></h3>
                         <span class="qualification__subtitle">Elementary</span>
                         <div class="qualification__calendar">
                             <i class="uil uil-calendar-alt"></i>
                             <?php echo  $infos['elemgrad'] ?>
                         </div>
                         <!-- <span>Edit   </span><i class="fa-solid fa-arrow-right"></i>   -->
                     </div>


                 </div>
             </div>


         </div>

     </div>
     </div>
 </section>