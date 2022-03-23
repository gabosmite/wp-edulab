<?php 
	/* Template Name: Contacto */
	get_header()
 ?>

<?php while(have_posts()):the_post(); 
    $banner_list_contact = get_field('banner_list_contact');
    
?> 

    <?php if ($banner_list_contact): ?>
    <div class="banner">
            
        <div class="owl-four owl-carousel">
            <?php foreach ($banner_list_contact as $key => $item): 
                $imagen = $item['image'];
            ?>
            <img src="<?php echo $imagen; ?>" alt="Image of Bannner">
                
            <?php endforeach ?>
        </div>
        <?php 
            $banner_title_contact = get_field('banner_title_contact');
            $banner_description_contact = get_field('banner_description_contact');
         ?>
        <div class="container">
            <h1><?php echo $banner_title_contact; ?> </h1>

            <h3><?php echo $banner_description_contact; ?> </h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
    <?php endif ?>
    
    <section class="contact-page-section">
        <div class="container">
            <?php 
                $form_title_contact = get_field('form_title_contact');
                $form_description_contact = get_field('form_description_contact');
             ?>
            <div class="people-info-wrap">
                <h2><?php echo $form_title_contact; ?></h2>
                <div>
                    <?php echo $form_description_contact; ?>
                </div>
                <form>
                    <span>
                    <input type="text" placeholder="Full Name*" class="input- name">
                    <input type="email" placeholder="Email*" class="input- email">
                    </span>
                    <input type="text" placeholder="Subject*" class="input- subject">
                    <textarea placeholder="Messages*" class="input-">
                        
                    </textarea>
                    <input type="submit" value="submit now">
                </form>
            </div>
            <?php 
                $contact_title = get_field('contact_title');
                $date_contact_group = get_field('date_contact_group');
                $social_contact_group = get_field('social_contact_group');
             ?>
            <div class="contact-info">
                <h2><?php echo $contact_title; ?></h2>
                <?php 
                    $ubication = $date_contact_group['ubication'];
                    $phone = $date_contact_group['phone'];
                    $email = $date_contact_group['email'];

                    $viber = $social_contact_group['viber'];
                    $gmail_google = $social_contact_group['gmail_google'];
                    $facebook = $social_contact_group['facebook'];
                    $messenger = $social_contact_group['messenger'];
                    $twitter = $social_contact_group['twitter'];
                    $skype = $social_contact_group['skype'];
                    $youtube = $social_contact_group['youtube'];
                    
                 ?>
                 
                <ul class="contact-list">
                    <?php if ($ubication): ?>
                        <li><i class="fas fa-location-arrow"></i> 
                            <span>
                                <p><?php echo $ubication; ?></p>
                            </span>
                        </li>
                        
                    <?php endif ?>
                    <?php if ($phone): ?>
                        <li><i class="fas fa-phone"></i>
                            <span> 
                                <p><?php echo $phone; ?></p>
                            </span>
                        </li>
                        
                    <?php endif ?>
                    <?php if ($email): ?>
                        
                        <li><i class="fas fa-envelope"></i>
                            <span>
                                <p><?php echo $email; ?></p>
                            </span>
                        </li>
                    <?php endif ?>
                </ul>

                <ul class="contact-social">
                    <?php if ($viber): ?>
                        <li><a href="<?php echo $viber; ?>"><i class="fab fa-viber"></i></a></li>
                        
                    <?php endif ?>
                    <?php if ($gmail_google): ?>
                        <li><a href="<?php echo $gmail_google; ?>"><i class="fab fa-google-plus-g"></i></a></li>
                        
                    <?php endif ?>
                    <?php if ($facebook): ?>
                        <li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-square"></i></a></li>
                        
                    <?php endif ?>
                    <?php if ($messenger): ?>
                        <li><a href="<?php echo $messenger; ?>"><i class="fab fa-facebook-messenger"></i></a></li>
                        
                    <?php endif ?>
                    <?php if ($twitter): ?>
                        <li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li>
                        
                    <?php endif ?>
                    <?php if ($skype): ?>
                        <li><a href="<?php echo $skype; ?>"><i class="fab fa-skype"></i></a></li>
                        
                    <?php endif ?>
                    <?php if ($youtube): ?>
                        <li><a href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a></li>
                        
                    <?php endif ?>
                </ul>

                
            </div>
        </div>
    </section>
    
    <?php 
        $iframe_google_maps_contact = get_field('iframe_google_maps_contact');
     ?>
    <section class="map-section">
        <?php echo $iframe_google_maps_contact; ?>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.5733087899557!2d85.31323458697706!3d27.730457718152763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1920ba20a0d5%3A0x3ea7459e8ab1371f!2sSpyders+Lab!5e0!3m2!1sen!2snp!4v1547705422844" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    </section>


<?php endwhile; ?>

 <?php 

    get_footer();
  ?>

  <!-- <script type="text/javascript" src="<?php echo ASSETS ?>js/jquery.mmenu.all.js"></script> -->

  <script type="text/javascript">
        // for (var i = 0; i < 6.length; i++) {
            
        // }

  </script>