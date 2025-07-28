<html>
<head>
	<link rel="stylesheet" href="site.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">	<title>Masks</title>
</head>
<body>
	<div class="main-content">
		<div>
			<h3>Path-based masks</h3>
			<ul>
				<?php
					$paths = scandir("paths");
					foreach ($paths as $path) {
						if ($path != "." && $path != "..") {
							echo("<li>$path</li>");
						}
					}
				?>
			</ul>
		</div>
		<div>
			<h3>Legacy links</h3>
			<ul>
				<li><a href="mask.html">Original masks</a></li>
				<li><a href="centered-mask.html">Centered mask.svg</a></li>
				<li><a href="mask.svg">Mask.svg</a></li>
			</ul>
		</div>
		<div>
			<a href="info.php">PHP info</a>
		</div>
	</div>
</body>
</html>
