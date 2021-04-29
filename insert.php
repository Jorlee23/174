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

	$sql2 = "select * from Game";
	$result = $con->query($sql2);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc() ) {
			echo $row["g_name"] . "  " .$row["g_price"]. "<br><br>";
		}
	}
	else {
		echo "0 records";
	}

	if(!mysqli_query($con,$sql))
	{
		echo'Not inserted.';
	}
	
	else
	{	
		echo'Inserted. <br>';
	}

	
	header("url=index.php");
?>
<br>
<br>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</body>

</html>