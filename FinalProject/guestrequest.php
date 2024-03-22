<!DOCTYPE HTML>
<html lang = "en">
<head>
  <title>C3 GameCon/</title>
  <link rel="icon" type="image/x-icon" href="Pictures/c3icon.png">
  <meta charset = "UTF-8">
  <meta name = "keywords" content = "HTML">
  <meta name = "author" content = "Crystal Wolf">
  <meta name = "desc" content = "Assignment 6: Final">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link rel = "stylesheet" href = "styles.css">
</head>
<body>

  <?php include "header.php";?>

  <!--  -->
  <div style = "text-align: center;" class = "contents">
	<h1>Guests Requests </h1>
	<div id = "guestrect">
	  <p>Is there an artist, writer, actor, or creator you'd love to see at
	   our convention? Use the form below to request your favorite creator to join us!
	   We can't guarantee that your favorite creator can come, but we want to hear from 
	   you. Submit your suggestions today and help make our convention even more fantastic!</p>
	</div>

	<br>

	<div id = "formbg">
	  <form action = "submitGuestRequest.php" method = "post">
	    <label for = "name">Name of Guest:</label><br>
        <input type = "text" id = "name" name = "name" ><br><br>

        <label for = "comments">Additional Comments:</label><br>
        <textarea id = "comments" name = "comments"></textarea><br><br>

        <input type = "submit" name = "send" value = "Submit">
	</div>

	<br>

  </div>

  <?php include "footer.php";?>

</body>
</html>