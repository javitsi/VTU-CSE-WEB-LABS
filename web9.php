<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$states = "Mississippi Alabama Texas Massachussets Kansas";
	$stateArray = [];
	$states1 = explode(' ', $states);
	echo "Original Array: <br>";
	foreach($states1 as $i=>$value)
		print("STATES[$i]=$value<br>");
	// Search for a word that ends in xas
	foreach($states1 as $state){
		if(preg_match('/xas$/', ($state)))
			$statesArray[0] = ($state);
	}
	// Search for a word that begins with k and ends in s,  case insensitive - /i
	foreach($states1 as $state){
		if(preg_match('/^k.*s$/i', ($state)))
			$statesArray[1] = ($state);
	}
	// Search for a word that begins with M and ends in s
	foreach($states1 as $state){
		if(preg_match('/^M.*s$/', ($state)))
			$statesArray[2] = ($state);
	}
	// Search for a word that ends in a
	foreach($states1 as $state){
		if(preg_match('/a$/', ($state)))
			$statesArray[3] = ($state);
	}
	echo "<br>";
	echo "<br>";
	// Result Array
	foreach($statesArray as $i=>$value)
		print("STATES[$i]=$value<br>");
?>

</body>
</html>
