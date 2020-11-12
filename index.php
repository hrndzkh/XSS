<!DOCTYPE html>
<html>
<head>
	<title>Cross Site Scripting XSS</title>
</head>
<body>
	<form action="index.php" method="get">
		<input type="text" name="search" placeholder="Voer een zoekterm in">
		<input type="submit" name="submit" value="Zoek">
	</form>

	<?php
		if (isset($_GET["search"])) {
			echo "Ingevoerde zoekterm: " . $_GET["search"] . "<br>";
			echo "Er zijn geen resultaten gevonden voor de ingevoerde zoekopdracht!";
		}
	?>
</body>
</html>