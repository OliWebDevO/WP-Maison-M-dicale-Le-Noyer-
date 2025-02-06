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
                                            <li class="active menu-item-has-children"><a href="<?php bloginfo("url")?>/equipe" class="section-link">Équipe</a>
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


        <!-- main-area -->
        <main class="main-area fix">

            <!-- banner-area -->
            <div class="video-area video-bg page-bg" data-background="<?php bloginfo("template_url")?>/assets/img/lenoyerentre.png">
                <div class="video-bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">L'équipe</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Équipe</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                        <!-- Equipe-Accueil-area -->
                        <section id="accueil" class="home-shop-area team-area  pt-130">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="section-title section-title-team section-title-two mb-60">
                                            <div class="sub-title">
                                                <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                                                L'équipe Médicale du Noyer
                                                <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                                            </div>
                                            <h2 class="title">Accueil</h2>
                                        </div>
                                    </div>
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
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                                </div>
                            </div>
                        </section>
                        <!-- Equipe-Accueil-area-end -->

                        <!-- Equipe-Medecin-area -->
                        <section id="medecin" class="home-shop-area team-area  pt-130">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="section-title section-title-team section-title-two mb-60">
                                            <h2 class="title">Médecins</h2>
                                        </div>
                                    </div>
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
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                                </div>
                            </div>
                        </section>
                    <!-- Equipe-Medecin-area-end -->

                    <!-- Equipe-Assistant-Medecin-area -->
                    <section id="assistant" class="home-shop-area team-area pt-130">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="section-title section-title-team section-title-two mb-60">
                                        <h2 class="title">Assistant-e-s en Médecine Générale</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row home-shop-active">
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
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                            </div>
                        </div>
                    </section>
                <!-- Equipe-Assistant-Medecin-area-end -->

                <!-- Equipe-Kinésithérapie-area -->
                <section id="kine" class="home-shop-area team-area pt-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-8">
                                <div class="section-title section-title-team section-title-two mb-60">
                                    <h2 class="title">Kinésithérapeutes</h2>
                                </div>
                            </div>
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
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                        </div>
                    </div>
                </section>
                <!-- Equipe-Kinésithérapie-area-end -->

                <!-- Equipe-Medecin-area -->
                <section id="infirmier" class="home-shop-area team-area pt-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-8">
                                <div class="section-title section-title-team section-title-two mb-60">
                                    <h2 class="title">Infirmier-ère-s</h2>
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
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                        </div>
                    </div>
                </section>
                <!-- Equipe-Medecin-area-end -->

                <!-- Equipe-Medecin-area -->
                <section id="as" class="home-shop-area team-area pt-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-8">
                                <div class="section-title section-title-team section-title-two mb-60">
                                    <h2 class="title">Assistante Sociale</h2>
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
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                        </div>
                    </div>
                </section>
                <!-- Equipe-Medecin-area-end -->
                                 
                <!-- Equipe-Medecin-area -->
                <section id="admin" class="home-shop-area team-area pt-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="section-title section-title-team section-title-two mb-60">
                                    <h2 class="title">Gestionnaires Administratifs</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row home-shop-active">
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
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                        </div>
                    </div>
                </section>
                <!-- Equipe-Medecin-area-end -->

                <!-- Equipe-Medecin-area -->
                <section id="coordinatrice" class="home-shop-area team-area pt-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-8">
                                <div class="section-title section-title-team section-title-two mb-60">
                                    <h2 class="title">Coordinatrices</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row home-shop-active">
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
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                        </div>
                    </div>
                </section>
                <!-- Equipe-Medecin-area-end -->

                <!-- Equipe-Medecin-area -->
                <section id="entretien" class="home-shop-area team-area  pt-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-8">
                                <div class="section-title section-title-team section-title-two mb-60">
                                    <h2 class="title">Entretien</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row home-shop-active">
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
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="membre de l'équipe">
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
                <!-- Equipe-Medecin-area-end -->




        </main>
        <!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
