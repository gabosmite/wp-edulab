<?php get_header(); ?>




<?php while(have_posts()):the_post(); 

	
?>


	<section class="page-content" id="course-page">
		<div class="container">
			<main class="course-detail">
				<?php 
					$title_curso = get_field('title_curso');

					// GROUP
					$dates_curse_detail = get_field('dates_curse_detail');
					$duration = $dates_curse_detail['duration'];
					$capacity = $dates_curse_detail['capacity'];
					$price = $dates_curse_detail['price'];

					$titulo_pdf = $dates_curse_detail['pdf'].['titulo_pdf'];
					$archive_pdf = $dates_curse_detail['pdf'].['archive_pdf'];

					$duration_array = explode('//', $duration);
					$price_array = explode('//', $price);
				 ?>
				<h2><?php echo $title_curso ?></h2>

				<header>
					<div class="course-box">
						<i class="far fa-clock"></i>
						<?php if(count($duration_array)>1){ ?>                       
							<?php foreach ($duration_array as $key => $item) {   ?>                               
								<p> <?php echo $item; ?> </p>
							<?php } ?>
						<?php }else{ ?>
							<p><?php echo $duration; ?> </p>
						<?php } ?>

					</div>

					<div class="course-box">
						<i class="fas fa-chalkboard-teacher"></i>
						<p><?php echo $capacity; ?></p>
					</div>

					<div class="course-box">
						<i class="fas fa-money-check-alt"></i>
						<?php if(count($price_array)>1){ ?>                       
							<?php foreach ($price_array as $key => $item_preci) {   ?>                               
								<p> <?php echo $item_preci; ?> </p>
							<?php } ?>
						<?php }else{ ?>
							<p><?php echo $price; ?> </p>
						<?php } ?>
					</div>

					<div class="course-box">
						<h3><?php echo $titulo_pdf ?></h3>
						<button href="<?php echo $archive_pdf ?>" download >download pdf</button>
					</div>
				</header>
				<article>
					<section class="course-intro">
						<h3>Introduction</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</section>

					<section class="course-objective">
						<h3>Objectives</h3>
						<p>After this course student will be able to:</p>
						<ul>
							<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
							<li>Create interactive forms that capture and validate user input using JavaScript</li>
							<li>Create interactive forms that capture and validate user input using JavaScript</li>
							<li>Control Java Applets, ActiveX Controls and other plug-ins</li>
							<li>Control Java Applets, ActiveX Controls and other plug-ins</li>
							<li>Enhance PHP programming skills to successfully build interactive, data-driven web applications</li>
							<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
							<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
							<li>Control Java Applets, ActiveX Controls and other plug-ins</li>
							<li>Create interactive forms that capture and validate user input using JavaScript</li>
							<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
						</ul>

						<h3>Certification</h3>
						<p>After this course Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodc illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<h3>Who can apply for this course?</h3>
						<ul>
							<li>+2 with science faculty</li>
							<li>+2 with management faculty</li>
							<li>+2 with science faculty</li>
							<li>+2 with management faculty</li>
						</ul>

						<h3>Training Methodology</h3>
						<ul>
							<li>Weekly test</li>
							<li>Digital Class</li>
							<li>Field Visit and real project demonstration</li>
							<li>+2 with managem</li>
						</ul>
					</section>
				</article>					
			</main>
			<aside>
				<div class="reserve-course">
					<h2>Reserve this course</h2>
					<form>
						<input type="text" placeholder="Your Name*" required>
						<input type="email" name="userEmail" placeholder="Your Email Address..." required>
						<input type="text" placeholder="Your Occupation*" required>
						<input type="text" placeholder="Choose course*" required>
						<textarea placeholder="Write your message"></textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<!-- New Letter Ends -->
				<div class="recent-post">
					<h2>trainers</h2>
					<div class="post">
						<div class="post-wrap">
							<div class="img-wrap">
								<img src="images/recent-post-img.jpg" alt="Post Images">
							</div>
							<div class="post-content">
								<a href="#">
									<h3>Bibek Basnet</h3>
									<p>Web Developer</p>
								</a>
								<span>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</span>
							</div>
						</div>

						<div class="post-wrap">
							<div class="img-wrap">
								<img src="images/recent-post-img.jpg" alt="Post Images">
							</div>
							<div class="post-content">
								<a href="#">
									<h3>Bibek Basnet</h3>
									<p>Web Developer</p>
								</a>
								<span>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</span>
							</div>
						</div>

						<div class="post-wrap">
							<div class="img-wrap">
								<img src="images/recent-post-img.jpg" alt="Post Images">
							</div>
							<div class="post-content">
								<a href="#">
									<h3>Bibek Basnet</h3>
									<p>Web Developer</p>
								</a>
								<span>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</span>
							</div>
						</div>

						<div class="post-wrap">
							<div class="img-wrap">
								<img src="images/recent-post-img.jpg" alt="Post Images">
							</div>
							<div class="post-content">
								<a href="#">
									<h3>Bibek Basnet</h3>
									<p>Web Developer</p>
								</a>
								<span>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Recent Post Close -->
			</aside>
		</div>
		</section>
		<section class="recent-course-single">
		<div class="container">
			<h2>recent courses</h2>
			<div class="grid">
				<div class="grid-item" data-category="business">
					<div class="img-wrap">
						<img src="images/course-pic.jpg" alt="courses picture">
					</div>
					<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
					<div class="box-body">
						<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
						<section>
							<p><span>Duration:</span> 4 Years</p>
							<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
							<p><span>Fee:</span> 4,00,000</p>
						</section>
					</div>
				</div>

				<div class="grid-item" data-category="business">
					<div class="img-wrap">
						<img src="images/course-pic.jpg" alt="courses picture">
					</div>
					<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
					<div class="box-body">
						<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
						<section>
							<p><span>Duration:</span> 4 Years</p>
							<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
							<p><span>Fee:</span> 4,00,000</p>
						</section>
					</div>
				</div>

				<div class="grid-item" data-category="design">
					<div class="img-wrap">
						<img src="images/course-pic.jpg" alt="courses picture">
					</div>
					<a href="#" class="learn-desining-banner-course">Learn Web Designing >>></a>
					<div class="box-body">
						<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
						<section>
							<p><span>Duration:</span> 4 Years</p>
							<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
							<p><span>Fee:</span> 4,00,000</p>
						</section>
					</div>
				</div>
		</div>
		</section>



<?php endwhile; ?>





<?php get_footer(); ?>