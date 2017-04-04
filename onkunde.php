<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="css/onkunde.css">
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
				<p id="vraag1">Wat zou je graag willen kunnen?</p> <input type="text" name="activiteit"><br>
				<p id="vraag2">Met welke persoon kun je goed opschieten?</p> <input type="text" name="persoon"><br>
				<p id="vraag3">Wat is je favoriete getal?</p> <input type="text" name="getal"><br>
				<p id="vraag4">Wat heb je altijd bij je als je op vakantie gaat?</p> <input type="text" name="vakantie"><br>
				<p id="vraag5">Wat is je beste persoonlijke eigenschap?</p> <input type="text" name="beigenschap"><br>
				<p id="vraag6">Wat is je slechtste persoonlijke eigenschap?</p> <input type="text" name="seigenschap"><br>
				<p id="vraag7">Wat is het engste dat je kan overkomen?</p> <input type="text" name="overkomen"><br>
				<br><br>
				<input type="submit">	
			</form>
		</main>
	<footer>Deze website is gemaakt door L.P. Schroots.</footer>
	</body>
</html>