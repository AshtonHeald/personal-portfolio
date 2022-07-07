<section id="about" class="section">
	<!-- Margin left for sidebar -->
	<div class="another-container">
		<!-- new container w/ background-img, margin left-right: auto; padding:3.2rem -->
		<article id="about-container">
			<h2 class="h3">About</h2>
			<h3 class="h4 mb-2">Get to Know me</h3>
			<div id="about-content">
				<div id="about-content-container">
					<div id="about-content-column">
						<h3 class="h5">Who am I?</h3>
						<p class="mb-4 border-bottom">I'm Ash, a front-end web developer, an introverted writer, and
							an abstract thinker, but most importantly; I'm a
							student of life. I build fully responsive, pixel-perfect, and user-friendly interfaces and
							front-ends for web apps. I've
							been creating with and learning web-based technologies since 2018.
							<button class="highlight readmore open_modal" data-index="0"> <span>Read
									more</span></button>
						</p>
						<?php include 'about/modal.php'; ?>
						<div class="column-50">
							<div class="info mb-2">
								<b>Based: </b>
								<span>Oklahoma City, OK</span>
							</div>
							<div class="info mb-4">
								<b>Blog: </b>
								<a class="highlight" href="https://dev.to/ashtonheald" target="_blank" rel="noopener noreferrer">dev.to/ashtonheald</a>
							</div>
						</div>
						<div class="btn-group" id="about-buttons">
							<a class="btn about-button" href="ashtonheald-resume.pdf" target="_blank" rel="noopener noreferrer">Resumé</a>
							<button class="btn about-button" onclick="location.href='#projects';">My Work</button>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>