<?php
	

?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="title">
		<img src="title.PNG" alt="Mad Libs">
	</div>
	<header>
		<ul>
			<li> <a href="index.php">Er heerst Paniek</a></li>
		</ul>
	</header>
	<article>
		<h2>Er heerst paniek...</h2>
		<form action="results.php" method="POST">
			<label>Welk dier zou je nooit als huisdier willen hebben?</label><input required="true" type="text" name="pet"><br>
			<label>Wie is de belangrijkste persoon in je leven?</label><input required="true" type="text" name="person"><br>
			<label>in welk zal je graag willen wonen?</label><input required="true" type="text" name="nation"><br>						
			<label>Wat doe je als je je verveelt?</label><input required="true" type="text" name="bored"><br>
			<label>Met welke speelgoed speelde je als kind het meest?</label><input required="true" type="text" name="toy"><br>
			<label>bij welke docent spijbel je het liefst?</label><input required="true" type="text" name="skip"><br>
			<label>als je € 100.000 had, wat zal je dan kopen?</label><input required="true" type="text" name="money"><br>
			<label>Wat is je favoriete bezigheid?</label><input required="true" type="text" name="active"><br>
			<button type="submit">versturen</button>															
		</form>
	</article>
	<footer>
		<p>Deze website is gemaakt door Jelmer</p>
	</footer>


</body>
</html>