<!-- main-area -->
<main class="main-area fix">


    <!-- banner-area -->
    <div class="video-area video-bg page-bg home-bg" data-background="<?php bloginfo("template_url")?>/assets/img/lenoyerentre.png">
        <div class="video-bg-overlay"></div>
                    <!-- banner-area -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-7 col-lg-8 col-md-10">
                    <div class="banner-content text-center">
                        <p class="banner-caption">.. 
                            Avenue Félix Marchal, 1a 1030 Schaerbeek  ..</p>
                        <h1 class="title colortitle">Maison Médicale Le Noyer</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact-area -->
    <section id="lenoyer" class="contact-area">
        <div class="container">
            <div class="contact-box-wrapper">
                <div class="row justify-content-center">

                    <!-- Loop PHP Debut-->
                    <?php
                    $loop = new WP_Query( array( 
                        'post_type' => 'contactacces', // Va rechercher le type de contenu “job”
                        'posts_per_page' => -1, // Affiche tout sans limite 
                        'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
                        'orderby' => 'name', // Ordonne par le nom de l'élément
                        'order' => 'ASC', // Chronologique ou pas (DESC)
                            ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Ce qui doit être "bouclé" -->

                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <a href="https://www.google.com/maps/place/Maison+M%C3%A9dicale+Le+Noyer/@50.8523601,4.3863791,17z/data=!3m1!4b1!4m6!3m5!1s0x47c3c35c1c50886d:0xae67049eba86c3a7!8m2!3d50.8523601!4d4.388954!16s%2Fg%2F1tfq3tr7?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <!-- <span class="overlay-icon"><i class="fas fa-check"></i></span> -->
                                    <i class="far fa-map"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="title">Adresse</h5>
                                    <p class="contact-desc"><?php the_field('adresse');?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <a href="tel:<?php the_field('telephone');?> ">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <!-- <span class="overlay-icon"><i class="fas fa-check"></i></span> -->
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="title">Téléphone</h5>
                                    <p class="contact-desc">(Tel) : <?php the_field('telephone');?> <br> (fax) : <?php the_field('fax');?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <a href="mailto:<?php the_field('mail');?>">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <!-- <span class="overlay-icon"><i class="fas fa-check"></i></span> -->
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="title">Web</h5>
                                    <p class="contact-desc"><a class='contact-icon' href="mailto:<?php the_field('mail');?>"><i class="fa-solid fa-envelope"></i></a>  <a class='contact-icon' href="<?php the_field('facebook');?>" target='blank'><i class="fa-brands fa-facebook"></i></a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="https://www.google.com/maps/place/Maison+M%C3%A9dicale+Le+Noyer/@50.8523601,4.3863791,17z/data=!3m1!4b1!4m6!3m5!1s0x47c3c35c1c50886d:0xae67049eba86c3a7!8m2!3d50.8523601!4d4.388954!16s%2Fg%2F1tfq3tr7?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <!-- <span class="overlay-icon"><i class="fas fa-check"></i></span> -->
                                    <i class="fa-solid fa-bus-simple"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="title">Transports en commun à proximité du Noyer</h5>
                                    <p class="contact-desc"><?php the_field('transports_en_commun_a_proximite_du_noyer');?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-9">
                        <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:34a76bdf-20cf-4bb5-a8c2-849b0a5a0117" target='_blank'>
                            <div class="contact-box contact-big contact-img-box">
                                <div class="contact-icon">
                                    <!-- <i class="fa-solid fa-clock"></i> -->
                                    <img class='horaires4' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/clock.png" alt="Horloge">
                                </div>
                                <!-- <div class="contact-content">
                                    <h5 class="title">Horaires</h5>
                                    <p class="contact-desc"></p>
                                    <p><strong>Lundi :</strong> <br> De 8h à 12h30 et de 15h à 19h</p>
                                    <p> <strong>Mardi & Mercredi :</strong> <br> De 8h à 12h30 et de 13h à 19h</p>
                                    <p> <strong>Jeudi & Vendredi :</strong> <br> De 8h à 12h30 et de 14h à 19h</p>
                                </div> -->
                                <div class="contact-content">
                                    <h5 class="title">Horaires</h5>
                                </div>
                                <img class='horaires' src="<?php the_field('photo_horaires');?>" alt="Horaires">
                                <img class='horaires2' src="<?php the_field('photo_complementaire_de_lhoraire');?>" alt="Complément d'horaire">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-9">
                        <a href="https://www.gbbw.be/" target ='blank'>
                            <div class="contact-box contact-big">
                                <div class="contact-icon">
                                    <!-- <span class="overlay-icon"><i class="fas fa-check"></i></span> -->
                                    <img class='horaires4' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/clock.png" alt="Horloge">
                                </div>
                                <div class="contact-content">
                                    <h5 class="title">Garde</h5>
                                    <br class='mobile-hidden'><br class='mobile-hidden'><br class='mobile-hidden'>
                                    <p class="contact-desc"></p>
                                    <p><?php the_field('infos_garde_1');?></p>
                                    <img class='horaires4' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/garde.jpeg" alt="Garde">
                                    <p><?php the_field('infos_garde_2');?></p>
                                    <img class='horaires3' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/1733.png" alt="Autre poste de garde">
                                    <p><?php the_field('infos_garde_3');?></p>
                                    <br class='mobile-hidden'>
                                    <br class='mobile-hidden'>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile;
                    wp_reset_query();
                    ?>
                    <!-- Loop PHP Fin-->
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <section id="ingredient" class="ingredients-area-two section-py-130">
        <div class="container">
            <div class="row justify-content-center triptyque-">
                <div class="col-lg-10">
                    <div class="section-title section-title-two text-center mb-90">
                        <div class="sub-title">
                            <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                            Le Noyer
                            <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                        </div>
                        <h2 class="title">Votre maison médicale c'est :</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center big-tryptique">
                <div class="col-lg-12">
                   <!-- <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/asset 3.png" alt=""> -->
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/fin.png" alt="img">
                </div>
            </div>
            <div class="row justify-content-center big-tryptique">
                <div class="col-lg-12">
                   <!-- <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/asset 3.png" alt=""> -->
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/big.png" alt="img">
                </div>
            </div>
            <div class="row justify-content-center big-triptyque">
                <div class="col-lg-12">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/fin.png" alt="img">
                </div>
            </div>
            <div class="row justify-content-center mobile-tryptique ">
                <div class="col-lg-4 col-md-11 mil-mb-120">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/1.png" alt="img">
                </div>
                <div class="col-lg-4 col-md-11 mil-mb-120">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/2.png" alt="img">
                </div>
                <div class="col-lg-4 col-md-11 mil-mb-120">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/3.png" alt="img">
                </div>
            </div>
        </div>
    </section>

    <!-- features-area -->
    <section id="features" class="features-area features-bg" data-background="<?php bloginfo("template_url")?>/assets/img/LeNoyer/bgbanner.png">
    <!-- <section id="features" class="features-area features-bg" data-background="<?php bloginfo("template_url")?>/assets/img/bg/features_bg.jpg"> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-lg-5 order-0 order-lg-2">
                    <!-- <div class="features-img wow featuresRollOut" data-wow-delay=".3s"> -->
                    <div class="features-img wow fadeInRight" data-wow-delay=".3s">
                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/04_medical_clinic_2.png" alt="clinique">
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7">
                    <div class="features-items-wrap">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-8">
                                <a href="<?php bloginfo("url")?>/services#medecine">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - métier - médecin.png" alt="médecin">
                                        </div>
                                        <div class="features-content">
                                            <h4 class="title">Médecine Générale</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <a href="<?php bloginfo("url")?>/services#servicekine">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - métier - kiné.png" alt="kiné">
                                        </div>
                                        <div class="features-content">
                                            <h4 class="title">Kinésithérapie</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <a href="<?php bloginfo("url")?>/services#serviceinfi">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - métier - infirmier.png" alt="infirmerie">
                                        </div>
                                        <div class="features-content">
                                            <h4 class="title">Infirmerie</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <a href="<?php bloginfo("url")?>/services#serviceas">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - blanc - métier - AS.png" alt="assistance sociale">
                                        </div>
                                        <div class="features-content">
                                            <h4 class="title">Assistance sociale</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- features-product -->
    <section class="features-products">
        <div class="container">

            <!-- Loop PHP Debut-->
            <?php
            $loop = new WP_Query( array( 
                'post_type' => 'page-daccueil', // Va rechercher le type de contenu “job”
                'posts_per_page' => 1, // Affiche tout sans limite 
                'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Ce qui doit être "bouclé" - Debut -->
            <div class="features-products-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="features-products-thumb wow fadeInRight" data-wow-delay=".2s">
                            <div class="main-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="features-product-content">
                            <h2 class="title"><a href="shop-details.html"><?php the_title(); ?></a></h2>
                            <h6 class="features-product-quantity"><?php the_field('sous_titre');?></h6>
                            <p><?php the_field('paragraphe_1');?></p>
                            <p><?php the_field('paragraphe_2');?></p>
                            <p><?php the_field('paragraphe_3');?></p>
                            <p><?php the_field('paragraphe_4');?></p>
                            <p><?php the_field('paragraphe_5');?></p>
                            <p><?php the_field('paragraphe_6');?></p>
                            <p><?php the_field('paragraphe_7');?></p>
                            <div class="features-product-bottom">
                                <a href="<?php bloginfo("url")?>/activites" class="btn">En Savoir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ce qui doit être "bouclé" - Fin -->

            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->         

            <!-- Equipe-Accueil-area -->
            <section class="home-shop-area home-team">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title section-title-two mb-60">
                                <h2 class="title">L'équipe</h2>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-4">
                            <div class="view-all-btn text-end mb-50">
                                <a href="shop.html" class="btn btn-three">All Product</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="row home-shop-active">

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'membre-de-laccueil', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#accueil">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#accueil"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price"><?php the_field('role');?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'medecin', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#medecin">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#medecin"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price">Médecin</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'assistant-e-en-mede', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#assistant">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content photo-team-content-big">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#assistant"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price"><?php the_field('role');?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->
                        
                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'kinesitherapeute', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#kine">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#kine"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price">Kinésithérapeute</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'infirmier-ere', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#infirmier">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#infirmier"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price"><?php the_field('role');?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'assistant-e-social-e', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#as">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#as"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price"><?php the_field('role');?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'gestionnaire-adminis', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#admin">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content photo-team-content-big">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#admin"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price">Gestionnaire Administratif</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->          

                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'coordinateur-trice', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#coordinatrice">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content photo-team-content-big">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#coordinatrice"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price"><?php the_field('role');?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->                               
                        
                        <!-- Loop PHP Debut-->
                        <?php
                        $loop = new WP_Query( array( 
                            'post_type' => 'personnel-dentretien', // Va rechercher le type de contenu “job”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- Ce qui doit être "bouclé" - Debut -->
                        <div class="col-xl-3">
                            <div class="home-team-item">
                                <div class="photo-team">
                                    <a href="<?php bloginfo("url")?>/equipe#entretien">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </a>
                                </div>
                                <div class="home-shop-content photo-team-content">
                                    <h4 class="title"><a href="<?php bloginfo("url")?>/equipe#entretien"><?php the_title(); ?></a></h4>
                                    <span class="home-shop-price">Entretien</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ce qui doit être "bouclé" - Fin -->
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->         

                    </div>
                </div>
            </section>

            <!-- Loop PHP Debut-->
            <?php
            $loop = new WP_Query( array( 
                'post_type' => 'page-daccueil', // Va rechercher le type de contenu “job”
                'posts_per_page' => 1, // Affiche tout sans limite 
                'offset' => 1, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Ce qui doit être "bouclé" - Debut -->
            <div class="features-products-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="features-products-thumb wow fadeInRight" data-wow-delay=".2s">
                            <div class="main-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="features-product-content">
                            <h2 class="title"><a href="shop-details.html"><?php the_title(); ?></a></h2>
                            <h6 class="features-product-quantity"><?php the_field('sous_titre');?></h6>
                            <p><?php the_field('paragraphe_1');?></p>
                            <p><?php the_field('paragraphe_2');?></p>
                            <p><?php the_field('paragraphe_3');?></p>
                            <p><?php the_field('paragraphe_4');?></p>
                            <p><?php the_field('paragraphe_5');?></p>
                            <p><?php the_field('paragraphe_6');?></p>
                            <p><?php the_field('paragraphe_7');?></p>
                            <div class="features-product-bottom">
                                <a href="<?php bloginfo("url")?>/reseau" class="btn">En Savoir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ce qui doit être "bouclé" - Fin -->

            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->  

            <!-- Loop PHP Debut-->
            <?php
            $loop = new WP_Query( array( 
                'post_type' => 'page-daccueil', // Va rechercher le type de contenu “job”
                'posts_per_page' => 1, // Affiche tout sans limite 
                'offset' => 2, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Ce qui doit être "bouclé" - Debut -->
            <div class="features-products-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="features-products-thumb wow fadeInRight" data-wow-delay=".2s">
                            <div class="main-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="features-product-content">
                            <h2 class="title"><a href="shop-details.html"><?php the_title(); ?></a></h2>
                            <h6 class="features-product-quantity"><?php the_field('sous_titre');?></h6>
                            <p><?php the_field('paragraphe_1');?></p>
                            <p><?php the_field('paragraphe_2');?></p>
                            <p><?php the_field('paragraphe_3');?></p>
                            <p><?php the_field('paragraphe_4');?></p>
                            <p><?php the_field('paragraphe_5');?></p>
                            <p><?php the_field('paragraphe_6');?></p>
                            <p><?php the_field('paragraphe_7');?></p>
                            <div class="features-product-bottom">
                                <a href="<?php bloginfo("url")?>/journal" class="btn">En Savoir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ce qui doit être "bouclé" - Fin -->

            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->  

            <!-- Loop PHP Debut-->
            <?php
            $loop = new WP_Query( array( 
                'post_type' => 'page-daccueil', // Va rechercher le type de contenu “job”
                'posts_per_page' => 1, // Affiche tout sans limite 
                'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Ce qui doit être "bouclé" - Debut -->
            <div class="features-products-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="features-products-thumb wow fadeInRight" data-wow-delay=".2s">
                            <div class="main-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="features-product-content">
                            <h2 class="title"><a href="shop-details.html"><?php the_title(); ?></a></h2>
                            <h6 class="features-product-quantity"><?php the_field('sous_titre');?></h6>
                            <p><?php the_field('paragraphe_1');?></p>
                            <p><?php the_field('paragraphe_2');?></p>
                            <p><?php the_field('paragraphe_3');?></p>
                            <p><?php the_field('paragraphe_4');?></p>
                            <p><?php the_field('paragraphe_5');?></p>
                            <p><?php the_field('paragraphe_6');?></p>
                            <p><?php the_field('paragraphe_7');?></p>
                            <div class="features-product-bottom">
                                <a href="<?php bloginfo("url")?>/espace-patients" class="btn">En Savoir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ce qui doit être "bouclé" - Fin -->

            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->  
            
                        <!-- Loop PHP Debut-->
                        <?php
            $loop = new WP_Query( array( 
                'post_type' => 'page-daccueil', // Va rechercher le type de contenu “job”
                'posts_per_page' => 1, // Affiche tout sans limite 
                'offset' => 4, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Ce qui doit être "bouclé" - Debut -->
            <div class="features-products-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="features-products-thumb wow fadeInRight" data-wow-delay=".2s">
                            <div class="main-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="features-product-content">
                            <h2 class="title"><a href="shop-details.html"><?php the_title(); ?></a></h2>
                            <h6 class="features-product-quantity"><?php the_field('sous_titre');?></h6>
                            <p><?php the_field('paragraphe_1');?></p>
                            <p><?php the_field('paragraphe_2');?></p>
                            <p><?php the_field('paragraphe_3');?></p>
                            <p><?php the_field('paragraphe_4');?></p>
                            <p><?php the_field('paragraphe_5');?></p>
                            <p><?php the_field('paragraphe_6');?></p>
                            <p><?php the_field('paragraphe_7');?></p>
                            <div class="features-product-bottom">
                                <a href="<?php bloginfo("url")?>/contact" class="btn">En Savoir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ce qui doit être "bouclé" - Fin -->

            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->  
             
        </div>
        <div class="fp-shapes-wrap">
        </div>
        <div class="fp-circle one"></div>
        <div class="fp-circle two"></div>
        <div class="fp-circle three"></div>
        <div class="fp-circle four"></div>
        <div class="fp-circle five"></div>
    </section>
    <!-- features-product-end -->

</main>
<!-- main-area-end -->