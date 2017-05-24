<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
		<header>MadLibs</header>
			<nav>
				<ul>
				  <li><a class="active" href="paniek.php">Er heerst paniek...</a></li>
				  <li><a href="onkunde.php">Onkunde</a></li>
				</ul></nav>
		<main>
		<h1>Onkunde</h1>
			<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["activiteit"]?>. Neem nou <?php echo $_POST["persoon"]?>. <br>Zelfs met de hulp van een <?php echo $_POST["vakantie"]?> of zelfs <?php echo $_POST["getal"]?> kan <?php echo $_POST["persoon"]?> niet <?php echo $_POST["activiteit"]?>. <br> Dat heeft niet te maken met gebrek aan <?php echo $_POST["beigenschap"]?>, maar met een te veel aan <?php echo $_POST["seigenschap"]?>.<br> Te veel <?php echo $_POST["seigenschap"]?> leidt tot <?php echo $_POST["overkomen"]?> en dat is niet goed als je wilt <?php echo $_POST["activiteit"]?>. Helaas voor <?php echo $_POST["persoon"]?>.
		</main>
	<footer>Deze website is gemaakt door L.P. Schroots</footer>
	</body>
</html>