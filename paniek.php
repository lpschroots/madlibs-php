<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
	<body>
		<header>MadLibs</header>
			<nav>
				<ul>
				  <li><a class="active" href="paniek.php">Er heerst paniek...</a></li>
				  <li><a href="onkunde.php">Onkunde</a></li>
				</ul></nav>
		<main>
			<form action="paniek2.php" method="post">
				<p id="vraag1">Welk dier zou je nooit als huisdier willen hebben?</p> <input type="text" name="huisdier"><br>
				<p id="vraag2">Wie is de belangrijkste persoon in je leven?</p> <input type="text" name="persoon"><br>
				<p id="vraag3">In welk land zou je graag willen wonen?</p> <input type="text" name="land"><br>
				<p id="vraag4">Wat doe je als je je verveelt?</p> <input type="text" name="verveling"><br>
				<p id="vraag5">Met welk speelgoed speelde je als kind het meest?</p> <input type="text" name="speelgoed"><br>
				<p id="vraag6">Bij welke docent spijbel je het liefst?</p> <input type="text" name="docent"><br>
				<p id="vraag7">Als je €100.000,- had, wat zou je dan kopen?</p> <input type="text" name="geld"><br>
				<p id="vraag8">Wat is je favoriete bezigheid?</p> <input type="text" name="bezigheid"><br><br>
				<input type="submit">	
			</form>
		</main>
	</body>
</html>