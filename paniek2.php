<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="css/paniek2.css">
</head>
	<body>
		<header>MadLibs</header>
			<nav>
				<ul>
				  <li><a class="active" href="paniek.php">Er heerst paniek...</a></li>
				  <li><a href="onkunde.php">Onkunde</a></li>
				</ul></nav>
		<main>
			<h1>Er heerst paniek...</h1>
			<p>Er heerst paniek in het koningkrijk <?php echo $_POST["land"]?>. Koning <?php echo $_POST["persoon"]?> is ten einde raad en als koning <?php echo $_POST["persoon"]?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["docent"]?>.</p>
			<p>"<?php echo $_POST["docent"]?>! Het  is een ramp! Het is een schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?php echo $_POST["huisdier"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had Lego voor hem gekocht!"</p>
			<p>"Majesteit, uw <?php echo $_POST["huisdier"]?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"]?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"]?> voor gebruiken."</p>
			<p>"<?php echo $_POST["docent"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<p>"<?php echo $_POST["verveling"]?>, Sire"</p>
		</main>
	<footer>Deze website is gemaakt door L.P. Schroots</footer>
	</body>
</html>