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
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/oda5kuu.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action('foundationPress_after_body'); ?>


  <?php do_action('foundationPress_layout_start'); ?>

    <div class="navigation-bar-module">
      <div class="row">
        <div class="large-12 columns">
          <div class="top-bar-wrapper fixed">
            <nav
              class="top-bar"
              data-options="scrolltop: false"
              data-topbar
              id="nav-bar">
              <ul class="title-area">
                <li class="name">
                  <h1>
                    <a href="/">
                      <img class="logo" src="https://recombine.com/assets/logo.png" alt="Recombine logo">
                      Recombine
                    </a>                  
                  </h1>
                </li>
                <li class="toggle-topbar menu-icon">
                  <a href="">
                    <span>Menu</span>
                  </a>
                </li>
              </ul>

              <section class="top-bar-section">
                <ul class="right">
                  <li>
                    <a href="#/register">
                      Register
                    </a>
                  </li>
                  <li>
                    <a href="#/login">
                      Log In
                    </a>
                  </li>
                </ul>
                <ul class="left">
                  <li class="has-dropdown">
                    <a href="" id="services-dropdown-button">
                      Services
                    </a>
                    <ul class="dropdown hide-for-large-up">
                      <li>
                        <a href="#/carriermap">CarrierMap</a>
                      </li>
                      <li>
                        <a href="#/fertilitymap">FertilityMap</a>
                      </li>
                      <li>
                        <a href="">LoremMap</a>
                      </li>
                    </ul>
                  </li>
                  <li class="has-dropdown">
                    <a href="" id="my-recombine-dropdown-button">
                      My Recombine
                    </a>
                    <ul class="dropdown hide-for-large-up">
                      <li>
                        <a href="#/register-for-carriermap">Register for CarrierMap</a>
                      </li>
                      <li>
                        <a href="#/claim-test/choose">Claim My Test</a>
                      </li>
                      <li>
                        <a href="">View My Results</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </section>
            </nav>
          </div>
        </div>
      </div>

      <div class="top-bar-wrapper top-bar-submenu-wrapper fixed closed show-for-large-up">
        <section class="top-bar-section top-bar-horizontal-submenu closed"
          data-button-id="services-dropdown-button">
          <ul class="inline-list no-bullet">
            <li>
              <a href="#/carriermap">CarrierMap</a>
            </li>
            <li>
              <a href="#/fertilitymap">FertilityMap</a>
            </li>
            <li>
              <a href="">LoremMap</a>
            </li>
          </ul>        
        </section>
  
        <section class="top-bar-section top-bar-horizontal-submenu closed"
          data-button-id="my-recombine-dropdown-button">
          <ul class="inline-list no-bullet">
            <li>
              <a href="#/register-for-carriermap">Register for CarrierMap</a>
            </li>
            <li>
              <a href="#/claim-test/choose">Claim My Test</a>
            </li>
            <li>
              <a href="">View My Results</a>
            </li>
          </ul>        
        </section>
      </div>
    </div>


  <?php do_action('foundationPress_after_header'); ?>
