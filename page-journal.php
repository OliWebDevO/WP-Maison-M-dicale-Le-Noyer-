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
                                <h2 class="title">Journal</h2>
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item trail-item trail-begin">
                                            <a href="<?php bloginfo("url")?>"><span>Accueil</span></a>
                                        </li>
                                        <li class="breadcrumb-item trail-item trail-end"><span>Journal</span></li>
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
                                    <p class="sub-title">Inscrivez vous au journal ici </p>
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
                                                    <div class='cb-flex'>
                                                        <input type="radio" id="check3" name="check-journal1" />
                                                        <label for="check3">S'inscrire au journal au format mail</label>
                                                    </div>
                                                    <div class='cb-flex'>
                                                        <input type="radio" id="check5" name="check-journal1" />
                                                        <label for="check5">Se désinscrire du journal au format mail</label>
                                                    </div>
                                                    <div class='cb-flex'>
                                                        <input type="radio" id="check4" name="check-journal2" />
                                                        <label for="check4">S'inscrire au journal au format papier</label>
                                                    </div>
                                                    <div class='cb-flex'>
                                                        <input type="radio" id="check6" name="check-journal2" />
                                                        <label for="check6">Se désinscrire du journal au format papier </label>
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


            <section id="ponctuel" class="blog-post-area-two section-pt-130 section-pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-title-two text-center mb-70">
                            <span class="sub-title">
                                <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_left.svg" class="injectable" alt="img">
                                La liste de nos journaux 
                                <img src="<?php bloginfo("template_url")?>/assets/img/icons/sub_right.svg" class="injectable" alt="img">
                            </span>
                            <h2 class="title">le journal du noyer</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="row">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                        <!-- <p class="tg-testi-avatar-info">Dr.Jon Smith . <span>2 hours ago</span></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tg-testimonial-item">
                                    <div class="tg-testimonial-thumb">
                                        <img src="<?php bloginfo("template_url")?>/assets/img/LeNoyer/journal.jpg" alt="">
                                    </div>
                                    <div class="tg-testimonial-content">
                                        <h2 class="title">Journal N°70</h2>
                                        <p>Septembre 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->
        

        </main>
        <!-- main-area-end -->
 
<?php get_template_part("partials/footer") ?>
