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
                            <p>Mon médecin généraliste s’intéresse à tous les aspects de ma santé. Il vérifie des indicateurs de santé en lien avec mon âge, mon mode de vie... Il est lié au secret professionnel. Mon médecin généraliste ne fait pas que me soigner, il fait également de la médecine préventive. C’est une source d’informations.</p>

                            <p>Pour aller voir un spécialiste, je peux passer par l’avis de mon médecin généraliste, cela m’évitera des examens inutiles. Certains médecins généralistes sont plus expérimentés dans un domaine ou un autre (gynécologie, pédiatrie, dermatologie,..). 95% des problèmes de santé peuvent être soignés par mon médecin généraliste.</p>

                            <p>Il passe le relais à un spécialiste si nécessaire mais il continue à me suivre. Il peut obtenir tous les rapports que possèdent d’autres médecins à propos de moi. Les médicaments prescrits par un spécialiste peuvent être renouvelés par lui.</p>

                           <p> Il reçoit en consultation à la maison médicale et à domicile.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <p>Les patients en retard de 10 minutes à leur rendez-vous ne sont plus reçus par le médecin, ceci afin de garantir à tous (médecin comme patient) une consultation dans de bonnes conditions.</p>
                                <p>En cas d’empêchement, il est important de prévenir la maison médicale le plus rapidement possible afin que le rendez-vous prévu puisse être proposé à un autre patient et qu’un nouveau rendez-vous soit organisé pour le patient empêché.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <p>Le prix des consultations de médecine générale, de kinésithérapie et les soins infirmiers sont compris dans l’abonnement forfaitaire aux soins souscrit par le patient à la signature de son contrat d'inscription avec la maison médicale.</p>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:fb321af2-0fb8-4cdf-b5f2-f31f5c3eba1c" target="_blank"><img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/consultation.png" alt="img"></a>
                            </div>
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
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/sana.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Sana Abboud</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/pauline.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Pauline Barbier</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/benjamin.png" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Benjamin Fauquert</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/quentin.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Quentin Vanderhofstadt</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/kiwi.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Kiwi Farber</a></h4>
                                                </div>
                                            </div>
                                        </div>
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
<?php endwhile;
wp_reset_query();
?>
<!-- Loop PHP Fin-->

<!-- Médecine Générale -->
<section id="servicemedecine" class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/04_medical_clinic.png" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title">Médecine Générale</h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <p>Mon médecin généraliste s’intéresse à tous les aspects de ma santé. Il vérifie des indicateurs de santé en lien avec mon âge, mon mode de vie... Il est lié au secret professionnel. Mon médecin généraliste ne fait pas que me soigner, il fait également de la médecine préventive. C’est une source d’informations.</p>

                            <p>Pour aller voir un spécialiste, je peux passer par l’avis de mon médecin généraliste, cela m’évitera des examens inutiles. Certains médecins généralistes sont plus expérimentés dans un domaine ou un autre (gynécologie, pédiatrie, dermatologie,..). 95% des problèmes de santé peuvent être soignés par mon médecin généraliste.</p>

                            <p>Il passe le relais à un spécialiste si nécessaire mais il continue à me suivre. Il peut obtenir tous les rapports que possèdent d’autres médecins à propos de moi. Les médicaments prescrits par un spécialiste peuvent être renouvelés par lui.</p>

                           <p> Il reçoit en consultation à la maison médicale et à domicile.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <p>Les patients en retard de 10 minutes à leur rendez-vous ne sont plus reçus par le médecin, ceci afin de garantir à tous (médecin comme patient) une consultation dans de bonnes conditions.</p>
                                <p>En cas d’empêchement, il est important de prévenir la maison médicale le plus rapidement possible afin que le rendez-vous prévu puisse être proposé à un autre patient et qu’un nouveau rendez-vous soit organisé pour le patient empêché.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <p>Le prix des consultations de médecine générale, de kinésithérapie et les soins infirmiers sont compris dans l’abonnement forfaitaire aux soins souscrit par le patient à la signature de son contrat d'inscription avec la maison médicale.</p>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:fb321af2-0fb8-4cdf-b5f2-f31f5c3eba1c" target="_blank"><img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/consultation.png" alt="img"></a>
                            </div>
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
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/sana.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Sana Abboud</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/pauline.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Pauline Barbier</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/benjamin.png" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Benjamin Fauquert</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/quentin.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Quentin Vanderhofstadt</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/kiwi.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Kiwi Farber</a></h4>
                                                </div>
                                            </div>
                                        </div>
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

