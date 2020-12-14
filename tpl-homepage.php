<?php
/**
 * Template Name: TPL-Homepage
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'template-parts/tpl-homepage/section', 'features' ); ?>
  <?php get_template_part( 'template-parts/tpl-homepage/section', 'services' ); ?>
  <?php get_template_part( 'template-parts/tpl-homepage/section', 'testimonials' ); ?>
  <?php get_template_part( 'template-parts/tpl-homepage/section', 'contact' ); ?>
<?php endwhile; ?>

<?php get_footer();