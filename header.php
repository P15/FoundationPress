<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/foundation-icons/foundation-icons.css?body=1" media="all" rel="stylesheet" />

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.png">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action('foundationPress_after_body'); ?>

  <div class="off-canvas-wrap">
  <div class="inner-wrap">

  <?php do_action('foundationPress_layout_start'); ?>

  <header>
    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar="">
        <ul class="title-area">
          <li class="name">
            <a href="/"><img alt="Logo" class="logo" src="https://recombine.com/assets/logo.png">
            Recombine
            </a>
          </li>
          <li class="toggle-topbar menu-icon">
            <a href="#">
              <span>Menu</span>
            </a>
          </li>
        </ul>
        <div class="top-bar-section">
          <ul class="right">
            <li class="red">
              <a class="active" href="http://news.recombine.com">News</a>
            </li>
            <li class="green">
              <a class="" href="http://recombine/about">About Us</a>
            </li>
            <li class="yellow">
              <a href="http://patients.recombine.com">Patients</a>
            </li>
            <li class="blue">
              <a href="http://clinics.recombine.com">Providers</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

<main class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>
  <div class="row">
