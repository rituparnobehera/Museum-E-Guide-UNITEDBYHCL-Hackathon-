<?php
$server_name = "mysql.hostinger.in";
$mysql_username = "u120967034_user";
$mysql_password = "rootroot";
$db_name = "u120967034_mydb";


$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if($conn){
	echo"Server Connection Successfully!!!....\n";
}else{
	echo"Server Connection Faild....\n";
}
	////////////////////////    CHECK FOR INTERNET PERMISSION     //////////////////////////////////
?>