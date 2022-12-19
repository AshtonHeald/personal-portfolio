<!DOCTYPE html>
<html lang="en" id="html">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ashton Heald - Web Portfolio</title>
	<meta name="description" content="I'm Ash, a front-end web developer, and this is my portfolio!">
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
	<meta property="og:description" content="I'm Ash, a front-end web developer, and this is my portfolio!">
	<meta property="og:image" content="https://ashthe.dev/assets/img/meta-card.png">
	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="ashthe.dev">
	<meta property="twitter:url" content="https://ashthe.dev/">
	<meta name="twitter:title" content="Ashton Heald - Web Portfolio">
	<meta name="twitter:description" content="I'm Ash, a front-end web developer, and this is my portfolio!">
	<meta name="twitter:image" content="https://ashthe.dev/assets/img/meta-card.png">
	<!-- styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body id="portfolio">
	<canvas id="snow"></canvas>
	<?php include 'includes/navigation.php'; ?>
	<main>
		<?php
		include 'includes/about.php';
		include 'includes/skills.php';
		include 'includes/projects.php';
		include 'includes/contact.php';
		?>
	</main>
	<?php include 'includes/footer.php'; ?>
	<script src="assets/js/modals.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>
	<script src="assets/js/canvas.js"></script>
	<script src="assets/js/scripts.js" defer></script>
</body>

</html>