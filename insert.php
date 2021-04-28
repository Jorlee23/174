<html>

<body>

 

 

<?php

$username="dbmasteruser";
$password="2!Ib+WXS7k6+d~`t_YA8CZsy,k=w>F!G";
$hostname="ls-5043d85224f7bec8c5e6623252b03f44b243b984.cnlujzbcphmv.us-west-2.rds.amazonaws.com";
$database="bitnami_wordpress";

$con = mysqli_connect($hostname, $username, $password)
  or die("Connection Failed");

$dbconn = mysqli_select_db($con, $database)
  or die("DB not selected");

	$g_name = $_POST['g_name'];
	$g_price = $_POST ['g_price'];
	$g_genre = $_POST ['g_genre'];
	
	$sql = "INSERT INTO Game (g_name,g_price,g_genre) VALUES ('$g_name', '$g_price', '$g_genre')";

	if(!mysqli_query($con,$sql))
	{
		echo'Not inserted.';
	}
	
	else
	{
		echo'Inserted.';
	}
	
	header("refresh:2; url=index.php");
?>

</body>

</html>