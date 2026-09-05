<html>
<head>
	<link rel="stylesheet" href="/site.css">
	<link rel="stylesheet" href="rear-800.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>rear-800</title>
</head>
<body>
	<div class="main-content">
		<div class="image-div cell" onclick="addCoords(event);">
			<svg>
				<path d="M 208 80   Q 640 42, 1201 74 Q 1212 120, 1178 154   Q 766 492, 326 744   Q 294 744, 270 726 L 74 184  Q 64 104, 208 80" />
				<!-- original corners
				<path d="M 126 322 L 86 212 Q 50 110, 154 90 Q 254 70, 354 70 Z" />
				<path d="M 516 636 L 313 747 Q 290 760, 282 739 L 210 554 Z" />
				<path d="M 876 60 L 1212 78 Q 1250 80, 1217 107 L 928 348 Z" />
				-->
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
