<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Froneri_2020
 */
  
?>

<?php if ( $featured_image = get_field('featured_image') ) : ?>
  <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
    <img class="img-fluid" src="<?= $featured_image['url'] ?>" />
  </div><!--/ .col-6 -->
<?php endif; ?>

<?php if ( $main_content = get_field('main_content') ) : ?>
  <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
    <?=$main_content?>
  </div><!--/ .col-6 -->
<?php endif; ?>

<?php if (!empty( get_the_content() )) : ?>
  <div class="col" data-aos="fade-up">
    <?php the_content(); ?>
  </div>
<?php endif; ?>