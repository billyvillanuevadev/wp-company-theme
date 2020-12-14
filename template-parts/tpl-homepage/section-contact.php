<!-- Section: Contact -->
<section class="contact text-center">
  <div class="container" data-aos="fade-up">
    <?php if( $section_title = get_field('section_title_contact') ) : ?>
      <h2 class="mb-5"><?=$section_title?></h2>
    <?php endif; ?>

    <div class="row section-content text-center">
      <div class="col-md-8 offset-md-2">
        <?php if( $contact_form = get_field('contact_form') ) : ?>
          <?php print do_shortcode( $contact_form ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section><!--/ section.contact -->