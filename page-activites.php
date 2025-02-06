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
                                            <li class=" active menu-item-has-children"><a href="<?php bloginfo("url")?>/activites">Activités</a>
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
                                <h2 class="title">Activités de promotion à la santé</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Activités</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- contact-form-end -->
            <section class="contact-form-area journal-form-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form-wrap">
                                <div class="section-title journal-contact mb-50">
                                    <p class="sub-title">Pour vous tenir au courant des activités proposées, rejoignez la newsletter</p>
                                    <h2 class="title">Inscription </h2>
                                </div>
                                <form action="https://api.web3forms.com/submit" method="POST" class="contact-form" data-toggle="validator">
                                    <input type="hidden" name="access_key" value="3623632f-c6b3-4739-a3fc-5351b2aac174">
                                    <input type="hidden" name="subject" value="Vous avez reçu un nouveau formulaire de la part d'un visiteur de votre site web">
                                    <input type="hidden" name="from_name" value="Notification | lenoyer.be">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="full-name">Nom</label>
                                                <input name="Nom" type="text" id="full-name" placeholder="Votre nom" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="email">Email</label>
                                                <input name="Email" type="email" id="email" placeholder="Votre email" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp cb">
                                                <fieldset>
                                                    <!-- <label class='cb-title' for="choix">Inscription</label> -->
                                                    <div class='cb-flex m0'>
                                                        <input name="inscription à la newsletter" type="checkbox" id="check1" onclick="document.getElementById('check2').checked = false" />
                                                        <label for="check1">S'inscrire à la newsletter </label>
                                                    </div>
                                              
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp cb">
                                                <fieldset>
                                                    <div class='cb-flex m0'>
                                                        <input name="désinscription à la newsletter" type="checkbox" id="check2" onclick="document.getElementById('check1').checked = false"/>
                                                        <label for="check2">Se désinscrire de la newsletter </label>
                                                    </div>

                                         
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="redirect" value="<?php bloginfo("url")?>/succes">
                                    <div class="form-btn">
                                        <button type="submit" class="btn">Rejoindre</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-form-area-end -->

             <!-- blog-post-area -->
             <section id="ponctuel" class="blog-post-area-two section-pt-130 section-pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title section-title-two text-center mb-70">
                                <span class="sub-title">
                                    <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                                    Nos Prochaines Activités
                                    <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                                </span>
                                <h2 class="title">Activités ponctuelles</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="col-lg-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="photo de l'événement"></a>
                                </div>
                                <div class="blog-post-content-two">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><a href=""><?php the_field('type_dactivite');?></a></li>
                                            <?php the_field('horaires');?>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                                    <p> <?php the_field('description');?></p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="prix">
                                        <?php the_field('prix');?>
                                    </p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="inscription">
                                        <?php the_field('inscription');?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <!-- Loop PHP Fin-->
                    </div>
                </div>
            </section>
            <!-- blog-post-area-end -->

            <!-- tg-features-area -->
            <section id="recurent" class="tg-features-area activites section-pt-130 section-pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title section-title-two text-center mb-70">
                                <span class="sub-title">
                                    <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                                    liste des activités
                                    <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                                </span>
                                <h2 class="title">Activités récurrentes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="tg-features-inner">
                        <div class="row justify-content-center">

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
                            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php the_field('pictogramme');?>" alt="picto">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title"><?php the_title(); ?></h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="date">
                                            <?php the_field('horaires');?>
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="prix">
                                        <?php the_field('prix');?>
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="inscription">
                                            <?php the_field('inscription');?>
                                        </p>
                                        <a href="<?php the_permalink()?>">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;
                            wp_reset_query();
                            ?>
                            <!-- Loop PHP Fin-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- tg-features-area-end -->

        </main>
        <!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
