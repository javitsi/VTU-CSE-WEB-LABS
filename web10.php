<!-- mysqli_connect() :- Connect with MySQL Database as SQL se connect secure
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "StudentDB";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
or      die(mysqli_connect_error());   If connection fails, error display.
-->
<!-- mysqli_query() :- Execute MySQL Queries
	$sql = "SELECT * FROM STUDENT";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) = 0)
		echo "No Rows are fetched";
-->
<!-- mysqli_fetch_assoc($result) :- PHP individual values, Function returns every single row from fetched result. Individual Rows fetch ke baad alag alag use
	$row = mysqli_fetch_assoc($result);
Fetch every row of he result ans then sort yayyyy!!
-->
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT RECORD</title>
</head>
<body>

<?php
	$a = [];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "StudentDB";
	$conn = mysqli_connect($servername, $username, $password, $dbname)
	or die(mysqli_connect_error());

	$sql = "SELECT * FROM STUDENT";
	$result = mysqli_query($conn, $sql);
	echo "<br>";
	echo "<center><h1>BEFORE SORTING</h1></center>";
	echo "<table border='1' align='center'>";
	echo "<tr>";
	echo "<th>USN</th><th>NAME</th><th>ADDRESS</th>";
	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row["USN"]."</td>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["Address"]."</td>";
			array_push($a, $row["USN"]);
		}
		echo "</table>";
	}
	else{
		echo "<h1>Table is Empty</h1>";
		echo "</table>";
	}
	// SELECTION SORT
	$n = count($a);
	for($i=0; $i<($n-1); $i++){
		for($j=$i+1; $j<$n; $j++){
			if($a[$j] < $a[$i]){
				$temp = $a[$i];
				$a[$i] = $a[$j];
				$a[$j] = $temp;
			}
		}
	}
	$b = [];
	$c = [];
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			for($i=0; $i<$n; $i++){
				if($row["USN"] == $a[$i]){
					$b[$i] = $row["Name"];
					$c[$i] = $row["Address"];
				}
			}
		}
	}
	echo "<br>";
	echo "<center><h1>AFTER SORTING</h1></center>";
	echo "<table border='1' align='center'>";
	echo "<tr>";
	echo "<th>USN</th><th>Name</th><th>Address</th>";
	echo "<br>";
	for($i=0; $i<$n; $i++){
		echo "<tr>";
		echo "<td>".$a[$i]."</td>";
		echo "<td>".$b[$i]."</td>";
		echo "<td>".$c[$i]."</td></tr>";
	}
	echo "</table>";
?>

</body>
</html>
