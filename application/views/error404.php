<!DOCTYPE html>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/404.css " />
</head>

<body class="permission_denied">
	<div id="tsparticles"></div>
	<div class="denied__wrapper">
		<h1>404</h1>
		<h3>LOST IN <span>SPACE</span> Database? Hmm, looks like that page doesn't exist.</h3>
		<img id="astronaut" src="<?php echo base_url() ?>assets/images/astronaut.svg" />
		<img id="planet" src="<?php echo base_url() ?>assets/images/planet.svg" />
		<a href="<?php echo base_url() ?>"><button class="denied__link">Go Home</button></a>
	</div>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tsparticles@1.18.11/dist/tsparticles.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/404.js"></script>

</html>
