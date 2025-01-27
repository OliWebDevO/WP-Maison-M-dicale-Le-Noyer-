       <!-- Footer-area -->
       <footer class="footer-area">
            <!-- brand-area -->
            <div class="brand-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-title text-center mb-50">
                                <p class="title">Nos partenaires</p>
                            </div>
                        </div>
                    </div>
                    <div class="row brand-active">
                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'partenaire', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
                            'orderby' => 'name', // Ordonne par le nom de l'élément
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" -->
                        <div class="col-2">
                            <div class="brand-item">
                                <a href=" <?php the_field('lien_vers_le_partenaire');?>" target="_blank"><img src="<?php the_post_thumbnail_url(); ?>" alt="brand"></a>
                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->
                
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
            <div class="footer-instagram">
                <div class="container">
                    <div class="row g-0 instagram-active">
                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'activite-ponctuelle', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'orderby' => 'name', // Ordonne par le nom de l'élément
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" -->
                        <div class="col-2">
                            <div class="footer-insta-item">
                                <a href="<?php the_permalink()?>" ><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'activite-recurrente', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'orderby' => 'name', // Ordonne par le nom de l'élément
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" -->
                        <div class="col-2">
                                <div class="footer-insta-item">
                                    <a href="<?php the_permalink()?>" ><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                                </div>
                        </div>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                     
                    </div>
                </div>
            </div>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-widgets-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <div class="footer-widget">
                                    <div class="footer-about">
                                        
                                        <div class="footer-text">
                                            <h4 class="fw-title">Horaires</h4>
                                            <p><strong>Lundi</strong> : De 8h à 12h30 et de 15h à 19h</p>
                                            <p> <strong>Mardi & Mercredi</strong> : De 8h à 12h30 et de 13h à 19h</p>
                                            <p> <strong>Jeudi & Vendredi</strong> : De 8h à 12h30 et de 14h à 19h</p>
                                            <!-- <p>L'accueil reste joignable durant les heures de fermeture du temps de midi pour les urgences médicales.</p> -->
                                            <p>Après 19h, les week-ends et les jours fériés ; Appelez la garde bruxelloise au : 1733</p>
                                            <p>Ou rendez-vous aux postes de garde : <br> Chaussée de Haecht 579, 1030 schaerbeek <br> Rue d'Oultremont 54, 1040 etterbeek</p>
                                            <!-- <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/horaires.png" alt=""> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Le Noyer</h4>
                                    <ul class="list-wrap">
                                        <li><a href="<?php bloginfo("url")?>/about">Fonctionnement</a></li>
                                        <li><a href="<?php bloginfo("url")?>/services">Consultations</a></li>
                                        <li><a href="<?php bloginfo("url")?>/activites">Activités</a></li>
                                        <li><a href="<?php bloginfo("url")?>/equipe">Equipe</a></li>
                                        <li><a href="<?php bloginfo("url")?>/reseau">Réseau</a></li>
                                        <li><a href="<?php bloginfo("url")?>/journal">Journal</a></li>
                                        <li><a href="<?php bloginfo("url")?>/espace-patients">Espace Patients</a></li>
                                        <li><a href="<?php bloginfo("url")?>/contact">Contact & Accès</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-lg-2 col-md-5 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Activités</h4>
                                    <ul class="list-wrap">
                                        <li><a href="#">Atelier Cuisine</a></li>
                                        <li><a href="#">Initiation au vélo</a></li>
                                        <li><a href="#">Gym Douce</a></li>
                                        <li><a href="#">Jardinnage</a></li>
                                        <li><a href="#">Promenades Découvertes</a></li>
                                        <li><a href="#">Yoga</a></li>
                                        <li><a href="#">Tai Chi</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- Loop PHP Debut-->
                            <?php
                            $loop = new WP_Query( array( 
                                'post_type' => 'contactacces', // Va rechercher le type de contenu “job”
                                'posts_per_page' => -1, // Affiche tout sans limite 
                                'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                                'orderby' => 'name', // Ordonne par le nom de l'élément
                                'order' => 'ASC', // Chronologique ou pas (DESC)
                                    ));?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <!-- Ce qui doit être "bouclé" -->
                            <div class="col-lg-3 col-md-5">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Contact & Accès</h4>
                                    <div class="footer-contact-wrap">
                                        <p><?php the_field('adresse');?></p>
                                        <ul class="list-wrap">
                                            <a href="tel:<?php the_field('telephone');?>">
                                                <li class="phone"><i class="fas fa-phone"></i>
                                            </a> (Tel) : <?php the_field('telephone');?></li>
                                            <li class="phone"><i class="fas fa-phone"></i> (Fax) : <?php the_field('fax');?></li>
                                            <a href="mailto:<?php the_field('mail');?>">
                                                <li class="mail"><i class="fas fa-envelope"></i> <?php the_field('mail');?></li>
                                            </a>
                                        </ul>
                                    </div>

                                    <div class="footer-social">
                                            <div class="footer-logo logo">
                                                <a href="<?php bloginfo("url")?>"><img class='logo-footer' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/logo.png" alt="Logo"></a>
                                            </div>
                                            <a href="<?php the_field('facebook');?>" target='blank'><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                </div>

                                <?php endwhile;
                                wp_reset_query();
                                ?>
                                <!-- Loop PHP Fin-->
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="footer-shape one">
                    <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/TDV_M63_04.png" alt="img" class="wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                </div>
                <div class="footer-shape two">
                    <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/TDV_M63_06.png" alt="img" class="wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                </div> -->
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="copyright-text">
                                <p>La Maison médicale Le Noyer asbl respecte le RGPD et, par là même, respecte le droit des personnes physiques à l’égard de la protection de leurs données personnelles. <br>Si vous souhaitez en savoir plus, n’hésitez pas à consulter notre politique de confidentialité <a href="https://www.lenoyer.be/rgpd">ici</a></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="payment-card text-center text-md-end">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer-area-end -->





		<!-- JS here -->
        <script src="<?php bloginfo("template_url")?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.odometer.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.appear.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.paroller.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.inview.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery.easing.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/svg-inject.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/jarallax.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/slick.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/validator.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/ajax-form.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/wow.min.js"></script>
        <script src="<?php bloginfo("template_url")?>/assets/js/main.js?<?php echo time(); ?>"></script>
        <script>
            SVGInject(document.querySelectorAll("img.injectable"));
        </script>
    </body>
</html>
