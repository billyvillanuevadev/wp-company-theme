<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page-top" class="global-wrapper">
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header id="global-header">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="nav-main" data-aos="fade-down"> 
        <div class="container">
          <a class="navbar-brand" href="<?=get_home_url();?>">&nbsp;SUIKO </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="navbar-main">
            <?= xbv_get_menu('menu-1', 'navbar-nav ml-auto', 'nav-item', 'nav-link'); ?>
          </div><!--/ .navbar-collapse -->
        </div><!--/ .container -->
      </nav><!--/ .navbar -->

      <!-- Masthead -->
      <?php if ( is_front_page() ) : ?>
        <div class="masthead text-white text-center" data-aos="fade-down" style="<?=( $hero_image = get_field('hero_image') ) ? 'background-image: url('.$hero_image['url'].')' : ''; ?>">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-7 mx-auto">
                <?php if ( $hero_title = get_field('hero_title') ) : ?>
                  <h1 class="mb-3"><?= $hero_title; ?></h1>
                <?php endif; ?>
              
                <?php if ( $hero_subtitle = get_field('hero_subtitle') ) : ?>
                  <h2 class="subtitle mb-4">
                    <?= $hero_subtitle; ?>
                  </h2>
                <?php endif; ?>

                <?php if ( $hero_cta = get_field('hero_cta') ) : ?>
                  <a href="<?=$hero_cta['url']?>" class="btn btn-lg btn-info"><?=$hero_cta['title']?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div><!--/ .masthead -->
      <?php else: ?>
        <?php
          $hero_image = get_field('hero_image', 'options');
          if ( $header_image = get_field('header_image') ) {
            $hero_image = $header_image;
          }
        ?>
        <div class="masthead inside-page text-white text-center" style="<?=( $hero_image ) ? 'background-image: url('.$hero_image['url'].')' : ''; ?>" data-aos="fade-down">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-7 mx-auto">
                <h1 class="mb-3">
                  <?php if ( is_single() ) : ?>
                    Blog
                  <?php else: ?>
                    <?= get_the_title(); ?>
                  <?php endif; ?>
                </h1>
              </div>
            </div>
          </div>
        </div><!--/ .masthead -->
      <?php endif; ?>
    </header><!--/ #global-header -->

    <!-- Main Content -->
    <div id="main-content-post-<?= the_ID() ?>" class="main-content-wrapper">