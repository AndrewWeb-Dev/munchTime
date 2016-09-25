<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header('home');  ?>
<div class="descriptCards">
	<div class="container cardContainer">
		 <?php 
          if(have_rows('descriptive_cards')){
            while(have_rows('descriptive_cards')){
              the_row();
              ?>
              <?php $cardOverlay = get_sub_field('image_overlay');?>
	              <div class='card' style="background: url(<?php echo $cardOverlay['url'] ?>);background-size: cover;background-repeat: no-repeat;">
	              	<div class="contents">
		                <h4><?php the_sub_field('card_heading'); ?></h4>
		                <h3><?php the_sub_field('card_subheading'); ?></h3>
		                <p><?php the_sub_field('card_text'); ?></p>
		                <a href="<?php the_sub_field('hyperlink_url'); ?>"><?php the_sub_field('hyperlink_text'); ?></a>
	                </div>
	              </div> <!--End of card item -->
            <?php
            }
          }
        ?>
    </div>
</div>
<?php $menuBackground = get_field('menu_preview_background'); ?>
<div class="menuPreview" style="background: url(<?php echo $menuBackground['url'] ?>);background-size: cover;background-repeat: no-repeat;">
	<div class="menuContain">
		<h3 class="heading">Discover</h3>
		<h2 class="subHeading">Our Menu</h2>
		<div class="container previewContainer">
			<div class="menuLeft menuColumn">
				<?php 
					if(have_rows('left_menu_column')){
					  while(have_rows('left_menu_column')){
					    the_row();
					    ?>
					    <div class="padContainer">
						    <div class="itemFlex">
						    	<h4><?php the_sub_field('menu_item'); ?></h4>
						    	<div class="dashed"></div>
						    	<p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('item_price'); ?></p>
						    </div>
						    <p class="description"><?php the_sub_field('item_description'); ?></p>
					    </div>
					    <?php
						}
					}
					?>
			</div>
			<div class="menuRight menuColumn">
				<?php 
					if(have_rows('right_menu_column')){
					  while(have_rows('right_menu_column')){
					    the_row();
					    ?>
					    <div class="padContainer">
						    <div class="itemFlex">
						    	<h4><?php the_sub_field('menu_item'); ?></h4>
						    	<div class="dashed"></div>
						    	<p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('item_price'); ?></p>
						    </div>
						    <p class="description"><?php the_sub_field('item_description'); ?></p>
					    </div>
					    <?php
						}
					}
					?>
			</div>
		</div>
		<div class="linkCenter">
			<a class="viewMenu" href="<?php echo get_field('menu_button_url'); ?>"><?php echo get_field('menu_button'); ?></a>
		</div>
	</div>
</div>
<div class="mainTexture">
  <div class="container frontDesc">
  	<div class="callToCard">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<h2 class="title"><?php the_title(); ?></h2>
		<?php the_content(); ?>

    <?php endwhile; // end the loop?>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>