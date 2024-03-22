<!DOCTYPE HTML>
<html lang = "en">
<head>
  <title>C3 GameCon/Guest Submission</title>
  <link rel="icon" type="image/x-icon" href="Pictures/c3icon.png">
  <meta charset = "UTF-8">
  <meta name = "keywords" content = "HTML">
  <meta name = "author" content = "Crystal Wolf">
  <meta name = "desc" content = "Assignment 6: Final">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link rel = "stylesheet" href = "styles.css">
</head>
<body>

  <?php 
    
	// $errors = [];
	// $errorMessage = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$comments = $_POST["comments"];
	
		// if (empty($name)) {
		// 	$errors[] = "Name is empty";
		// }
	
		// if (!empty($errors)) {
		// 	$allErrors = join('<br/>', $errors);
		// 	$errorMessage = "<p style='color: red;'>{$allErrors}</p>";
		// }

		$to = "crystalwolf601@gmail.com";//i just used mine since i don't want to send the people running the thing random emails lol
		$subject = "Guest Request";
		$body = "Name: $name\nComments: $comments";
		mail($to, $subject, $body);

		echo "Your guest request has been sent. Thank you!";
	} else {
		echo "Something went wrong, please try again!";
	}

 ?>

  <?php include "header.php";?>

  <div class = "content">
	<h1>Thank you for your submission!</h1>
	<p style = "font-weight:normal;">Stay tuned for guest announcments coming out soon!</p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
  </div>

  <?php include "footer.php";?>

</body>
</html>