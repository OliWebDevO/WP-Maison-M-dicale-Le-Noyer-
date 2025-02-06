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
                                            <li><a href="<?php bloginfo("url")?>/reseau" class="section-link">Réseau</a>
                                            <li><a href="<?php bloginfo("url")?>/Journal" class="section-link">Journal</a>
                                            </li>
                                            <li><a href="<?php bloginfo("url")?>/espace-patients" class="section-link">Espace Patients</a>
                                            <li class='active'><a href="<?php bloginfo("url")?>/contact">Contact & Accès</a></li>
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
                        <h2 class="title">Contact & Accès</h2>
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item trail-item trail-begin">
                                    <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                </li>
                                <li class="breadcrumb-item trail-item trail-end"><span>Contact & Accès</span></li>
                            </ul>
                        </nav>
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
                        <a href="tel:<?php the_field('telephone');?>">
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
                                    <p class="contact-desc"><a href="mailto:<?php the_field('mail');?>">Mail</a> <br> <a href="<?php the_field('facebook');?>">Facebook</a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-9">
                        <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:34a76bdf-20cf-4bb5-a8c2-849b0a5a0117" target='_blank'>
                            <div class="contact-box contact-big contact-img-box">
                                <div class="contact-icon">
                                    <!-- <i class="fa-solid fa-clock"></i> -->
                                    <img class='horaires4' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/clock.png" alt="">
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
                                <img class='horaires' src="<?php the_field('photo_horaires');?>" alt="">
                                <img class='horaires2' src="<?php the_field('photo_complementaire_de_lhoraire');?>" alt="">
                            </div>
                        </a>
                    </div>

                    <?php endwhile;
                    wp_reset_query();
                    ?>
                    <!-- Loop PHP Fin-->

                    <div class="col-lg-6 col-md-6 col-sm-9">
                        <a href="https://www.gbbw.be/" target ='blank'>
                            <div class="contact-box contact-big">
                                <div class="contact-icon">
                                    <!-- <span class="overlay-icon"><i class="fas fa-check"></i></span> -->
                                    <img class='horaires4' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/clock.png" alt="">
                                </div>
                                <div class="contact-content">
                                    <h5 class="title">Garde</h5>
                                    <br class='mobile-hidden'><br class='mobile-hidden'><br class='mobile-hidden'>
                                    <p class="contact-desc"></p>
                                    <p>L'accueil reste joignable durant les heures de fermeture du temps de midi pour les urgences médicales.</p>
                                    <img class='horaires4' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/garde.jpeg" alt="">
                                    <p>Après 19h, les week-ends et les jours fériés ; Appelez la garde bruxelloise au :</p>
                                    <img class='horaires3' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/1733.png" alt="">
                                    <p>Ou rendez-vous aux postes de garde : <br> Chaussée de Haecht 579, 1030 schaerbeek <br> Rue d'Oultremont 54, 1040 etterbeek</p>
                                    <br class='mobile-hidden'>
                                    <br class='mobile-hidden'>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- contact-area-end -->

            <!-- contact-form-end -->
            <section class="contact-form-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div id="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5037.710998276746!2d4.386379077740994!3d50.852360071671825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c35c1c50886d%3A0xae67049eba86c3a7!2sMaison%20M%C3%A9dicale%20Le%20Noyer!5e0!3m2!1sfr!2sbe!4v1729265006886!5m2!1sfr!2sbe" allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form-wrap">
                                <div class="section-title mb-50">
                                    <p class="sub-title">newsletter</p>
                                    <h2 class="title">Rejoignez <br> la newsletter</h2>
                                </div>
                                 <!-- <form id="contact-form" action="inc/contact.php" class="contact-form" data-toggle="validator"> -->
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
        </main>
        <!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
