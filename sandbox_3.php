<?php
    // A BETTER WAY TO INTERACT WITH FILES

	$file = 'quotes.txt'; 
	
	// opening a file for reading, there are of course more options available 
	// $handle = fopen($file, 'r');

	// read the file 
	// echo fread($handle, filesize($file)); // getting the file size to makes sure we read all of it
	// echo fread($handle, 112); // read 112 bytes

	// read a single line, "s"
	// echo fgets($handle);
	// echo fgets($handle);

	// read a single character, "c"
	// echo fgetc($handle);
	// echo fgetc($handle);

	// $handle = fopen($file, 'r+'); // read and write
	// $handle = fopen($file, 'a+'); // read, write; place the file pointer at the end of the file. If the file does not exist, attempt to create 
	// writing to a file
	// fwrite($handle, "\nEverything popular is wrong."); // new line and start with the string, replacing the characters with the string

	// fclose($file);

	unlink($file); // unlink deletes a file

?>