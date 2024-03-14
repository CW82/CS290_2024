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
	<form action = "basic_sitePHP.php" method = "post"> <!--calls the php witha post method, I used the post method because it's more secure and since it's a 'diary' i figureed you don't want what you write to be in the url -->
		<label id = "label" for="inputText">Ur Diary Entry:</label><br>
        <input type = "text" name = "input"><br>
        <button id = "button" type="submit">Submit</button>
	</form>
  </div>
  
  <?php
  // checks if a diary entry 'text' was entered into the textbox with 'isset'
  if (isset($_POST["input"])) {
	$userInput = $_POST["input"]; // variable called 'userInput' that is set to the value of whatever the user typed in
	$openFile = fopen("diary.txt", "a"); //opens the file called 'diary' in appened mode so it deosn't overwrite anything that's already in there
    //if the file 'diary' is open,
	if ($openFile) {
		fwrite($openFile, $userInput); //then write in it whatever the user input was
		fclose($openFile); //then close it
	}
    //just prints out whatever u put in the text box
	echo ("Your Entry is: $userInput");
  }
  ?>

</body>
</html>

