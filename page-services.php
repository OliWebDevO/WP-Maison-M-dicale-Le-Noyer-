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
                                            <li class="menu-item-has-children"><a href="<?php bloginfo("url")?>" class="section-link">Accueil</a>
                                            </li>
                                            <li><a href="<?php bloginfo("url")?>/about" class="section-link">Fonctionnement</a></li>
                                            <li class='active'><a href="<?php bloginfo("url")?>/services" class="section-link">Consultations</a>
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
                                            <li><a href="<?php bloginfo("url")?>/reseau" class="section-link">Réseau</a>
                                            <li><a href="<?php bloginfo("url")?>/Journal" class="section-link">Journal</a>
                                            </li>
                                            <li><a href="<?php bloginfo("url")?>/espace-patients" class="section-link">Espace Patients</a>
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


     <!-- banner-area -->
     <div class="video-area video-bg page-bg" data-background="<?php bloginfo("template_url")?>/assets/img/lenoyerentre.png">
        <div class="video-bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb-content text-center">
                        <h2 class="title">Consultations</h2>
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item trail-item trail-begin">
                                    <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                </li>
                                <li class="breadcrumb-item trail-item trail-end"><span>Consultations</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- main-area -->
<main class="main-area fix">

<!-- Ingredients-area -->
<section id="ingredient" class="ingredients-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-8">
                <div class="section-title section-title-team section-title-two mb-60">
                    <div class="sub-title">
                        <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                        Les différents pôles de la maison médicale
                        <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="ingredients-img">
                    <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/kine.png" alt="img">
                </div>
            </div>
            <div class="col-xl-7 col-lg-9">
                <div class="ingredients-items-wrap">
                    <!-- <div class="section-title mb-60">
                        <p class="sub-title">.. Les différents pôles de la maison médicale ..</p>
                    </div> -->
                    <div class="row justify-content-center justify-content-lg-center">
                        <div class="col-md-6 col-sm-8">
                            <a href="<?php bloginfo("url")?>/services#servicemedecine">
                                <div class="features-item service-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="features-icon">
                                        <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - métier - médecin.png" alt="">
                                    </div>
                                    <div class="features-content">
                                        <h4 class="title">Médecine Générale</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <a href="<?php bloginfo("url")?>/services#servicekine">
                                <div class="features-item service-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="features-icon">
                                        <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - métier - kiné.png" alt="">
                                    </div>
                                    <div class="features-content">
                                        <h4 class="title">Kinésithérapie</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <a href="<?php bloginfo("url")?>/services#serviceinfi">
                                <div class="features-item service-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="features-icon">
                                        <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - métier - infirmier.png" alt="">
                                    </div>
                                    <div class="features-content">
                                        <h4 class="title">Infirmerie</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <a href="<?php bloginfo("url")?>/services#serviceas">
                                <div class="features-item service-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="features-icon">
                                        <img class="service-icon" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - blanc - métier - AS.png" alt="">
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
<!-- Ingredients-area-end -->

