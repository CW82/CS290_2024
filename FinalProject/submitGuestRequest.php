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