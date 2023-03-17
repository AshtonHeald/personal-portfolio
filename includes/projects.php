<section id="projects" class="section">
	<article>
		<h2 class="h3">Projects</h2>
		<h3 class="h5 mb-2">Showcasing some of my best work</h3>
		<div id="projects-container" class="glide__container">
			<div id="projectGlide" class="glide">
				<div class="glide__track project-track" data-glide-el="track">
					<ul class="glide__slides">
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="0">
									<picture class="project-image">
										<source srcset="assets/img/projects/portfolio-dark.webp" media="(prefers-color-scheme: dark)">
										<img src="assets/img/projects/portfolio-light.webp">
									</picture>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="1">
									<div class="project-image">
										<img src="assets/img/projects/ethereum.webp" alt="test">
									</div>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="2">
									<div class="project-image">
										<img src="assets/img/projects/coming-soon.webp" alt="test">
									</div>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="3">
									<picture class="project-image">
										<source srcset="assets/img/projects/portfolio-dark.webp" media="(prefers-color-scheme: dark)">
										<img src="assets/img/projects/portfolio-light.webp">
									</picture>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="4">
									<picture class="project-image">
										<source srcset="assets/img/projects/bio-links-dark.webp" media="(prefers-color-scheme: dark)">
										<img src="assets/img/projects/bio-links-light.webp">
									</picture>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="5">
									<picture class="project-image">
										<source srcset="assets/img/projects/bio-links-dark.webp" media="(prefers-color-scheme: dark)">
										<img src="assets/img/projects/bio-links-light.webp">
									</picture>
								</button>
							</div>
						</li>
					</ul>
				</div>
				<div class="glide__arrows" data-glide-el="controls">
					<button class="glide__arrow glide__arrow--left" data-glide-dir="<" title="Prev"><i class="fa-sharp fa-solid fa-angle-left"></i></button>
					<button class="glide__arrow glide__arrow--right" data-glide-dir=">" title="Next"><i class="fa-sharp fa-solid fa-angle-right"></i></button>
				</div>
				<div class="glide__bullets" data-glide-el="controls[nav]">
					<button class="glide__bullet" data-glide-dir="=0" title="Project 1"></button>
					<button class="glide__bullet" data-glide-dir="=1" title="Project 2"></button>
					<button class="glide__bullet" data-glide-dir="=2" title="Project 3"></button>
					<button class="glide__bullet" data-glide-dir="=3" title="Project 4"></button>
					<button class="glide__bullet" data-glide-dir="=4" title="Project 5"></button>
					<button class="glide__bullet" data-glide-dir="=5" title="Project 6"></button>
				</div>
			</div>
		</div>

	</article>
	<?php include 'projects/project1.php'; ?>
	<?php include 'projects/project2.php'; ?>
	<?php include 'projects/project3.php'; ?>
	<?php include 'projects/project4.php'; ?>
	<?php include 'projects/project5.php'; ?>
	<?php include 'projects/project6.php'; ?>
</section>