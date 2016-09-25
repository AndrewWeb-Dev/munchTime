
<div class="main menuMain">

    <div class="content">
      <?php $lunchBackground = get_field('lunch_section_back') ?>
      <div class="lunchMenu" style="background: url(<?php echo $lunchBackground['url'] ?>);background-size: cover;background-repeat: no-repeat;">
        <div class="menuContain">
          <?php get_header('transparent'); ?>
          <h3 class="heading">Discover</h3>
          <h2 class="subHeading">Our Lunch Menu</h2>
          <div class="container lunchContainer">
            <div class="menuLeft menuColumn">
              <?php 
                if(have_rows('lunch_menu_left')){
                  while(have_rows('lunch_menu_left')){
                    the_row();
                    ?>
                    <div class="padContainer">
                      <div class="itemFlex">
                        <h4><?php the_sub_field('lunch_menu_item'); ?></h4>
                        <div class="dashed"></div>
                        <p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('lunch_item_price'); ?></p>
                      </div>
                      <p class="description"><?php the_sub_field('lunch_item_desc'); ?></p>
                    </div>
                    <?php
                  }
                }
                ?>
            </div><!--End of menuLeft-->
            <div class="menuRight menuColumn">
              <?php 
                if(have_rows('lunch_menu_right')){
                  while(have_rows('lunch_menu_right')){
                    the_row();
                    ?>
                    <div class="padContainer">
                      <div class="itemFlex">
                        <h4><?php the_sub_field('lunch_menu_item'); ?></h4>
                        <div class="dashed"></div>
                        <p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('lunch_item_price'); ?></p>
                      </div>
                      <p class="description"><?php the_sub_field('lunch_item_desc'); ?></p>
                    </div>
                    <?php
                  }
                }
                ?>
            </div><!-- End of menuRight-->
          </div><!--End of lunchContainer-->
        </div>
      </div><!--End of lunchMenu-->
      <div class="dinnerMenu"> 
        <div class="menuContain">
          <h3 class="heading">Discover</h3>
          <h2 class="subHeading">Our Dinner Menu</h2> 
          <div class="container dinnerContainer">
            <div class="menuLeft menuColumn">
              <?php 
                if(have_rows('dinner_menu_left')){
                  while(have_rows('dinner_menu_left')){
                    the_row();
                    ?>
                    <div class="padContainer">
                      <div class="itemFlex">
                        <h4><?php the_sub_field('dinner_menu_item'); ?></h4>
                        <div class="dashed"></div>
                        <p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('dinner_item_price'); ?></p>
                      </div>
                      <p class="description"><?php the_sub_field('dinner_item_desc'); ?></p>
                    </div>
                    <?php
                  }
                }
                ?>
            </div><!--End of menuLeft-->
            <div class="menuMid menuColumn">
              <?php 
                if(have_rows('dinner_menu_mid')){
                  while(have_rows('lunch_menu_mid')){
                    the_row();
                    ?>
                    <div class="padContainer">
                      <div class="itemFlex">
                        <h4><?php the_sub_field('dinner_menu_item'); ?></h4>
                        <div class="dashed"></div>
                        <p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('dinner_item_price'); ?></p>
                      </div>
                      <p class="description"><?php the_sub_field('dinner_item_desc'); ?></p>
                    </div>
                    <?php
                  }
                }
                ?>
            </div><!--End of menuMid-->
            <div class="menuRight menuColumn">
              <?php 
                if(have_rows('dinner_menu_right')){
                  while(have_rows('dinner_menu_right')){
                    the_row();
                    ?>
                    <div class="padContainer">
                      <div class="itemFlex">
                        <h4><?php the_sub_field('dinner_menu_item'); ?></h4>
                        <div class="dashed"></div>
                        <p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('dinner_item_price'); ?></p>
                      </div>
                      <p class="description"><?php the_sub_field('dinner_item_desc'); ?></p>
                    </div>
                    <?php
                  }
                }
                ?>
            </div><!--End of menuRight-->
          </div><!--End of dinnerContainer-->
        </div><!--End of menuContain-->
      </div><!--End of dinnerMenu-->
      <?php $drinksBackground = get_field('drink_section_back') ?>
      <div class="drinksMenu" style="background: url(<?php echo $drinksBackground['url'] ?>);background-size: cover;background-repeat: no-repeat;">
        <div class="menuContain">
          <h3 class="heading">Discover</h3>
          <h2 class="subHeading">Our Drinks Menu</h2>
          <div class="container drinksContainer">
            <?php 
              if(have_rows('drinks_menu')){
                while(have_rows('drinks_menu')){
                  the_row();
                  ?>
                  <div class="padContainer">
                    <div class="itemFlex">
                      <h4><?php the_sub_field('drink_item'); ?></h4>
                      <div class="dashed"></div>
                      <p class="price"><i class="fa fa-usd" aria-hidden="true"></i><?php the_sub_field('drink_item_price'); ?></p>
                    </div>
                    <p class="description"><?php the_sub_field('drink_item_desc'); ?></p>
                  </div>
                  <?php
                }
              }
              ?>
          </div><!--End of drinksContainer-->
        </div><!--End of menuContain-->
      </div><!--End of drinksMenu-->
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
    </div> <!-- /,content -->


</div> <!-- /.main -->

<?php get_footer('default'); ?>