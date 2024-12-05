<?php get_template_part("partials/header") ?>

<?php get_template_part("partials/navigation") ?> 
    
        <!-- main-area -->
        <main class="main-area fix">

            <!-- banner-area -->
            <div class="video-area video-bg page-bg" data-background="<?php bloginfo("template_url")?>/assets/img/lenoyerentre.png">
                <div class="video-bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Activités de promotion de la santé</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>/activites"><span>Activités</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Promenade</span></li>
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
                                    <img src="<?php bloginfo("template_url")?>/assets/img/activités/promenade.jpeg" alt="img">
                                </div>
                                <div class="blog--post--content blog-details-content">
                                    <div class="blog--tag">
                                        <a href="#">Promenade Découvertes</a>
                                    </div>
                                    <h2 class="blog--post--title">Visite de l'abbaye de la cambre</h2>
                                    <div class="blog--post--meta mb-20">
                                        <ul class="list-wrap">
                                            <!-- <li><span><i class="far fa-eye"></i>232 Views</span></li>
                                            <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li> -->
                                            <li><span><i class="far fa-calendar-alt"></i>24 Mars 2024</span></li>
                                        </ul>
                                    </div>
                                    <div class="post-text">
                                        <div class="blog-details-wrap">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                        </div>
                                        <!-- <div class="blog-details-post-thumb">
                                            <img src="<?php bloginfo("template_url")?>/assets/img/activités/abbaye.jpg" alt="img">
                                        </div> -->
                                        <div class="blog-details-wrap">
                                            <h3 class="title">Inscription</h3>
                                            <p>Veuillez contacter Roman via roman.parmentier@lenoyer.be ou au 02/734 24 53. <br> Dernières Réservation le 20 aout.</p>
                                        </div>
                                        <div class="blog-details-wrap">
                                            <h3 class="title">Prix de l'activité</h3>
                                            <p>Cette activité est gratuite.</p>
                                        </div>
                                        <div class="blog-details-wrap border-none">
                                            <h3 class="title">Pour cette activité vous aurez besoin</h3>
                                            <div class="b-details-list">
                                                <ul class="list-wrap">
                                                    <li><i class="fas fa-check"></i>Bonne chaussures de marche
                                                    </li>
                                                    <li><i class="fas fa-check"></i>Veste imperméable</li>
                                                    <li><i class="fas fa-check"></i>Nourriture pour la journée</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="posts-navigation blog-post-navigation pt-35 pb-35">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="prev-link">
                                                    <span>Prev Post</span>
                                                    <h4><a href="#">Tips on Minimalist</a></h4>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-start text-md-center">
                                                <a href="blog.html" class="navigation-filter"><img src="<?php bloginfo("template_url")?>/assets/img/icons/c_d01.png" alt=""></a>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="next-link text-start text-md-end">
                                                    <span>Next Post</span>
                                                    <h4><a href="#">Less Is More</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="related-post mt-45">
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
                                    </div>
                                    <div class="blog-avatar-wrap mb-45">
                                        <div class="blog-post-avatar-img">
                                            <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/Poker Face_PNG.png" alt="img">
                                        </div>
                                        <div class="bd-avatar-info">
                                            <span>Organisé par</span>
                                            <h4>Roman Parmentier</h4>
                                            <p>Accueillant et gestionnaire administratif à la maison médicale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <aside class="blog-sidebar pl-20">
                                <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Activités ponctuelles</h3>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/promenade.jpeg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Visite de l'Abbaye de la Cambre</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>24 Mars 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/velo.png" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Cours de Vélo Débutant</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>24 Mars 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/cuisine.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Cours de Cuisine</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>24 Mars 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/bruzelle.png" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Bruzelle</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>24 Mars 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3 class="title">Activités Récurentes</h3>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/yoga.png" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Yoga</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>Jeudi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/taichi.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Tai Chi</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>Mercredi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/gym.png" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Gym Douce</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>Lundi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/couture.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Atelier Couture</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>Mardi & Mercredi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-post">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/activités/dejeuner.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h5><a href="blog-details.html">Petit Dejeuner Papote</a></h5>
                                            <div class="rc-post-date">
                                                <span><i class="far fa-calendar-alt"></i>Premier Jeudi du mois</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget mb-40">
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
                                </div>
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
