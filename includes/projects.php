<section id="projects" class="section">
	<article>
		<h2 class="h3">Projects</h2>
		<h3 class="h5 mb-3">Showcasing some of my best work</h3>
		<div id="projects-container" class="glide__container">
			<div id="projectGlide" class="glide">
				<div class="glide__track project-track" data-glide-el="track">
					<ul class="glide__slides">
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="0">
									<div class="project-image">
										<img loading="lazy" src="assets/img/projects/ethereum.webp" alt="ethereum">
									</div>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="2">
									<div class="project-image">
										<img loading="lazy" src="assets/img/projects/startpage.webp" alt="start">
									</div>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="1">
									<div class="project-image">
										<img loading="lazy" src="assets/img/projects/links-project.webp" alt="links">
									</div>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="3">
									<div class="project-image">
										<img loading="lazy" src="assets/img/projects/cafe.webp" alt="cafe">
									</div>
								</button>
							</div>
						</li>
						<li class="glide__slide">
							<div class="projects-container">
								<button class="open_modal" data-index="4">
									<div class="project-image">
										<img loading="lazy" src="assets/img/projects/portfolio.webp" alt="portfolio">
									</div>
								</button>
							</div>
						</li>
					</ul>
				</div>
				<div class="glide__arrows" data-glide-el="controls">
					<button class="glide__arrow glide__arrow--left" data-glide-dir="<" title="Prev">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
							<path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
						</svg>
					</button>
					<button class="glide__arrow glide__arrow--right" data-glide-dir=">" title="Next">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
							<path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
						</svg>
					</button>
				</div>
				<div class="glide__bullets" data-glide-el="controls[nav]">
					<button class="glide__bullet" data-glide-dir="=0" title="Ethereum"></button>
					<button class="glide__bullet" data-glide-dir="=1" title="Start Page"></button>
					<button class="glide__bullet" data-glide-dir="=2" title="Bio Links"></button>
					<button class="glide__bullet" data-glide-dir="=3" title="Ash Cafe"></button>
					<button class="glide__bullet" data-glide-dir="=4" title="Portfolio"></button>
				</div>
			</div>
		</div>

	</article>
	<?php include 'projects/project-eth.php'; ?>
	<?php include 'projects/project-start.php'; ?>
	<?php include 'projects/project-links.php'; ?>
	<?php include 'projects/project-cafe.php'; ?>
	<?php include 'projects/project-portfolio.php'; ?>
</section>