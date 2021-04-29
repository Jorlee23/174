<html>

<body>
<center>
<h1>Add a game to Steam.</h1>
<br>

<form action="insert.php" method="post">


Game Name: <input type="text" name="g_name" /><br><br>

Game Price: <input type="text" name="g_price" /><br><br>

Game Genre: <input type="text" name="g_genre" /><br><br>

<input type="submit" value="Insert">

</select>

</form>
<br><br>
<h3>Currently Available Games</h3>


<?php

$username="dbmasteruser";
$password="2!Ib+WXS7k6+d~`t_YA8CZsy,k=w>F!G";
$hostname="ls-5043d85224f7bec8c5e6623252b03f44b243b984.cnlujzbcphmv.us-west-2.rds.amazonaws.com";
$database="bitnami_wordpress";

$con = mysqli_connect($hostname, $username, $password)
  or die("Connection Failed");
  


$dbconn = mysqli_select_db($con, $database)
  or die("DB not selected");


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

?>
</center>
</body>
</html>