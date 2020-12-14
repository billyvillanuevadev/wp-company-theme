<!-- Testimonials -->
<section class="testimonials text-center bg-light" data-aos="fade-up">
  <div class="container">
    <?php if ( $section_title = get_field('section_title_testimonials') ) : ?>
      <h2 class="mb-5"><?=$section_title?></h2>
    <?php endif; ?>
    <div class="row">
      <?php if ( $testimonials = get_field('testimonials') ) : ?>
        <?php $delay = 0; ?>
        <?php foreach ( $testimonials as $testimonial ) : $delay+=100; ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?=$delay?>">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?=$testimonial['image']['sizes']['custom-square'];?>" alt="">
              <h5 class="mb-0"><?=$testimonial['author']?></h5>
              <p class="font-weight-normal font-italic mb-2"><?=$testimonial['title']?></p>
              <p class="font-weight-light mb-0">"<?=$testimonial['testimonial']?>"</p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section><!--/ .testimonials -->