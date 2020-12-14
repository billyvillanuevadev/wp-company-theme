<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>


<?php get_header(); ?>

<?php	while ( have_posts() ) : the_post(); ?>
  <!-- Section: Default -->
  <section id="default" class="default">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
      </div><!--/ .row -->
    </div><!--/ .container -->
  </section><!--/ section.default -->
<?php endwhile; // End of the loop. ?>

<?php get_footer();
