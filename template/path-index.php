<html>
<head>
	<link rel="stylesheet" href="/site.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>PROJECT</title>
</head>
<body>
	<div class="main-content">
		<div>
			<h3>PROJECT images</h3>
			<ul>
				<?php
					$images = scandir(".");
					foreach ($images as $image) {
						// We have PHP 7, so str_ends_with is not available.
						$ext = substr($image, -4);
						if ($ext == ".png" || $ext == ".jpg") {
							$base = substr($image, 0, strlen($image) - 4);
							$target = $base . ".php";
							if (file_exists($target)) {
								echo("<li><a href=\"$target\">$base</a></li>");
							}
						}
					}
				?>
			</ul>
		</div>
			<?php
				$svg = "PROJECT.svg";
				if (file_exists($svg)) {
					echo("<div>");
					echo("<img src=\"$svg\" alt=\"full SVG\">");
					echo ("</div>");
				}
			?>
		<div>
			<a href="/">Home</a>
		</div>
	</div>
</body>
</html>
