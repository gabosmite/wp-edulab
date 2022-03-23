<?php 
	get_header()
 ?>



	<div class="banner">
		<div class="owl-four owl-carousel">
			<img src="<?php echo ASSETS ?>images/page-banner.jpg" alt="Image of Bannner">
			<img src="<?php echo ASSETS ?>images/page-banner2.jpg" alt="Image of Bannner">
			<img src="<?php echo ASSETS ?>images/page-banner3.jpg" alt="Image of Bannner">
		</div>
		<div class="container">
			<h1>welcome to education pro</h1>
			<h3>With our advance search feature you can now find the trips for you...</h3>
		</div>
		 <div id="owl-four-nav" class="owl-nav"></div>
	</div>
	
	<!-- Banner Close -->
	<section class="course-listing-page">
		<div class="container">
			<div id="filters" class="button-group">
				<button class="button" data-filter="*">all</button>
					<button class="button" data-filter=".business">business</button>
					<button class="button" data-filter=".design">design</button>
					<button class="button" data-filter=".development">development</button>
					<button class="button" data-filter=".seo">seo</button>
					<button class="button" data-filter=".marketing">marketing</button>
			</div>

			<div class="grid" id="cGrid">
				<?php while(have_posts()):the_post(); 
					$imagen_list = get_field('imagen_list');
					$title_curso = get_field('title_curso');
					// GROUP
					$dates_curse_detail = get_field('dates_curse_detail');
					$duration_curso = $dates_curse_detail['duration'];
					$schedule_curso = $dates_curse_detail['schedule'];
					$price_curso = $dates_curse_detail['price'];

				?>
				<div class="grid-item business" data-category="business">
					<div class="img-wrap">
						<img src="<?php echo $imagen_list; ?>" alt="courses picture">
					</div>
					<a href="<?php echo get_permalink(); ?>" class="learn-desining-banner-course"><?php echo $title_curso; ?> >>></a>
					<div class="box-body">
						<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
						<section>
							<?php if ($duration_curso): ?>
							<p><span>Duration:</span> <?php echo $duration_curso; ?></p>
							<?php endif ?>
							<?php if ($schedule_curso): ?>
							<p><span>Class Time:</span> <?php echo $schedule_curso; ?></p>
							<?php endif ?>
							<?php if ($price_curso): ?>
							<p><span>Fee:</span> <?php echo $price_curso; ?></p>
							<?php endif ?>
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				
			</div>
		</div>
	</section>


 <?php get_footer(); ?>