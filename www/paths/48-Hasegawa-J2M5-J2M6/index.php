<html>
<head>
	<link rel="stylesheet" href="/site.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>48-Hasegawa-J2M5-J2M6</title>
</head>
<body>
	<div class="main-content">
		<div>
			<h3>48-Hasegawa-J2M5-J2M6 images</h3>
			<ul>
				<?php
					$images = scandir(".");
					foreach ($images as $image) {
						// We have PHP 7, so str_ends_with is not available.
						$ext = substr($image, -4);
						if ($ext == ".png" || $ext == ".jpg") {
							$base = substr($image, 0, strlen($image) - 4);
							echo("<li><a href=\"$base.html\">$base</a></li>");
						}
					}
				?>
			</ul>
		</div>
		<div>
			<a href="/">Home</a>
		</div>
	</div>
</body>
</html>
