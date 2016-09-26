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

<?php $herobackground = get_field('background_image'); ?>

<header class="headerHome" style="background: url(<?php echo $herobackground['url']?>);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
  <div class="headerContain">
    <div class="container">
      <div class="header-flex">
        <h1 class="logotext">
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?><span style="color: #f2ad32">..</span>
          </a>
        </h1>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
          <i class="fa fa-times" aria-hidden="true"></i>
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <div class="welcomeFlexer">
        <div class="welcomeContent">
          <h2><?php the_field('welcome'); ?></h2>
          <div class="slider" data-flickity>
            <?php 
              if(have_rows('hero_slider')){
                while(have_rows('hero_slider')){
                  the_row();
                  ?>
                  <div class='hero-item'>
                    <h4><?php the_sub_field('slider_text'); ?></h4>
                  </div> <!--End of Hero Item -->
                <?php
                }
              }
            ?>
          </div><!--End of Slider -->
          <a class="callToAction" href="http://localhost/andrew_thompson_week7/menu/"><?php the_field('button_text');?></a>
        </div><!--/.wContent-->
      </div><!--/.wFlexer-->
    </div> <!-- /.container -->
  </div>
</header><!--/.header-->

