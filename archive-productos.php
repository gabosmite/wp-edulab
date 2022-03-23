<?php 
	get_header()
 ?>

<ul>
<?php while(have_posts()):the_post(); 

	
?>


<li><h2><?php echo get_the_title(); ?></h2> <strong></strong></li>




<?php endwhile; ?>

</ul>

 <?php get_footer(); ?>