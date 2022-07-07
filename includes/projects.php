<section id="projects" class="section">
	<article>
		<h2 class="h3">Projects</h2>
		<h3 class="h4 mb-2">Showcasing some of my best work</h3>
		<div id="projects-container">
			<div class="glide__container">
				<div id="project-glide" class="glide">
					<div class="glide__track project-track" data-glide-el="track">
						<ul class="glide__slides">
							<li class="glide__slide">
								<!-- Project 1 ========================= -->
								<?php include 'projects/project1.php'; ?>
							</li>
							<li class="glide__slide">
								<!-- Project 2 ========================= -->
								<?php include 'projects/project2.php'; ?>
							</li>
							<li class="glide__slide">
								<!-- Project 3 ========================= -->
								<?php include 'projects/project3.php'; ?>
							</li>
							<li class="glide__slide">
								<!-- Project 4 ========================= -->
								<?php include 'projects/project4.php'; ?>
							</li>
						</ul>
					</div>
					<div class="glide__arrows" data-glide-el="controls">
						<button class="glide__arrow glide__arrow--left" data-glide-dir="<" title="Prev"><i class="fa-light fa-left"></i></button>
						<button class="glide__arrow glide__arrow--right" data-glide-dir=">" title="Next"><i class="fa-light fa-right"></i></button>
					</div>
					<div class="glide__bullets" data-glide-el="controls[nav]">
						<button class="glide__bullet" data-glide-dir="=0" title="Project 1"></button>
						<button class="glide__bullet" data-glide-dir="=1" title="Project 2"></button>
						<button class="glide__bullet" data-glide-dir="=2" title="Project 3"></button>
						<button class="glide__bullet" data-glide-dir="=3" title="Project 4"></button>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>