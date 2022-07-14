<hr>
<h3>FOOTER</h3>
<?php dynamic_sidebar('footer-widget'); ?>
<?php
wp_nav_menu( array(
    'theme_location'=>'footer-menu',
) )
?>
  
<?php wp_footer()?>
</body>
</html>