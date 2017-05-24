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
			<form action="onkunde2.php" method="post">
				<h1>Onkunde</h1>
				<p id="vraag1">Wat zou je graag willen kunnen? <input id="antwoord" type="text" name="activiteit"></p>
				<p id="vraag2">Met welke persoon kun je goed opschieten? <input id="antwoord" type="text" name="persoon"></p>
				<p id="vraag3">Wat is je favoriete getal? <input id="antwoord" type="text" name="getal"></p>
				<p id="vraag4">Wat heb je altijd bij je als je op vakantie gaat? <input id="antwoord" type="text" name="vakantie"></p>
				<p id="vraag5">Wat is je beste persoonlijke eigenschap? <input id="antwoord"  type="text" name="beigenschap"></p>
				<p id="vraag6">Wat is je slechtste persoonlijke eigenschap? <input id="antwoord" type="text" name="seigenschap"></p>
				<p id="vraag7">Wat is het engste dat je kan overkomen? <input id="antwoord"  type="text" name="overkomen"></p>
				<br><br>
				<input type="submit">	
			</form>
		</main>
	<footer>Deze website is gemaakt door L.P. Schroots.</footer>
	</body>
</html>