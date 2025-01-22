<!-- Mettre le head juste avant </head> , et le footer juste </body> -->
<?php wp_head();?>
<?php wp_footer();?>

<!-- Pour un bg personnalisé -->
<?php header_image(); ?>

<!-- Si besoin d'une catégorie -->
<div class ="category"><?php the_category(',') ; ?></div>

<!-- Pour faire un lien vers la page de l'élement en question, notamment vers les single-lapage.php -->
<?php the_permalink()?>
<!-- Pour les liens de page (photo, logo, etc) -->
 <?php bloginfo("template_url")?>
 <?php bloginfo("template_url")?>/images/
 <!-- Pour le lien css -->
 <link href="<?php bloginfo("template_url")?>/styles/styles.css" rel="stylesheet">

<!-- Faire apparaitre le titre etc -->
<?php bloginfo("name")?>

<?php bloginfo("description")?> 

<!-- Pour retrouver un élément d'une taxonomie personnalisée faite sur ACF -->
<?php $terms = get_the_terms( $post->ID, 'le_nom_du_type_de_publication' ); foreach($terms as $term) {echo $term->slug;} ?>

<!-- Loop PHP Debut-->
<?php
  $loop = new WP_Query( array( 
      'post_type' => 'job', // Va rechercher le type de contenu “job”
      'posts_per_page' => -1, // Affiche tout sans limite 
      'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'name', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->
<?php endwhile;
wp_reset_query();
?>
<!-- Loop PHP Fin-->

<!-- Loop PHP pour les posts-->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>    
    <!-- do stuff ... -->
  <div class="">

      <!-- Integrer une image sans le hack de functions.php -->
    <!-- <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> -->

    <?php the_post_thumbnail()?>

    <?php the_title(); ?>

    <?php the_excerpt(); ?>

    <?php the_content(); ?>

    <?php the_field('paragraphe_1');?>

  </div>
    <!-- do stuff ... -->
<?php endwhile; ?>
<?php endif; ?>
<!-- Loop PHP Fin-->  

<!-- Loop PHP pour les pages d'options ou autre grp etc avec ACF-->
<?php if( have_rows('about_grp', 'option') ): ?>
  <?php while( have_rows('about_grp', 'option') ): the_row(); ?>
		<div>
        <img src="<?php the_sub_field('about_img', 'option');?>" alt="">
    </div>
    <div>
      <h1>
        <?php the_sub_field('about_titre', 'option');?>
      </h1>
      <p>
        <?php the_sub_field('about_text', 'option');?>
      </p>
      <a href="mailto:<?php the_sub_field('about_mail', 'option');?>">Hire me now</a>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Form :  -->

<?php echo do_shortcode('[contact-form-7 id="70e7894" title="Formulaire de contact"]')?>