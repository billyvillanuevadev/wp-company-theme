<!-- Section: Features -->
<section class="features bg-light text-center">
  <div class="container">
    <div class="row">

      <?php if ( $features = get_field('features') ) : ?>
        <?php $delay = 0; ?>
        <?php foreach ( $features as $feature ) : $delay+= 100; ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="d-flex">
                <i class='<?= $feature['icon_class']; ?>'></i>
              </div>
              <h3><?= $feature['title']; ?></h3>
              <p class="lead mb-0"><?= $feature['description']; ?></p>
            </div><!--/ .mx-auto -->
          </div><!--/ .col -->
        <?php endforeach; ?>
      <?php endif; ?>

    </div><!--/ .row -->
  </div><!--/ .container -->
</section><!--/ section.features -->