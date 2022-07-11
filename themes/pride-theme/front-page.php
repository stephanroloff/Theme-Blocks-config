<?php
 
get_header();

?>
<h2>I'm the Front Page</h2>

<p>Icon from Font awesome</p>
<i class="fa-solid fa-cubes"></i>
<i class="fa-solid fa-person-biking"></i>

<?php
 
while(have_posts()){
   the_post(); ?>
   <div><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div>
   <div><?php the_content(); ?></div>
   <hr>
   <?php
}
 
get_footer();