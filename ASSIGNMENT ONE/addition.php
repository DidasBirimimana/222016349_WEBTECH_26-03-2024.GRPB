<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results of addition</title>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];

	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$adding=$num1+$num2;
	echo "<p> The First name is: $fname</p>";
	echo "<p> The Last name is: $lname</p>";

	echo "<p> The Addition of $num1 and $num2 is: $adding</p>";
}
?>
</body>
</html>