<!-- Loop PHP Debut-->
<?php
  $loop = new WP_Query( array( 
      'post_type' => 'consultation', // Va rechercher le type de contenu “job”
      'posts_per_page' => 1, // Affiche tout sans limite 
      'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'name', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->
 <!-- Médecine Générale -->
<section id="servicemedecine" class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo' src="<?php the_post_thumbnail_url(); ?>" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title"><?php the_title(); ?></h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <?php the_field('informations_sur_le_secteur');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <?php the_field('retard_et_annulation');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <?php the_field('honoraires');?>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="<?php the_field('preparer_sa_consultation');?>" target="_blank"><img class='service-photo' src="<?php the_field('preparer_sa_consultation_image');?>" alt="img"></a>
                            </div>
<?php endwhile;
wp_reset_query();
?>
<!-- Loop PHP Fin-->

                            <!-- Equipe-Medecin-area -->
                            <section id="medecin" class="home-shop-area team-area ">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-8">
                                            <div class="section-title section-title-two mb-60">
                                                <h2 class="title">Nos Médecins</h2>
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
                            <!-- Equipe-Medecin-area-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loop PHP Debut-->
<?php
  $loop = new WP_Query( array( 
      'post_type' => 'consultation', // Va rechercher le type de contenu “job”
      'posts_per_page' => 1, // Affiche tout sans limite 
      'offset' => 1, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'name', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->
<!-- Kinésithérapie -->
<section id="servicekine" class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo' src="<?php the_post_thumbnail_url(); ?>" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title"><?php the_title(); ?></h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <?php the_field('informations_sur_le_secteur');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Prise en charge</h3>
                                <div class="b-details-list">
                                    <ul class="list-wrap">
                                        <?php the_field('prise_en_charge');?>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Consultations</h3>
                                <?php the_field('consultations');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <?php the_field('retard_et_annulation');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <?php the_field('honoraires');?>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="<?php the_field('preparer_sa_consultation');?>" target="_blank"><img class='service-photo' src="<?php the_field('preparer_sa_consultation_image');?>" alt="img"></a>
                            </div>

<!-- Ce qui doit être "bouclé" - Fin -->
<?php endwhile;
wp_reset_query();
?>
<!-- Loop PHP Fin-->
                             
                            <!-- Equipe-Kinésithérapie-area -->
                            <section class="home-shop-area team-area">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-8">
                                            <div class="section-title section-title-two mb-60">
                                                <h2 class="title">Nos Kinésithérapeutes</h2>
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
                            <!-- Equipe-Kinésithérapie-area-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loop PHP Debut-->
<?php
  $loop = new WP_Query( array( 
      'post_type' => 'consultation', // Va rechercher le type de contenu “job”
      'posts_per_page' => 1, // Affiche tout sans limite 
      'offset' => 2, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'name', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->
<!-- Infirmerie -->
<section id="serviceinfi" class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo kine-service' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/Medical office 8.png" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title"><?php the_title(); ?></h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <?php the_field('informations_sur_le_secteur');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <?php the_field('retard_et_annulation');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <?php the_field('honoraires');?>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="<?php the_field('preparer_sa_consultation');?>" target="_blank"><img class='service-photo' src="<?php the_field('preparer_sa_consultation_image');?>" alt="img"></a>
                            </div>
<!-- Ce qui doit être "bouclé" - Fin -->
<?php endwhile;
wp_reset_query();
?>
<!-- Loop PHP Fin-->
                                <!-- Equipe-Infi-area -->
                                <section class="home-shop-area team-area">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-8">
                                            <div class="section-title section-title-two mb-60">
                                                <h2 class="title">Nos Infirmier-ère-s</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row home-shop-active">
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
                            <!-- Equipe-infi-area-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AS -->
<!-- Loop PHP Debut-->
<?php
  $loop = new WP_Query( array( 
      'post_type' => 'consultation', // Va rechercher le type de contenu “job”
      'posts_per_page' => 1, // Affiche tout sans limite 
      'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'name', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->
<section id="serviceas" class="blog-area pt-120 pb-120">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo' src="<?php the_post_thumbnail_url(); ?>" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title"><?php the_title(); ?></h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <?php the_field('informations_sur_le_secteur');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <?php the_field('retard_et_annulation');?>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <?php the_field('honoraires');?>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="<?php the_field('preparer_sa_consultation');?>" target="_blank"><img class='service-photo' src="<?php the_field('preparer_sa_consultation_image');?>" alt="img"></a>
                            </div>

<!-- Ce qui doit être "bouclé" - Fin -->
<?php endwhile;
wp_reset_query();
?>
<!-- Loop PHP Fin-->
                            <section class="home-shop-area team-area">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-8">
                                            <div class="section-title section-title-two mb-60">
                                                <h2 class="title"> Notre Assistante Sociale</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row home-shop-active">

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
                            <!-- Equipe-AS-area-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</main>
<!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
