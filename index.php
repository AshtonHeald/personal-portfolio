<!DOCTYPE html>
<html lang="en" id="html">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ashton Heald | Front-End Developer Portfolio</title>
	<link rel="shortcut icon" type="image/jpg" href="assets/img/ash-happy.png">
	<meta name="description" content='Ashton Heald is a front-end web developer; this is a portfolio showcasing his work'>
	<meta name="keywords" content="Ashton, Heald, front-end, web dev">
	<meta name="author" content="Ashton Heald">
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
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