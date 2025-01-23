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
                                            <li><a href="<?php bloginfo("url")?>/services" class="section-link">Consultations</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php bloginfo("url")?>/services#servicemedecine">Médecine Générale</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/services#servicekine">Kinésithérapie</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/services#serviceinfi">Infirmerie</a></li>
                                                    <li><a href="<?php bloginfo("url")?>/services#serviceas">Assistance Sociale</a></li>
                                                </ul>
                                            </li>
                                            <li class="active menu-item-has-children"><a href="<?php bloginfo("url")?>/activites">Activités</a>
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

    
        <!-- main-area -->
        <main class="main-area fix">

            <!-- banner-area -->
            <div class="video-area video-bg page-bg" data-background="<?php bloginfo("template_url")?>/assets/img/lenoyerentre.png">
                <div class="video-bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Activités de promotion à la santé</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>/activites"><span>Activités</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-begin"><a href="<?php bloginfo("url")?>/activites#ponctuel"><span>Activités Ponctuelles</span></a></li>
                                        <li class="breadcrumb-item trail-item trail-end"><span><?php the_title(); ?></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    

            <!-- blog-area -->
            <section class="blog-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="blog--post--item">
                                <div class="blog--post--thumb">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                </div>
                                <div class="blog--post--content blog-details-content">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                        <li><a href="">Activité Ponctuelle</a></li>
                                            <?php the_field('horaires');?>
                                        </ul>
                                    </div>
                                    <h2 class="blog--post--title"><?php the_title(); ?></h2>
                                    <div class="post-text">
                                        <div class="blog-details-wrap">
                                        <p><?php the_field('description');?></p>
                                        </div>
                                        <div class="blog-details-wrap">
                                            <h3 class="title">Inscription</h3>
                                            <p><?php the_field('inscription');?></p>
                                        </div>
                                        <div class="blog-details-wrap">
                                            <h3 class="title">Prix de l'activité</h3>
                                            <p><?php the_field('prix');?></p>
                                        </div>
                                        <div class="blog-details-wrap border-none">
                                            <h3 class="title">Pour cette activité vous aurez besoin</h3>
                                            <div class="b-details-list">
                                                <ul class="list-wrap">
                                                <?php the_field('materiel_necessaire');?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="related-post mt-45">
                                        <h3>Activités Similaires</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-rp mb-45">
                                                    <div class="rp-thumb">
                                                        <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/abbaye.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="rp-content">
                                                        <span class="rp-date"><i class="far fa-calendar-alt"></i>24 Mars 2024</span>
                                                        <h4><a href="#">Visite de l'abbaye de Floreffe</a></h4>
                                                        <p>Gratuit</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-rp mb-45">
                                                    <div class="rp-thumb">
                                                        <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/promenade.jpeg" alt="img"></a>
                                                    </div>
                                                    <div class="rp-content">
                                                        <span class="rp-date"><i class="far fa-calendar-alt"></i>24 Mars 2024</span>
                                                        <h4><a href="#">Visite de l'abbaye d'Orval</a></h4>
                                                        <p>Gratuite</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="blog-avatar-wrap mb-45">
                                        <div class="blog-post-avatar-img">
                                            <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/Poker Face_PNG.png" alt="img">
                                        </div>
                                        <div class="bd-avatar-info">
                                            <span>Organisé par</span>
                                            <h4>Roman Parmentier</h4>
                                            <p>Accueillant et gestionnaire administratif à la maison médicale</p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <aside class="blog-sidebar pl-20">
                                <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Activités Ponctuelles</h3>
                                    </div>

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
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h5>
                                            <div class="rc-post-date">
                                                <ul class="list-wrap">
                                                <?php the_field('horaires');?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    wp_reset_query();
                                    ?>
                                    <!-- Loop PHP Fin-->
                                </div>
                                <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Activités Récurrentes</h3>
                                    </div>

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
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i><?php the_field('horaires');?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    wp_reset_query();
                                    ?>
                                    <!-- Loop PHP Fin-->
                                </div>
                                <!-- <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Categories</h3>
                                    </div>
                                    <div class="sidebar-cat">
                                        <ul class="list-wrap">
                                            <li><a href="#">Promenades Découvertes <span>26</span></a></li>
                                            <li><a href="#">Promenades Vertes<span>30</span></a></li>
                                            <li><a href="#">Cours de Vélo <span>71</span></a></li>
                                            <li><a href="#">Cours de Cuisine <span>56</span></a></li>
                                            <li><a href="#">Yoga <span></span></a></li>
                                            <li><a href="#">Tai Chi <span></span></a></li>
                                            <li><a href="#">Gym Douce <span></span></a></li>
                                            <li><a href="#">Atelier Couture <span></span></a></li>
                                            <li><a href="#">Petit Dejeuner Papote <span></span></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Never Miss News</h3>
                                    </div>
                                    <div class="sidebar-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div> 
                                 <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Instagram Feeds</h3>
                                    </div>
                                    <div class="sidebar-insta-post">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post01.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post02.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post03.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post04.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post05.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post06.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post07.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post08.jpg" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/blog/insta_post09.jpg" alt="img"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Popular Tags</h3>
                                    </div>
                                    <div class="widget-tag">
                                        <ul class="list-wrap">
                                            <li><a href="#">Popular</a></li>
                                            <li><a href="#">desgin</a></li>
                                            <li><a href="#">ux</a></li>
                                            <li><a href="#">usability</a></li>
                                            <li><a href="#">develop</a></li>
                                            <li><a href="#">icon</a></li>
                                            <li><a href="#">business</a></li>
                                            <li><a href="#">kit</a></li>
                                            <li><a href="#">consult</a></li>
                                            <li><a href="#">mouse</a></li>
                                            <li><a href="#">tech</a></li>
                                            <li><a href="#">keyboard</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="banner-widget">
                                    <div class="sidebar-banner">
                                        <a href="#">
                                            <img src="<?php bloginfo("template_url")?>/assets/img/blog/banner.jpg" alt="img">
                                        </a>
                                    </div>
                                </div> -->
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
