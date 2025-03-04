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
                                            <li class='active'><a href="<?php bloginfo("url")?>/about" class="section-link">Fonctionnement</a></li>
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
                        <a href="<?php bloginfo("url")?>"><img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/logo.png" alt="logo"></a>
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
                        <h2 class="title">Fonctionnement</h2>
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item trail-item trail-begin">
                                    <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                </li>
                                <li class="breadcrumb-item trail-item trail-end"><span>Fonctionnement</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- main-area -->
<main class="main-area fix">

        <!-- <section id="ingredient" class="ingredients-area-two section-py-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title section-title-two text-center mb-90">
                            <div class="sub-title">
                                <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                                Le Noyer qu'est ce que c'est ?
                                <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                            </div>
                            <h2 class="title">une maison médicale aux multiples facettes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8 order-0 order-lg-2">
                        <div class="ingredients-img-two">
                            <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/kine.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ingredients-item-wrap reverse-item">
                            <div class="ingredients-item-two wow fadeInUp" data-wow-delay=".1s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-vitamins"></i>
                                </div>
                                <div class="ingredients-content-two">
                                    <h3 class="title">Accessible à tous</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum.</p>
                                </div>
                            </div>
                            <div class="ingredients-item-two wow fadeInUp" data-wow-delay=".2s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-vitamin"></i>
                                </div>
                                <div class="ingredients-content-two">
                                    <h3 class="title">Promotion de la santé</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum.</p>
                                </div>
                            </div>
                            <div class="ingredients-item-two wow fadeInUp" data-wow-delay=".3s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-supplement"></i>
                                </div>
                                <div class="ingredients-content-two">
                                    <h3 class="title">Système de forfait</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-3">
                        <div class="ingredients-item-wrap">
                            <div class="ingredients-item-two wow fadeInUp" data-wow-delay=".4s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-vitamins"></i>
                                </div>
                                <div class="ingredients-content-two">
                                    <h3 class="title">Espace Patient</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum.</p>
                                </div>
                            </div>
                            <div class="ingredients-item-two wow fadeInUp" data-wow-delay=".5s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-vitamin"></i>
                                </div>
                                <div class="ingredients-content-two">
                                    <h3 class="title">Créations de liens</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum.</p>
                                </div>
                            </div>
                            <div class="ingredients-item-two wow fadeInUp" data-wow-delay=".6s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-supplement"></i>
                                </div>
                                <div class="ingredients-content-two">
                                    <h3 class="title">Activités Communes</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/fin.png" alt="triptyque">
                </div>
            </div>
            <div class="row justify-content-center big-tryptique">
                <div class="col-lg-12">
                   <!-- <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/asset 3.png" alt=""> -->
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/big.png" alt="triptyque">
                </div>
            </div>
            <div class="row justify-content-center big-triptyque">
                <div class="col-lg-12">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/fin.png" alt="triptyque">
                </div>
            </div>
            <div class="row justify-content-center mobile-tryptique ">
                <div class="col-lg-4 col-md-11 mil-mb-120">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/1.png" alt="triptyque">
                </div>
                <div class="col-lg-4 col-md-11 mil-mb-120">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/2.png" alt="triptyque">
                </div>
                <div class="col-lg-4 col-md-11 mil-mb-120">
                   <img src="<?php bloginfo("template_url")?>/assets/img/triptyque/3.png" alt="triptyque">
                </div>
            </div>
        </div>
    </section>
    <section id="ingredient" class="ingredients-area-two section-py-60">
        <div class="container">
            <div class="row justify-content-center triptyque-">
                <div class="col-lg-10">
                    <div class="section-title section-title-two text-center mb-90">
                        <h2 class="title">Notre zone d'inscription</h2>
                        <div class="col-lg-12 mt60">
                            <img class='zone' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/Zone-Site.png" alt="zone d'inscription">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
            <!-- features-product -->
            <section id="" class="features-products">
                <div class="container">


                    <!-- Loop PHP Debut-->
                    <?php
                    $loop = new WP_Query( array( 
                        'post_type' => 'fonctionnement', // Va rechercher le type de contenu “job”
                        'posts_per_page' => -1, // Affiche tout sans limite 
                        'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                        'order' => 'ASC', // Chronologique ou pas (DESC)
                            ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Ce qui doit être "bouclé" -->
                        <div class="features-products-wrap">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8">
                                    <div class="features-products-thumb wow fadeInUp" data-wow-delay=".2s">
                                        <div class="main-img">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                        </div>
                                        <!-- <img src="<?php bloginfo("template_url")?>/assets/img/products/features_product_shape01.png" alt="img" class="shape-img"> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="features-product-content">
                                        <h2 class="title">
                                            <?php the_title(); ?>
                                        </h2>
                                        <h6 class="features-product-quantity"><?php the_field('sous_titre');?></h6>
                                        <p>
                                            <?php the_field('paragraphe_1');?>
                                        </p>
                                        <p>
                                            <?php the_field('paragraphe_2');?>
                                        </p>    
                                        <p>
                                            <?php the_field('paragraphe_3');?>
                                        </p>
                                        <p> 
                                            <?php the_field('paragraphe_4');?>
                                        </p>
                                        <p>
                                            <?php the_field('paragraphe_5');?>
                                        </p>
                                        <p>
                                            <?php the_field('paragraphe_6');?>
                                        </p>
                                        <p>
                                            <?php the_field('paragraphe_7');?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_query();
                    ?>
                    <!-- Loop PHP Fin-->
                    
                </div>
                    <!-- <div class="features-products-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="features-products-thumb">
                                    <div class="main-img">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/products/features_product03.png" alt="img">
                                    </div>
                                    <img src="<?php bloginfo("template_url")?>/assets/img/products/features_product_shape03.png" alt="img" class="shape-img">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="features-product-content">
                                    <h2 class="title"><a href="shop-details.html">Max Mass 3xl</a></h2>
                                    <h6 class="features-product-quantity">High-strength, 4000IU</h6>
                                    <p>Vitamin D3 supplements are commonly recommended for people at risk for vitamin D deficiency. Low vitamin D levels cause depression, fatigue, and muscle weakness. Over time, vitamin D deficiency can lead to weak bones, rickets in children, and osteoporosis in adults. </p>
                                    <div class="features-product-bottom">
                                        <a href="shop-details.html" class="btn">Shop Now</a>
                                        <span class="price">$69.99 <span class="old-price">$89.99</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
