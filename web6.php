<!-- Initial Count is 0, every time page is loaded access the count stored, increment it, display it and store the count back -->
<!-- Store the count of Visitors in a simple text file as text, access count from a text file using PHP, Store count in a text file using PHP File Handling: fopen(), fread(), fwrite(), fclose() -->
<!-- fopen(filename, mode):- read mode r, write mode w, the return type is a File Pointer to opened file which can be used as parameter to other function to refer opened file. Example - $handle = fopen("count.txt", 'r'); -->
<!-- fread(filePointer, nbytes):- Must use fopen() first, it uses it's returned values and in 'r' mode, number of bytes to read, return type: data read from the files. Example - $count = fread($handle, 10);-->
<!-- fwrite(filePointer, value):- Return of fopen() but writes. Value-Data that has to be written in the file, returns the number of bytes written. Example: fwrite($handle, $count)-->
<!-- fclose(filePointer):- Responsibility to close the program after usage, so that no other file can read or write by mistake. To Avoid Overwriting. Example: fclose($handle); -->
<?php
	echo "<h1> REFRESH PAGE </h1>";
	$file = "counter.txt";
	$c = file_get_contents($file);
	file_put_contents($file, $c+1);
	echo "The Number of Users visited: " .$c;
?>
