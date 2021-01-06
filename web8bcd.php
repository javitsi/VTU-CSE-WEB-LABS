<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$a = array(array(1, 2, 3),array(4, 5, 6),array(7, 8,9));
	$b = array(array(10, 11, 12),array(13, 14, 15),array(16,17, 18));
	$r = count($a);
	$c = count($a[0]);
	$m = count($b);
	$n = count($b[0]);
	echo "The first matrix a: <br/>";
	for($i=0; $i<$r; $i++){
		for($j=0;$j<$c; $j++){	
			echo $a[$i][$j]." ";
		}
		echo "</br>";
	}
	echo "The second matrix b: <br/>";
	for($i=0; $i<$m; $i++){
		for($j=0;$j<$n; $j++){	
			echo $b[$i][$j]." ";
		}
		echo "</br>";
	}
	echo "The transpose of first matrix a is: <br/>";
	for($i=0; $i<$r; $i++){
		for($j=0;$j<$c; $j++){	
			echo $a[$j][$i]." ";
		}
		echo "</br>";
	}
	echo "The transpose of second matrix b is: <br/>";
	for($i=0; $i<$m; $i++){
		for($j=0;$j<$n; $j++){	
			echo $b[$j][$i]." ";
		}
		echo "</br>";
	}
	echo "The addition of first and second matrix a+b: <br/>";
	if(($m===$r) and ($n===$c)){
		for($i=0; $i<$r; $i++){
			for($j=0;$j<$c; $j++){	
				echo $a[$i][$j]+$b[$i][$j]." ";
			}
			echo "</br>";
		}
	}
	echo "The multiplication of first and second matrix a*b: <br/>";
	if($r===$n){
		$result = array();
		for($i=0; $i<$m; $i++){
			for($j=0;$j<$c; $j++){	
				$result[$i][$j] = 0;
				for($k=0; $k<$n; $k++){
					$result[$i][$j] += $a[$i][$k]*$b[$k][$j];
				}
			}
		}
	}
	echo "The result matrix of a*b: <br/>";
	for($i=0; $i<$m; $i++){
		for($j=0;$j<$c; $j++){	
			echo $result[$i][$j]." ";
		}
		echo "</br>";
	}
?>

</body>
</html>
