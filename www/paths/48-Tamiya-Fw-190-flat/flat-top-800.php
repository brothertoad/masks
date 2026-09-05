<html>
<head>
	<link rel="stylesheet" href="/site.css">
	<link rel="stylesheet" href="flat-top-800.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>flat-top-800</title>
</head>
<body>
	<div class="main-content">
		<div class="image-div cell" onclick="addCoords(event);">
			<svg>
				<path d="M 1037 266 L 928 125 L 1218 181 Q 1380 413, 1205 645 L 928 701 L 1037 560 Z" />
				<path d="M 93 742 L 52 541 L 56 436 L 732 436 Q 790 398, 732 360 L 1090 364 L 1049 674 L 551 742 Z" />
				<line x1="273" y1="551" x2="273" y2="765" />
				<line x1="547" y1="551" x2="547" y2="765" />
				<line x1="925" y1="535" x2="800" y2="740" />
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
