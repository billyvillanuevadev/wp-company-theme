<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header(); ?>
<?php if ( have_posts() ) :
  /* Start the Loop */
  while ( have_posts() ) : the_post(); ?>

    <!-- Section: Blog Single -->
    <section id="blog-single" class="blog-single">
      <div class="container" data-aos="fade-up">
        <div class="row">
          
          <div class="col-12 col-12 col-lg-9 ml-auto mr-auto">
            <article class="content">

              <h1 class="blog-title mb-4"><?php the_title(); ?></h1>

              <?php if ( $featured_image_url = get_the_post_thumbnail_url() ) : ?>
                <img class="mb-3 img-fluid" style="width: 100%;" src="<?= $featured_image_url; ?>">
              <?php endif; ?>

              <div class="blog-content">
                <?php the_content(); ?>  
              </div>
          </div><!--/ .col -->

        </div><!--/ .row -->
      </div><!--/ .container -->
    </section><!--/ section.blog-single -->

  <?php endwhile;
else :
  get_template_part( 'template-parts/content', 'none' );
endif; ?>

<?php get_footer(); ?>
