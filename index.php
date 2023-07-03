<!DOCTYPE html>
<html lang="en" id="html">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ashton Heald - Web Portfolio</title>
	<meta name="description" content="I'm Ash, a front-end web developer, an introverted writer, and an abstract thinker. This is my web portfolio!">
	<meta name="keywords" content="Ashton, Heald, front-end, web dev">
	<meta name="author" content="Ashton Heald">
	<!-- icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://ashthe.dev/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Ashton Heald - Web Portfolio">
	<meta property="og:description" content="I'm Ash, a front-end web developer, an introverted writer, and an abstract thinker. This is my web portfolio!">
	<meta property="og:image" content="https://ashthe.dev/assets/img/meta-card.webp">
	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="ashthe.dev">
	<meta property="twitter:url" content="https://ashthe.dev/">
	<meta name="twitter:title" content="Ashton Heald - Web Portfolio">
	<meta name="twitter:description" content="I'm Ash, a front-end web developer, an introverted writer, and an abstract thinker. This is my web portfolio!">
	<meta name="twitter:image" content="https://ashthe.dev/assets/img/meta-card.webp">
	<!-- styles -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;600&display=swap" rel="stylesheet">
	<link rel="preload" href="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js" as="script">
	<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
	<link rel="preload" as="image" href="assets/img/ash-smile.png">
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body id="portfolio">
	<div id="site-container">
		<?php include 'includes/navigation.php'; ?>
		<main>
			<?php
			include 'includes/home.php';
			include 'includes/sidebar.php';
			include 'includes/about.php';
			include 'includes/projects.php';
			include 'includes/contact.php';
			include 'includes/footer.php';
			?>
		</main>
	</div>
	<script src="https://unpkg.com/@glidejs/glide@3.5.2/dist/glide.min.js"></script>
	<script src="assets/js/modals.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>