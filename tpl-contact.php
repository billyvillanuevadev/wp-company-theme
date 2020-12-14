<?php
/**
 * Template Name: TPL-Contact
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <!-- Section: Contact 2 -->
  <section id="contact-2" class="contact-2">
    <div class="container" data-aos="fade-up">

      <div class="row contact-details" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6"">
          <div class="info-box mb-5" data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-map"></i>
            <h3>Office Address</h3>
            <p><?= ( $contact_address = get_field('contact_address') ) ? $contact_address : ''; ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box mb-5" data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-envelope"></i>
            <h3>Email address</h3>
            <p><?= ( $contact_email = get_field('contact_email') ) ? $contact_email : ''; ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box mb-5" data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-phone-call"></i>
            <h3>Contact number</h3>
            <p><?= ( $contact_number = get_field('contact_number') ) ? $contact_number : ''; ?></p>
          </div>
        </div>
      </div><!--/ .contact-details -->

      <div class="row contact-map-form" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <?php if ( $google_maps_embed = get_field('google_maps_embed') ) : ?>
            <iframe class="mb-4 mb-lg-0" src="<?=$google_maps_embed?>" style="border:0; width: 100%; height: 480px;"></iframe>
          <?php endif; ?>
        </div>

        <div class="col-lg-6">
          <h4 class="mb-3"><?= ( $contact_form_title = get_field('contact_form_title') ) ? $contact_form_title : 'Contact us'; ?></h4>
          <?php if( $contact_form = get_field('contact_form') ) : ?>
            <?php print do_shortcode( $contact_form ); ?>
          <?php endif; ?>
        </div>
      </div><!--/ .contact-map-form -->
    </div><!--/ .container -->
  </section><!--/ section.contact-2 -->
<?php endwhile; ?>

<?php get_footer();