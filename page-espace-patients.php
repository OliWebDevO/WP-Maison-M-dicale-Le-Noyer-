<?php get_template_part("partials/header") ?>

        <!-- header-area -->
        <header id="home">
            <div id="header-top-fixed"></div>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="flaticon-layout"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="<?php bloginfo("url")?>"><img class='logo-nav-img' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-xl-flex">
                                        <ul class="navigation">
                                            <li><a href="<?php bloginfo("url")?>" class="section-link">Accueil</a>
                                            </li>
                                            <li><a href="<?php bloginfo("url")?>/about" class="section-link">Fonctionnement</a></li>
                                            <li class="menu-item-has-children"><a href="<?php bloginfo("url")?>/services" class="section-link">Consultations</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php bloginfo("url")?>/services#servicemedecine">Médecine Générale</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/services#servicekine">Kinésithérapie</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/services#serviceinfi">Infirmerie</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/services#serviceas">Assistance Sociale</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="<?php bloginfo("url")?>/activites">Activités</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php bloginfo("url")?>/activites#ponctuel">Activités ponctuelles</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/activites#recurent">Activités récurrentes</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="<?php bloginfo("url")?>/equipe" class="section-link">Équipe</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php bloginfo("url")?>/equipe#accueil">Accueil</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#medecin">Médecins</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#assistant">Assistant-e-s en Médecine Générale</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#kine">Kinésithérapeutes</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#infirmier">Infirmier-ères</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#as">Assistante Sociale</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#admin">Gestionnaires Administratifs</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#coordinatrice">Coordinatrice</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/equipe#entretien">Entretien</a></li>
                                                </ul>
                                            </li>
                                            <li class=''><a href="<?php bloginfo("url")?>/reseau" class="section-link">Réseau</a>
                                            <li><a href="<?php bloginfo("url")?>/Journal" class="section-link">Journal</a>
                                            </li>
                                            <li class='active'><a href="<?php bloginfo("url")?>/espace-patients" class="section-link">Espace Patients</a>
                                            <li><a href="<?php bloginfo("url")?>/contact">Contact & Accès</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="close-btn"><i class="fas fa-times"></i></div>
                    <div class="nav-logo">
                        <a href="<?php bloginfo("url")?>"><img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/logo.png" alt=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="https://www.facebook.com/profile.php?id=61553948742997"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-backdrop"></div>
            <!-- End Mobile Menu -->

            <!-- header-search -->
            <!-- <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your keyword...">
                                        <button class="search-btn"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-backdrop"></div> -->
            <!-- header-search-end -->



        </header>
        <!-- header-area-end -->


<!-- main-area -->
<main class="main-area fix">

    <!-- banner-area -->
    <div class="video-area video-bg page-bg" data-background="<?php bloginfo("template_url")?>/assets/img/lenoyerentre.png">
        <div class="video-bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb-content text-center">
                        <h2 class="title">Espace Patients</h2>
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item trail-item trail-begin">
                                    <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                </li>
                                <li class="breadcrumb-item trail-item trail-end"><span>Espace Patients</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area-end -->

    <section id="ingredient" class="ingredients-area-two section-pt-130">
        <div class="container">
            <div class="row justify-content-center triptyque-">
                <div class="col-lg-10">
                    <div class="section-title section-title-two text-center mb-90">
                        <div class="sub-title">
                            <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                            L'Espace Patient.es, une organisation par et pour les patient.es
                            <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                        </div>
                        <h2 class="title">Pourquoi un Espace Patient.es ?</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
            <!-- features-product -->
            <section class="features-products">
                <div class="container">

                    <!-- Loop PHP Debut-->
                    <?php
                    $loop = new WP_Query( array( 
                        'post_type' => 'section-espace-patie', // Va rechercher le type de contenu “job”
                        'posts_per_page' => -1, // Affiche tout sans limite 
                        'offset' => 2, // Commence la boucle après avoir "passé" les 3 premiers
                        'orderby' => 'name', // Ordonne par le nom de l'élément
                        'order' => 'ASC', // Chronologique ou pas (DESC)
                            ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Ce qui doit être "bouclé" -->
                    <div class="features-products-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="features-products-thumb wow fadeInLeft" data-wow-delay=".2s">
                                    <div class="main-img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="features-product-content">
                                    <h6 class="features-product-quantity"><?php the_title(); ?></h6>
                                    <p><?php the_field('paragraphe_1');?></p>
                                    <p><?php the_field('paragraphe_2');?></p>
                                    <p><?php the_field('paragraphe_3');?></p>
                                    <p><?php the_field('paragraphe_4');?></p>
                                    <p><?php the_field('paragraphe_5');?></p>
                                    <p><?php the_field('paragraphe_6');?></p>
                                    <p><?php the_field('paragraphe_7');?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile;
                    wp_reset_query();
                    ?>
                    <!-- Loop PHP Fin-->

                 
                </div>
                <div class="fp-shapes-wrap">
                    <!-- <div class="fp-shape-one">
                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/TDV_M63_06.png" alt="shape" class="paroller" data-paroller-factor="0.25" data-paroller-factor-lg="0.20" data-paroller-factor-md="0.25" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical">
                    </div>
                    <div class="fp-shape-two">
                        <img src="<?php bloginfo("template_url")?>/assets/img/others/features_sec_shape02.png" alt="shape" class="paroller" data-paroller-factor="-0.25" data-paroller-factor-lg="0.20" data-paroller-factor-md="0.25" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical">
                    </div>
                    <div class="fp-shape-three">
                        <img src="<?php bloginfo("template_url")?>/assets/img/others/features_sec_shape03.png" alt="shape" class="paroller" data-paroller-factor="0.25" data-paroller-factor-lg="0.20" data-paroller-factor-md="0.25" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical">
                    </div> -->
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
 
<?php get_template_part("partials/footer") ?>
