<!DOCTYPE html>
<html lang="en" id="html">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ashton Heald | Portfolio</title>
	<link rel="shortcut icon" type="image/jpg" href="img/ash-happy.png">
	<meta name="description" content='Ashton Heald is a front-end web developer; this is a portfolio showcasing his work'>
	<meta name="keywords" content="Ashton, Heald, front-end, web dev">
	<meta name="author" content="Ashton G. Heald">
	<link rel="stylesheet" href="styles/css/main.css">
</head>

<body>
	<canvas class="background" id="canvas"></canvas>
	<div id="site-container">
		<?php include 'includes/navigation.html'; ?>
		<main>
			<?php
			include 'includes/home.html';
			include 'includes/sidebar.html';
			include 'includes/about.html';
			include 'includes/projects.php';
			include 'includes/contact.php';
			include 'includes/footer.php';
			?>
		</main>
	</div>
	<script src="https://unpkg.com/@glidejs/glide@3.5.2/dist/glide.min.js"></script>
	<script src="js/canvas.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>