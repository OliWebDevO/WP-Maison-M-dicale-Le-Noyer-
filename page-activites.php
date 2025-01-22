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
                                            <li class=" menu-item-has-children"><a href="<?php bloginfo("url")?>" class="section-link">Accueil</a>
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
                                <form id="contact-form" action="inc/contact.php" class="contact-form" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="full-name">Nom</label>
                                                <input type="text" id="full-name" placeholder="Votre nom" required="required" data-error="Veuillez écrire votre nom.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" placeholder="Votre email" required="required" data-error="Veuillez introduire votre email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp cb">
                                                <fieldset>
                                                    <div class='cb-flex m0'>
                                                        <input name='check-news' type="radio" id="check1" name="check1"/>
                                                        <label for="check1">S'inscrire à la newsletter </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp cb">
                                                <fieldset>
                                                    <div class='cb-flex m0'>
                                                        <input name='check-news' type="radio" id="check1" name="check2"/>
                                                        <label for="check2">Se désinscrire de la newsletter </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn">
                                        <button type="submit" class="btn">Envoyer</button>
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
                        <div class="col-lg-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="<?php bloginfo("url")?>/activitessingle"><img src="<?php bloginfo("template_url")?>/assets/img/activités/promenade.jpeg" alt="img"></a>
                                </div>
                                <div class="blog-post-content-two">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><a href="<?php bloginfo("url")?>/activitessingle">Promenade Découvertes</a></li>
                                            <li><a href="<?php bloginfo("url")?>/activitessingle">Jeudi 04 octobre 2024 à 13h10</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="<?php bloginfo("url")?>/activitessingle">Visite de l'abbaye de la Cambre</a></h2>
                                    <p>Roman vous emmène visiter "l'Abbaye de la Cambre" , lors de la prochaine "promenade découverte".</p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                        Activité Gratuite
                                    </p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                        Inscription : roman.parmentier@lenoyer.be ou  au 02/734 24 53
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="<?php bloginfo("url")?>/activitessingle"><img src="<?php bloginfo("template_url")?>/assets/img/activités/velo.png" alt="img"></a>
                                </div>
                                <div class="blog-post-content-two">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><a href="blog.html">initation au vélo</a></li>
                                            <li><a href="blog.html">Mercredi 11/09 de 9h à 11h30</a></li>
                                            <li><a href="blog.html">Mercredi 18/09 de 9h à 11h30</a></li>
                                            <li><a href="blog.html">Mercredi 25/09 de 9h à 11h30</a></li>
                                            <li><a href="blog.html">Mercredi 02/10 de 9h à 11h30</a></li>
                                            <li><a href="blog.html">Mercredi 09/10 de 9h à 11h30</a></li>
                                            <li><a href="blog.html">Mercredi 16/10 de 9h à 11h30</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="<?php bloginfo("url")?>/activitessingle">COURS DE VÉLO DÉBUTANT</a></h2>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                        Activité Gratuite
                                    </p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                        Inscription : corinne.gilon@lenoyer.be ou au 02/734 24 53
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="<?php bloginfo("url")?>/activitessingle"><img src="<?php bloginfo("template_url")?>/assets/img/activités/taichi.jpg" alt="img"></a>
                                </div>
                                <div class="blog-post-content-two">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><a href="<?php bloginfo("url")?>/activitessingle">Promenade Découvertes</a></li>
                                            <li><a href="<?php bloginfo("url")?>/activitessingle">Jeudi 04 octobre 2024 à 13h10</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="<?php bloginfo("url")?>/activitessingle">Visite de l'abbaye de la Cambre</a></h2>
                                    <p>Roman vous emmène visiter "l'Abbaye de la Cambre" , lors de la prochaine "promenade découverte".</p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                        Activité Gratuite
                                    </p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                        Inscription : roman.parmentier@lenoyer.be ou  au 02/734 24 53
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="<?php bloginfo("url")?>/activitessingle"><img src="<?php bloginfo("template_url")?>/assets/img/activités/cuisine.jpg" alt="img"></a>
                                </div>
                                <div class="blog-post-content-two">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><a href="<?php bloginfo("url")?>/activitessingle">Promenade Découvertes</a></li>
                                            <li><a href="<?php bloginfo("url")?>/activitessingle">Jeudi 04 octobre 2024 à 13h10</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="<?php bloginfo("url")?>/activitessingle">Visite de l'abbaye de la Cambre</a></h2>
                                    <p>Roman vous emmène visiter "l'Abbaye de la Cambre" , lors de la prochaine "promenade découverte".</p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                        Activité Gratuite
                                    </p>
                                    <p>
                                        <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                        Inscription : roman.parmentier@lenoyer.be ou  au 02/734 24 53
                                    </p>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - activité récurrente - gym douce.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Gym Douce <br> Seniors</h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="">
                                            Lundi de 10h45 à 11h45
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                            Petite participation financière demandée
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                            Inscription obligatoire
                                        </p>
                                        <a href="<?php bloginfo("url")?>/activitessingle">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - activité récurrente - gym douce.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Gym Douce <br> Remise en forme</h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="">
                                            Lundi de 12h00 à 13h00
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                            Petite participation financière demandée
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                            Inscription obligatoire
                                        </p>
                                        <a href="<?php bloginfo("url")?>/activitessingle">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - activité récurrente - atelier couture.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Atelier Couture</h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="">
                                            Mardi & Mercredi de 11h00 à 12h00
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                            Petite participation financière demandée
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                            Inscription obligatoire
                                        </p>
                                        <a href="<?php bloginfo("url")?>/activitessingle">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                       <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - activité récurrente - tai chi.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Tai Chi</h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="">
                                           Mercredi de 16h00 à 17h30
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                            Petite participation financière demandée
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                            Inscription obligatoire
                                        </p>
                                        <a href="<?php bloginfo("url")?>/activitessingle">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".4">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - activité récurrente - yoga.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Yoga</h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="">
                                            Jeudi de 17h30 à 18h30
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                            Petite participation financière demandée
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                            Inscription obligatoire
                                        </p>
                                        <a href="<?php bloginfo("url")?>/activitessingle">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - activité récurrente - promenade découvertes.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Promenade Découvertes</h4>
                                        <p>1er jeudi du mois à 9h30s.</p>
                                        <a href="contact.html">En savoir plus</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tg-features-item">
                                    <div class="tg-features-icon">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - ouverture.png" alt="">
                                    </div>
                                    <div class="tg-features-content">
                                        <h4 class="title">Petit dejeuner papote</h4>
                                        <p> 
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - date.png" alt="">
                                           Premier Jeudi du mois
                                        </p>
                                        <p><img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - prix.png" alt="">
                                            Gratuit
                                        </p>
                                        <p>
                                            <img class="picto-activites" src="<?php bloginfo("template_url")?>/assets/img/Pictogrammes/sans titre - vert - général - inscription.png" alt="">
                                            Sans Inscription
                                        </p>
                                        <a href="<?php bloginfo("url")?>/activitessingle">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tg-features-area-end -->

        </main>
        <!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
