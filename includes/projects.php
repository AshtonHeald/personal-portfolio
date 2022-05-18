<section id="projects" class="section">
	<article>
		<h2 class="font-size-3">Projects</h2>
		<h3 class="font-size-4 mb-2">Showcasing some of my best work</h3>
		<div id="projects-container">
			<div class="glide__container">
				<div id="project-glide" class="glide">
					<div class="glide__track project-track" data-glide-el="track">
						<ul class="glide__slides">
							<li class="glide__slide">
								<!-- Project 1 Button ========================= -->
								<button class="project-btn open_modal" data-index="1">
									<img class="project-img" src="img/projects/laptop-glow-pink-600w.jpg" alt="laptop-glow-pink">
									<div class="overlay">
										<h4 class="font-size-6">Portfolio</h4>
										<p class="highlight">View Project</p>
									</div>
								</button>
							</li>
							<li class="glide__slide">
								<!-- Project 2 Button ========================= -->
								<button class="project-btn open_modal" data-index="2">
									<img class="project-img" src="img/projects/pink-cherry-blossom-tree-600w.jpg" sizes="600px" alt="pink-cherry-blossom-tree">
									<div class="overlay">
										<h4 class="font-size-6">Link Menu</h4>
										<p class="highlight">View Project</p>
									</div>
								</button>
							</li>
							<li class="glide__slide">
								<!-- Project 3 Button ========================= -->
								<button class="project-btn open_modal" data-index="3">
									<img class="project-img" src="img/projects/keyboard-glow-pink-600w.jpg" alt="keyboard-glow-pink">
									<div class="overlay">
										<h4 class="font-size-6">Start</h4>
										<p class="highlight">View Project (wip)</p>
									</div>
								</button>
							</li>
						</ul>
					</div>
					<div class="glide__arrows" data-glide-el="controls">
						<button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arrow" src="img/icons/angle-left.svg" alt=""></button>
						<button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arrow" src="img/icons/angle-right.svg" alt=""></button>
					</div>
					<div class="glide__bullets" data-glide-el="controls[nav]">
						<button class="glide__bullet" data-glide-dir="=0"></button>
						<button class="glide__bullet" data-glide-dir="=1"></button>
						<button class="glide__bullet" data-glide-dir="=2"></button>
					</div>
				</div>
				<?php include 'modals.html'; ?>
			</div>
		</div>
		<div class="flex col see-more">
			<p class="bold">See more cool projects on</p>
			<div id="see-more-links" class="flex">
				<a class="see-more-link link " href="https://codepen.io/AshtonHeald" target="_blank" rel="noopener noreferrer">
					<img class="icon" src="img/icons/links/codepen.svg" alt="codepen">
					<span>CodePen</span>
				</a>
				<span id="see-more-span">&amp;</span>
				<a class="see-more-link link " href="https://github.com/AshtonHeald" target=" _blank" rel="noopener noreferrer">
					<img class="icon" src="img/icons/links/github.svg" alt="github">
					<span>Github</span>
				</a>
			</div>
		</div>
	</article>
</section>