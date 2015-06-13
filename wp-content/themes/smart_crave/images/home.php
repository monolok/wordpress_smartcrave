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
    
    <div class="col-sm-8 col-xs-12 scroll"> <!-- SCROLL SPEC -->
      <div class="row center">

        <?php query_posts('showposts=6'); ?>
        <?php $counter = 0; ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="col-sm-6">
          <div class="border">
            <div class="row">
              <div class="col-xs-6">
              <h5>Craving for: <?php echo get_the_category_list(); ?></h5>
              </div>
              <div class="col-xs-6">
                <?php echo get_the_date(); ?>
              </div>
            </div>
            <div class="row title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="row">
              <div class="col-xs-6">
                <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
                } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/images/default.png" alt="<?php the_title(); ?>" class="img-responsive img-circle" />
                <?php } ?>
              </div>
              <div class="col-xs-6 justify"><?php the_excerpt(); ?></div>
            </div>
          </div>
        </article>
        <?php $counter += 1; ?>
        <?php if ($counter % 2 == 0) {
        echo '</div><div class="row center">';
        }?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

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
  
<?php get_footer(); ?>