<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php
		if(isset($_POST['submit_read'])) {
			$file = fopen("example.txt", "r") or die("Unable to open file!");
			$text = fread($file, filesize("example.txt"));
			fclose($file);
			echo "Text from file: " . $text;
		}
	?>
</body>
</html>