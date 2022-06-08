<?php
 
get_header();
 
while(have_posts()){
   the_post(); ?>
   <div><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div>
   <div><?php the_content(); ?></div>
   <hr>
   <?php
}
 
get_footer();