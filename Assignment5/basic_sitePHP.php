<!DOCTYPE HTML>
<html lang = "en">
<head>
  <title>RawrXD</title>
  <link rel="icon" type="image/x-icon" href="Pictures/heart.webp">
  <meta charset = "UTF-8">
  <meta name = "keywords" content = "HTML">
  <meta name = "author" content = "Crystal Wolf">
  <meta name = "desc" content = "Assignment 5: Server Side">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link rel = "stylesheet" href = "basic_siteCSS.css">
</head>
<body>

  <img id = "heart" src = "Pictures/spinningheart.gif" alt = "spinningHeart">
  <img id = "heart2" src = "Pictures/spinningheart.gif" alt = "spinningHeart2">
  <img id = "star" src = "Pictures/starshoot.gif" alt = "shootingstargif">

  <div id = "contents">
	<form action = "basic_sitePHP.php" method = "post">
		<label id = "label" for="inputText">Type Something:</label><br>
        <input type = "text" name = "input"><br>
        <button id = "button" type="submit">Submit</button>
	</form>
  </div>
  
  <?php
  if (isset($_POST["input"])) {
	$userInput = $_POST["input"];
	$openFile = fopen("diary.txt", "a");

	if ($openFile) {
		fwrite($openFile, $userInput);
		fclose($openFile);
	}

	echo ("Your Entry is: $userInput");
  }
  ?>

</body>
</html>

