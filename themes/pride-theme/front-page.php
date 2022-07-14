<?php
 
get_header();

?>
<h2>I'm the Front Page</h2>

<p>Icons from Font awesome</p>
<i class="fa-solid fa-cubes"></i>
<i class="fa-solid fa-person-biking"></i>
<?php get_template_part('template-parts/content', 'test'); ?>
<?php do_action("action_test"); ?>


<?php
 
while(have_posts()){
   the_post(); ?>
   <div><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div>
   <div><?php the_content(); ?></div>
   <hr>
   <?php
}
 
get_footer();