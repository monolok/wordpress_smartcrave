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
                     
		<!-- CONTENT -->
    <?php $categoryvariable = $cat; ?>
    <?php $args = 'cat=' . $categoryvariable . '&orderby=date&order=ASC'; ?>
    <?php query_posts($args); ?>
    <?php $counter = 0; ?>
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
            <div class="row title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
            <div class="row">
              <div class="col-xs-6">
                <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
                } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/images/default.png" alt="<?php the_title(); ?>" class="img-responsive img-circle archive-img"/>
                <?php } ?>
              </div>
              <div class="col-xs-6 justify"><p><?php the_excerpt(); ?></p></div>
            </div>
          </div>
        </article>
    <?php $counter += 1; ?>
    <?php if ($counter % 1 == 0) {
        echo '</div><div class="row center">';
        }?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

      </div>
    </div>
<!--     <div class="col-sm-2 col-xs-12 center">
    
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