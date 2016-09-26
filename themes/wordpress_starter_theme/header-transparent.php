<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<header class="transparent">
    <div class="container">
      <div class="headerTransparent">
        <h1 class="logotext">
          <a class="black" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?><span style="color: #f2ad32">..</span>
          </a>
        </h1>
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary',
          'menu_class' => 'menuTransparent'
        )); ?>
        <i class="fa fa-times" aria-hidden="true"></i>
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    </div> <!-- /.container -->
</header><!--/.header-->