<!-- Kinésithérapie -->
<section id="servicekine" class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo kine-service' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/Orthopedic Physiotherapy.png" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title">Kinésithérapie</h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <p>Pour aller chez le kiné il faut avoir une prescription du médecin. Ensuite, il y a un rendez-vous en consultation et se déplace également à domicile lorsque c’est nécessaire. La prise en charge en kinésithérapie cible principalement les troubles d’origines neuro-musculo-squelettique en travaillant avec le patient pour soulager les symptômes aigus ou chroniques et retrouver sa fonctionnalité.</p>
                            <p>Mais vous pouvez aussi nous solliciter pour des troubles de l’équilibre (vestibulaire ou autre), de la mâchoire ou de la tête et du cou par exemple. Bienvenue aussi aux mamans en pré - et post – natal ainsi que tous ceux qui souhaitent un accompagnement à la remise en mouvement.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Prise en charge</h3>
                                <div class="b-details-list">
                                    <ul class="list-wrap">
                                        <li><i class="fas fa-check"></i>La rhumatologie et les problèmes de douleurs chroniques (arthrose, fibromyalgie…)
                                        </li>
                                        <li><i class="fas fa-check"></i>L’orthopédie : traitements post-opératoire (fracture, suture des tendons, prothèses de la hanche, du genou…), douleurs de dos</li>
                                        <li><i class="fas fa-check"></i>
                                        La traumatologie : problèmes liés à la pratique d’un sport, entorses, fractures, tendinites</li>
                                        <li><i class="fas fa-check"></i>La perte d’autonomie : troubles de la marche, troubles de l’équilibre, altération de l’état général</li>
                                        <li><i class="fas fa-check"></i>L’uro-gynécologie de base : rééducation du périnée après l’accouchement, incontinence urinaire</li>
                                        <li><i class="fas fa-check"></i>Le traitement viscéral ; constipation</li>
                                        <li><i class="fas fa-check"></i>La gestion du stress : hyperventilation, tensions, stress</li>
                                        <li><i class="fas fa-check"></i>Le drainage lymphatique manuel : œdème post-opératoire, gonflement des jambes</li>
                                        <li><i class="fas fa-check"></i>La kinésithérapie respiratoire : bronchite chronique, bronchiolite</li>
                                        <li><i class="fas fa-check"></i>La kinésithérapie maxillo-faciale : dysfonctions de l’articulation temporo-mandibulaire (ATM), douleurs aux mâchoires</li>
                                        <li><i class="fas fa-check"></i>La kinésithérapie neurologique : récupération après un AVC (accident vasculaire cérébral), maladie de Parkinson</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Consultations</h3>
                                <p>Un premier rendez-vous pour les séances de kinésithérapie est donné par les accueillantes. Les autres rendez-vous sont donnés par les kinés eux-mêmes selon leur disponibilité.</p>
                                <p>Il est impératif d’avoir une prescription d’un médecin pour commencer de la kinésithérapie. Cette prescription doit être présentée à l’accueil ou lors de la première sance de kinésithérapie.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <p>Les patients en retard de 10 minutes à leur rendez-vous ne sont plus reçus par le kinésithérapeute, ceci afin de garantir à tous (kinésithérapeute comme patient) une consultation dans de bonnes conditions.</p>
                                <p>En cas d’empêchement, il est important de prévenir la maison médicale le plus rapidement possible afin que le rendez-vous prévu puisse être proposé à un autre patient et qu’un nouveau rendez-vous soit organisé pour le patient empêché.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <p>Le prix des consultations de médecine générale, de kinésithérapie et les soins infirmiers sont compris dans l’abonnement forfaitaire aux soins souscrit par le patient à la signature de son contrat d'inscription avec la maison médicale.</p>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:fb321af2-0fb8-4cdf-b5f2-f31f5c3eba1c" target="_blank"><img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/consultation.png" alt="img"></a>
                            </div>
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
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/clemence.png" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Clémence Nelis</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/juliette.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Juliette Demey</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/abdelkrim.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Abdelkrim Alizazou</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/corinne.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Corinne Gilon</a></h4>
                                                </div>
                                            </div>
                                        </div>
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
                        <h2 class="blog--post--title">Infirmerie</h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <p>Les infirmier.e.s sont sur le terrain : à la fois à la maison médicale sur rendez-vous et lors du dispensaire et à domicile. Elles/ils sont en contact direct avec le patient. La transmission d’informations et l’observation constitue d’ailleurs des rôles primordiaux de l’infirmier.e.</p>
                            <p>Les types de soins réalisés à la maison médicale sont très variés, comme les prises de sang, les vaccins, le retrait de bouchons d’oreilles, des injections, la prise de la tension artérielle, le suivi diabétique avec le contrôle des pieds, des consultations d’éducation à la santé, … Les soins réalisés à domicile sont davantage des aide à la toilette, le remplissage de piluliers, la prise de paramètres, les soins de plaies dont ceux post-opératoires, …</p>
                            <p>Nos infis sont aussi formés à l’accompagnement de fin de vie.</p>
                            </div>
                            <!-- <div class="blog-details-wrap">
                                <h3 class="title">Prise en charge</h3>
                                <div class="b-details-list">
                                    <ul class="list-wrap">
                                        <li><i class="fas fa-check"></i>La rhumatologie et les problèmes de douleurs chroniques (arthrose, fibromyalgie…)
                                        </li>
                                        <li><i class="fas fa-check"></i>L’orthopédie : traitements post-opératoire (fracture, suture des tendons, prothèses de la hanche, du genou…), douleurs de dos</li>
                                        <li><i class="fas fa-check"></i>
                                        La traumatologie : problèmes liés à la pratique d’un sport, entorses, fractures, tendinites</li>
                                        <li><i class="fas fa-check"></i>La perte d’autonomie : troubles de la marche, troubles de l’équilibre, altération de l’état général</li>
                                        <li><i class="fas fa-check"></i>L’uro-gynécologie de base : rééducation du périnée après l’accouchement, incontinence urinaire</li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="blog-details-wrap">
                                <h3 class="title">Consultations</h3>
                                <p>Un premier rendez-vous pour les séances de kinésithérapie est donné par les accueillantes. Les autres rendez-vous sont donnés par les kinés eux-mêmes selon leur disponibilité.</p>
                                <p>Il est impératif d’avoir une prescription d’un médecin pour commencer de la kinésithérapie. Cette prescription doit être présentée à l’accueil ou lors de la première sance de kinésithérapie.</p>
                            </div> -->
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <p>Les patients en retard de 10 minutes à leur rendez-vous ne sont plus reçus par l'infirmier.e.s, ceci afin de garantir à tous (infirmier.e comme patient) une consultation dans de bonnes conditions.</p>
                                <p>En cas d’empêchement, il est important de prévenir la maison médicale le plus rapidement possible afin que le rendez-vous prévu puisse être proposé à un autre patient et qu’un nouveau rendez-vous soit organisé pour le patient empêché.</p>
                            </div>
                            <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <p>Le prix des consultations de médecine générale, de kinésithérapie et les soins infirmiers sont compris dans l’abonnement forfaitaire aux soins souscrit par le patient à la signature de son contrat d'inscription avec la maison médicale.</p>
                            </div>
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:fb321af2-0fb8-4cdf-b5f2-f31f5c3eba1c" target="_blank"><img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/consultation.png" alt="img"></a>
                            </div>
                                <!-- Equipe-Medecin-area -->
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
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/laura.png" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Laura Lozano</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/vincent.jpeg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Vincent Vrijens</a></h4>
                                                </div>
                                            </div>
                                        </div>
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

