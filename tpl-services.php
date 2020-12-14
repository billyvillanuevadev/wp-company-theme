<?php
/**
 * Template Name: TPL-Services
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <!-- Section: Services 2 -->
  <section id="services-2" class="services-2">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <?php if ( $services = get_field('services') ) : $delay = 0; ?>
          <?php foreach ( $services as $service ) : $delay+= 100; ?>
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="<?=$delay?>">
              <div class="icon-box">
                <div class="icon"><i class="<?=$service['icon_class']?>"></i></div>
                <h4><?=$service['title']?></h4>
                <p><?=$service['description']?></p>
              </div>
            </div>
            <?php if ( $delay == 400 ) { $delay = 0; } ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </div><!--/ .row -->
    </div><!--/ .container -->
  </section><!--/ section.services-2 -->
<?php endwhile; ?>

<?php get_footer();