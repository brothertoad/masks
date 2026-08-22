<html>
<head>
	<link rel="stylesheet" href="/site.css">
	<link rel="stylesheet" href="w-rotated-800.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>w-rotated-800</title>
</head>
<body>
	<div class="main-content">
		<div class="image-div cell" onclick="addCoords(event);">
			<svg>
				<path d="M 76 688 L 182 148 C 245 44, 445 44, 508 148 L 614 688 Q 345 624, 76 688" />
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