<!-- Infirmerie -->
<section id="serviceas" class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="blog--post--item">
                    <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                        <img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/04_medical_clinic_2.png" alt="img">
                    </div>
                    <div class="blog--post--content blog-details-content">
                        <h2 class="blog--post--title">Assistance Sociale</h2>
                        <div class="blog--post--meta mb-20">
                        </div>
                        <div class="post-text">
                            <div class="blog-details-wrap">
                            <p>L’assistante sociale participe à la prise en charge globale du.de la patient.e dans la maison médicale et peut proposer des solutions complémentaires aux soins prodigués par les soingnant.e.s. Nous essayerons de trouver ensemble des réponses adéquates à vos demandes. L’assistante sociale prend en compte les aspects plus larges participant à votre santé (logement, emploi, environnement, budget…).</p>

                            <p>- Un travail social individuel : information/orientation vers les services adéquats et d’accompagnement </p>

                            <p>- Un travail de réseau : en collaboration avec les associations du quartier et les services spécialisés, pour un soutien de première ligne </p>

                            <p>C’est donc un accompagnement varié : en cas de problèmes financiers ; pour vous aider dans la mise en place d’une aide à la maison ; vous informer quant à des questions juridiques générales ; vous accompagner pour faire valoir vos droits à des allocations ou à des avantages sociaux (allocations de chômage, allocations pour personnes handicapées, Revenu d’Intégration Sociale…) ; vous accompagner pour régler des problèmes administratifs (mutuelle, ONEM, CPAS, commune ou autres institutions) et la gestion de votre quotidien.</p>
                            </div>
                            <!-- <div class="blog-details-wrap">
                                <h3 class="title">Prise en charge</h3>
                                <div class="b-details-list">
                                    <ul class="list-wrap">
                                        <li><i class="fas fa-check"></i>La rhumatologie et les problèmes de douleurs chroniques (arthrose, fibromyalgie…)
                                        </li>
                                        <li><i class="fas fa-check"></i>L’orthopédie : traitements post-opératoire (fracture, suture des tendons, prothèses de la hanche, du genou…), douleurs de dos</li>
                                        <li><i class="fas fa-check"></i>
                                        La traumatologie : problèmes liés à la pratique d’un sport, entorses, fractures, tendinites</li>
                                        <li><i class="fas fa-check"></i>La perte d’autonomie : troubles de la marche, troubles de l’équilibre, altération de l’état général</li>
                                        <li><i class="fas fa-check"></i>L’uro-gynécologie de base : rééducation du périnée après l’accouchement, incontinence urinaire</li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="blog-details-wrap">
                                <h3 class="title">Consultations</h3>
                                <p>Un premier rendez-vous pour les séances de kinésithérapie est donné par les accueillantes. Les autres rendez-vous sont donnés par les kinés eux-mêmes selon leur disponibilité.</p>
                                <p>Il est impératif d’avoir une prescription d’un médecin pour commencer de la kinésithérapie. Cette prescription doit être présentée à l’accueil ou lors de la première sance de kinésithérapie.</p>
                            </div> -->
                            <div class="blog-details-wrap">
                                <h3 class="title">Retard et annulation</h3>
                                <p>Les patients en retard de 10 minutes à leur rendez-vous ne sont plus reçus par l'assistante sociale, ceci afin de garantir à tous (assistante sociale comme patient) une consultation dans de bonnes conditions.</p>
                                <p>En cas d’empêchement, il est important de prévenir la maison médicale le plus rapidement possible afin que le rendez-vous prévu puisse être proposé à un autre patient et qu’un nouveau rendez-vous soit organisé pour le patient empêché.</p>
                            </div>
                            <!-- <div class="blog-details-wrap">
                                <h3 class="title">Honoraires</h3>
                                <p>Le prix des consultations de médecine générale, de kinésithérapie et les soins infirmiers sont compris dans l’abonnement forfaitaire aux soins souscrit par le patient à la signature de son contrat d'inscription avec la maison médicale.</p>
                            </div> -->
                            <!-- Equipe-Medecin-area -->
                            <div class="blog--post--thumb service-box wow fadeInUp" data-wow-delay=".3s">
                                <a href="https://acrobat.adobe.com/id/urn:aaid:sc:EU:fb321af2-0fb8-4cdf-b5f2-f31f5c3eba1c" target="_blank"><img class='service-photo' src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/consultation.png" alt="img"></a>
                            </div>
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
                                        <div class="col-xl-3">
                                            <div class="home-team-item">
                                                <div class="photo-team">
                                                    <a href="shop-details.html">
                                                        <img src="<?php bloginfo("template_url")?>/assets/img/Team/nina.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="home-shop-content photo-team-content">
                                                    <h4 class="title"><a href="shop-details.html">Nina Covalski</a></h4>
                                                </div>
                                            </div>
                                        </div>
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


</main>
<!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
