	
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
		<?php
		echo "Er zijn dieren zoals een ";
		echo $_POST["pet"];
		echo "<br>";
		echo "Kan niet tegen dat je deze had gekozen.";
		echo $_POST["person"];
		echo "<br>";
		echo "Echt een land dat niet zo mooi.";
		echo $_POST["nation"];
		echo "<br>";
		echo "Wat een verspilling.";
		echo $_POST["bored"];
		echo "<br>";
		echo "Vast in het roze.";
		echo $_POST["toy"];
		echo "<br>";
		echo "Waarom doe je dit.";
		echo $_POST["skip"];
		echo "<br>";
		echo "Samen delen samen spelen.";
		echo $_POST["money"];
		echo "<br>";
		echo "Wat een leuke keuze.";
		echo $_POST["active"];
		?>

														
	</article>
	<footer>
		<p>Deze website is gemaakt door Jelmer</p>
	</footer>


</body>
</html>