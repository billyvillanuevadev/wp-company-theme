<?php
/**
 * Template Name: TPL-Blog
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <!-- Section: Blog -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        
        <?php $featured_id = array(); ?>
        <?php if ( $featured_blog = get_field('featured_blog') ) : ?>
          <?php $featured = $featured_blog[0]; $featured_id[] = $featured->ID; ?>
          <div class="col-sm-12">
            <div class="highlighted-article">
              <article class="row">
                <div class="entry-image col-md-6">
                  <a href="<?= get_permalink($featured); ?>">
                    <?php if ( $featured_image_url = get_the_post_thumbnail_url($featured, 'custom-common') ) : ?>
                      <img class="img-fluid" src="<?= $featured_image_url; ?>" alt="">
                    <?php endif; ?>
                  </a>
                  <time class="updated"><?=get_the_date('F j, Y', $featured->ID)?></time>
                </div><!--/ .entry-image -->
                <div class="entry-content col-md-6">
                  <header class="entry-title">
                    <h1 class="entry-title">
                      <a href="<?= get_permalink($featured); ?>"><?= get_the_title($featured); ?></a>
                    </h1>
                  </header>
                  <div class="entry-summary">
                    <p><?= get_the_excerpt($featured) ?></p>
                    <a href="<?= get_permalink($featured); ?>">Read more</a>
                  </div>
                </div><!--/ .entry-content -->
              </article>
            </div><!--/ .highlighted-article -->
          </div><!--/ .col -->
        <?php endif; ?>

        <?php if ( $blog_posts = xbv_get_posts('post', -1, $featured_id) ) : ?>
          <?php foreach ( $blog_posts as $post ) : setup_postdata($post); ?>
            <div class="col-md-6 col-lg-4">
              <div class="blog-article">
                <article>
                  <div class="entry-image">
                    <a href="<?= get_permalink(); ?>">
                      <?php if ( $featured_image_url = get_the_post_thumbnail_url($post, 'custom-common') ) : ?>
                        <img class="img-fluid" src="<?= $featured_image_url; ?>" alt="">
                      <?php endif; ?>
                      <time class="updated"><?=get_the_date('F j, Y')?></time>
                    </a>
                  </div><!--/ .entry-image -->
                  <div class="entry-content">
                    <header>
                      <h2 class="entry-title"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <div class="entry-summary">
                      <p><?= get_the_excerpt(); ?></p>
                      <a href="<?= get_permalink(); ?>">Read more</a>
                    </div>
                  </div><!--/ .entry-image -->
                </article>
              </div><!--/ .blog-article -->
            </div><!--/ .col -->
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div><!--/ .row -->
    </div><!--/ .container -->
  </section><!--/ section.blog -->
<?php endwhile; ?>

<?php get_footer();