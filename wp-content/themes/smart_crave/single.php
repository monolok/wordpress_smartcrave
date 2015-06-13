<?php get_header(); ?>

  <div class="row">
    <div class="col-sm-2 col-xs-12 pad">
      <div class="row">

        <?php
            wp_nav_menu(array('menu_id' => 'main-nav', 'before' => '<div class="col-sm-12 col-xs-3"><div class="cat"><h4>', 'after' => '</h4></div></div>'));
          ?>


<!--         <div class="col-sm-12 col-xs-3">
          <div class="cat"><h4>Gluten</h4></div>
        </div>
        <div class="col-sm-12 col-xs-3">
          <div class="cat"><h4>Sugar</h4></div>
        </div>
        <div class="col-sm-12 col-xs-3">
          <div class="cat"><h4>Dairy</h4></div>
        </div>
        <div class="col-sm-12 col-xs-3">
          <div class="cat"><h4>Life Hack</h4></div>
        </div> -->
      </div>
    </div>
    <div class="col-sm-8 col-xs-12 scroll">
      <div class="row center">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="col-xs-12">
          <div class="border">
            <div class="row left">
              <div class="col-xs-6">
                <h5>Craving for: <?php echo get_the_category_list(); ?></h5>
               </div>
               <div class="col-xs-6">
                <?php echo get_the_date(); ?>
              </div>
            </div>
            <div class="row title">
              <div class="col-xs-6">
                <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
                } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/images/default.png" alt="<?php the_title(); ?>" class="img-responsive img-circle archive-img"/>
                <?php } ?>
              </div>
              <div class="col-xs-6">
                <?php the_title(); ?>
              </div>
            </div>
            <div class="row justify">
              <?php the_content(); ?>
            </div>
            <br />
            <br />
            <div class="row">
              <a name="fb_share" type="button_count" share_url="<?php echo get_permalink();?>" href="http://www.facebook.com/sharer.php">Share article on facebook !</a>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="fb-comments" data-href="http://www.smartcrave.org" data-numposts="5" data-colorscheme="light"></div>
        
        <!-- <article class="col-sm-6">
          <div class="border">
            <div class="row left">category</div>
            <div class="row title">title</div>
            <div class="row">
              <div class="col-xs-6"><img src="images/man.png" class="img-responsive img-circle"></div>
              <div class="col-xs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis</div>
            </div>
          </div>
        </article>

        <article class="col-sm-6">
          <div class="border">
            <div class="row left">category</div>
            <div class="row title">title</div>
            <div class="row">
              <div class="col-xs-6"><img src="images/man.png" class="img-responsive img-circle"></div>
              <div class="col-xs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis</div>
            </div>
          </div>
        </article>

        <article class="col-sm-6">
          <div class="border">
            <div class="row left">category</div>
            <div class="row title">title</div>
            <div class="row">
              <div class="col-xs-6"><img src="images/man.png" class="img-responsive img-circle"></div>
              <div class="col-xs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis</div>
            </div>
          </div>
        </article>  -->

      </div>
    </div>
    <!-- <div class="col-sm-2 col-xs-12 center">
    
        <div class="row">
          <li class="fa fa-envelope fa-3x social"></li>
        </div>

        <div class="row">
          <li class="fa fa-facebook-square fa-3x social"></li>
        </div>

        <div class="row">
         <li class="fa fa-twitter-square fa-3x social"></li>
        </div>

        <div class="row">
          <li class="fa fa-btc fa-3x social"></li>
        </div>

    </div>
  </div> -->
  
<?php get_footer(); ?>