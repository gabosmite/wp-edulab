<?php 
	/* Template Name: Nosotros */
	get_header()
 ?>

<?php while(have_posts()):the_post(); 
    
    $banner_list_about = get_field('banner_list_about');
    $history_list_about = get_field('history_list_about');
    $list_team = get_field('list_team');

?> 
		<?php if ($banner_list_about): ?>
		<div class="banner">
			<div class="owl-four owl-carousel">
				<?php foreach ($banner_list_about as $key => $item): 
	                $imagen_banner_about = $item['imagen_banner_about'];
	            ?>
				<img src="<?php echo $imagen_banner_about ?>" alt="Image of Bannner">
				<?php endforeach ?>
			</div>
			<?php 
				$banner_title_about = get_field('banner_title_about');
				$banner_description_about = get_field('banner_description_about');

			 ?>
			<div class="container">
				<h1><?php echo $banner_title_about ?></h1>
				<h3><?php echo $banner_description_about ?></h3>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		<?php endif ?>
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
          </div>
		</div> -->

		<?php 
			$title_about = get_field('title_about');
			$description_about = get_field('description_about');

		 ?>
		<section class="about-upper-section" itemprop="mainContentofPage">
			<div class="container">
				<article class="who-we-are">
					<h2 class="top-heading"><?php echo $title_about ?></h2>
					<?php echo $description_about ?>
				</article>
				<?php 
					$title_history_about = get_field('title_history_about');
					

				 ?>
				<div class="our-story">
					<h2 class="top-heading"><?php echo $title_history_about ?></h2>

					<?php if ($history_list_about): ?>
					<ul>
						<?php foreach ($history_list_about as $key => $item): 
			                $icon_history = $item['icon_history'];
			                $description_history_about = $item['description_history_about'];
			            ?>
						<li>
							<img src="<?php echo $icon_history ?>" width="30" alt="Image of Bannner"> 
							<a><?php echo $description_history_about ?></a>
						</li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>

				</div>
			</div>
		</section>
		<?php 
			$title_team_about = get_field('title_team_about');

		 ?>
		<section class="team-members" itemprop="contributor">
			<div class="container">
				<h2 class="top-heading"><?php echo $title_team_about ?></h2>
				<?php if ($list_team): ?>
				<article class="developer-grid">
					<?php foreach ($list_team as $key => $item): 
		                $image = $item['person_date']['image'];
		                $name = $item['person_date']['name'];
		                $position = $item['person_date']['position'];

		                $team_facebook_team = $item['redes_sociales']['team_facebook_team'];
		                $team_instagram_team = $item['redes_sociales']['team_instagram_team'];
		                $team_twitter_team = $item['redes_sociales']['team_twitter_team'];
		                $team_linkedin_team = $item['redes_sociales']['team_linkedin_team'];

		            ?>
					<div class="developer-wrap">
						<img src="<?php echo $image ?>" alt="developer images">
						<h3><?php echo $name ?></h3>
						<p><?php echo $position ?></p>
						<ul>
							<?php if ($team_facebook_team): ?>
								<li><a target="_blank" href="<?php echo $team_facebook_team ?>"><i class="fab fa-facebook-f"></i></a></li>
							<?php endif ?>
							<?php if ($team_instagram_team): ?>
							<li><a target="_blank" href="<?php echo $team_instagram_team ?>"><i class="fab fa-instagram"></i></a></li>
							<?php endif ?>
							<?php if ($team_twitter_team): ?>
							<li><a target="_blank" href="<?php echo $team_twitter_team ?>"><i class="fab fa-twitter"></i></a></li>
							<?php endif ?>

							<?php if ($team_linkedin_team): ?>
							<li><a target="_blank" href="<?php echo $team_linkedin_team ?>"><i class="fab fa-linkedin-in"></i></a></li>
							<?php endif ?>
						</ul>
					</div>
					<?php endforeach ?>
					
				</article>
				<?php endif ?>
			</div>
		</section>
		<!-- Team Members Closed  -->

		<?php 
			$id_testimony = 74;
			$title_testimony = get_field('title_testimony',$id_testimony);
			$subtitle_testimony = get_field('subtitle_testimony',$id_testimony);
			$testimony_list = get_field('testimony_list',$id_testimony);

		 ?>
		<section class="what-other-say">
			<div class="container">
				<h4 class="article-subtitle"><?php echo $title_testimony; ?></h4>
				<h2 class="head"><?php echo $subtitle_testimony; ?></h2>
				<?php if ($testimony_list): ?>
					
				
					<div class="three owl-carousel owl-theme">
						<?php foreach ($testimony_list as $item): 
							$image = $item['datos_group']['image'];
							$name = $item['datos_group']['name'];
							$calification = $item['datos_group']['calification'];

							$description = $item['description'];

							$list_star = array('star 1', 'star 2', 'star 3', 'star 4', 'star 5');

							// print_r($list_star);
						?>
						
						
						<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
							<div class="border">
								<div class="customer">
									<figure>
										<img class="customer-img" src="<?php echo $image ?>" alt="Person image">
										<figcaption>
											<span itemprop="author"><?php echo $name ?></span>

											<div class="stars" data-stars="<?php echo $calification ?>">
												<?php foreach ($list_star as $key => $subItem): 
													$index = $key + 1;
													$class_active = $index <= $calification ? 'active' : '';
												?>
													<?php //echo 'calification'.$calification.'  '.'index'.$index ?>
													<div class="starBox <?php echo $class_active ?>">
														
														<img class="star-yellow" src="<?php echo ASSETS ?>images/star.svg" width="20" alt="Person image">
														<img class="star-gray" src="<?php echo ASSETS ?>images/star2.svg" width="20" alt="Person image">
													</div>
												<?php endforeach ?>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="customer-review">
									<?php echo $description; ?>
								</div>
							</div>
						</div>
						<?php endforeach ?>
						
					</div>
				<?php endif ?>
			</div>
		</section>

<?php endwhile; ?>

 <?php 

	get_footer();
  ?>

  <script type="text/javascript" src="<?php echo ASSETS ?>js/jquery.mmenu.all.js"></script>

  <script type="text/javascript">
  		// for (var i = 0; i < 6.length; i++) {
  			
  		// }

  </script>