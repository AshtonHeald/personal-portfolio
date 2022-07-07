<div id="navigation">
	<a id="nav-icon" href="#">灰</a>
	<input type='checkbox' name='thing' value='valuable' id="menu-toggle" />
	<label id="menu-toggle-btn" for="menu-toggle" class="df"></label>
	<div id="toggle">
		<div id="nav-header">
			<img id="avatar" class="df" src="assets/img/ash-happy.png" alt="ash-happy" />
			<span class="bold">Front-End Developer</span>
			<a href="https://www.linkedin.com/in/ashtonheald/" id="status" class="highlight" target="_blank" rel="noopener noreferrer">
				<span>@ Looking for Work</span>
			</a>
		</div>
		<nav>
			<ul class="flex nav-list">
				<li class="links">
					<a class="nav-link test" href="#home" onclick="toggle()"> Home</a>
				</li>
				<li class="links">
					<a class="nav-link test" href="#about" onclick="toggle()">About</a>
				</li>
				<li class="links">
					<a class="nav-link test" href="#projects" onclick="toggle()">Projects</a>
				</li>
				<li class="links">
					<a class="nav-link test" href="#contact" onclick="toggle()">Contact</a>
				</li>
				<li class="">
					<span class="nav-link">
						<span id="light-theme-icon" class="theme-icon">
							<i class="fa-solid fa-brightness"></i>
						</span>
						<div class="theme-switch-wrapper">
							<label for="theme-btn">
								<input type="checkbox" id="theme-btn">
								<div class="slider-wrapper" title="Toggle Theme">
									<span class="theme-btn-slider"></span>
								</div>
							</label>
						</div>
						<span id="dark-theme-icon" class="theme-icon disabled">
							<i class="fa-light fa-moon"></i>
						</span>
					</span>
				</li>
				<li class="flex menu-footer">
					<span>Made with&nbsp;</span>
					<i class="fa-light fa-mug-hot"></i>
				</li>
			</ul>
		</nav>
	</div>
</div>