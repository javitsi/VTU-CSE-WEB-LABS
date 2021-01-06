<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="web8.php" method="POST">
		<label>First Operand</label>
		<input type="text" name="op1"/></br>
		<label>Choose Operator:</label>
		<input type="radio" name="operator" value="+"/>ADD
		<input type="radio" name="operator" value="-"/>SUB
		<input type="radio" name="operator" value="*"/>MUL
		<input type="radio" name="operator" value="/"/>DIV
		</br></br></br>
		<label>Second Operand</label>
		<input type="text" name="op2"/></br>
		<input type="submit" name="submit" value="submit"/>
		<input type="reset" name="reset" value="reset">
		<br>
	</form>
	<?php
		$op1 = $_POST['op1'];
		$op2 = $_POST['op2'];
		$operator = $_POST['operator'];
		switch($operator)
		{
			case '+': $res = $op1 + $op2;
			break;
			case '-': $res = $op1 - $op2;
			break;
			case '*': $res = $op1 * $op2;
			break;
			case '/': if($op2 == 0)
					$res = 0;
				else
					$res = $op1 - $op2;
			break;
		}
		echo "<center><h1> SIMPLE CALCULATOR</h1></center>";
		echo "<center><h2>".$op1.$operator.$op2."=".$res."</h2></center>";
	?>
</body>
</html>
