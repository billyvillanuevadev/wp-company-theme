<!-- Section: Services -->
<section class="services no-padding">
  <div class="container-fluid p-0">

    <?php if ( $service = get_field('services') ) : ?>
      <?php for ( $x=0; $x<count($service); $x++ ) : ?>
        <div class="row no-gutters service-row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 <?=($x % 2 == 0) ? '':'order-lg-2';?> text-white service-img" style="<?= ( !empty($service[$x]['image']) ) ? 'background-image: url('.$service[$x]['image']['url'].')':''; ?>"></div>
          <div class="col-lg-6 order-lg-1 my-auto service-text">
            <h2><?=$service[$x]['title']?></h2>
            <p class="lead mb-0"><?=$service[$x]['description']?></p>
          </div>
        </div><!-- .service-row -->
      <?php endfor; ?>
    <?php endif; ?>

  </div><!-- .container-fluid -->
</section><!-- section.services -->