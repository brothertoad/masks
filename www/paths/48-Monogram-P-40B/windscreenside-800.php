<html>
<head>
	<link rel="stylesheet" href="/site.css">
	<link rel="stylesheet" href="windscreenside-800.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>windscreenside-800</title>
</head>
<body>
	<div class="main-content">
		<div class="image-div cell" onclick="addCoords(event);">
			<svg>
				<path d="M 530 124 L 587 59 Q 828 335, 987 660 L 948 723 L 122 635 L 122 560 Q 500 470, 528 119 Z" />
			</svg>
		</div>
		<div class="column cell">
			<div class="row">
				<div class="row-item">
					<input id="coords" value="" size="32" readonly />
				</div>
				<div class="row-item">
					<button type="button" onclick="clearCoords();">Clear</button>
				</div>
			</div>
			<div class="row">
				<div class="row-item">
					<a href="./">Project page</a>
				</div>
				<div class="row-item">
					<a href="/">Main page</a>
				</div>
			</div>
		</div>
	</div>
	<script>
		function clearCoords() {
			document.getElementById("coords").value = "";
		}
		function addCoords(event) {
			var coords = document.getElementById("coords");
			coords.value = coords.value + " " + event.offsetX + "," + event.offsetY;
		}
	</script>
</body>
</html>
