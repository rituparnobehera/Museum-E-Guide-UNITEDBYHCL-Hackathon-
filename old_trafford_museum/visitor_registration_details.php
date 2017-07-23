<?php
require "server_connection.php";

		////////////////////////    CHECK FOR INTERNET PERMISSION     //////////////////////////////////



/*$name = "Abhishek Kumar Soni";
$gender = "Male";
$age = 23;
$address = "Berhampur, odisha";
$country = "India";
$email = "abhisheksoni@gmail.com";
$mobile = "9006931611";
$password = "123456789";*/ 


$name = $_POST["vname"];
$gender = $_POST["vgender"];
$temp = $_POST["vage"];
$age=(int)$temp;
$address = $_POST["vaddress"];
$country = $_POST["vcountry"];
$email = $_POST["vemail"];
$mobile = $_POST["vmobileno"];  //["STRING NAME IN ANDROID"]
$password = $_POST["vpassword"];

$mysql_qry = "insert into visitors_details (vname, vgender, vage, vaddress, vcountry, vemail, vmobileno, vpassword) values ('$name', '$gender', '$age', '$address', '$country', '$email', '$mobile', '$password')";

if($conn->query($mysql_qry) == TRUE){
	echo"You Have Successfully Registered\n";
}
else{
	echo"Error: ".$mysql_qry."".$conn->error; 
}

$conn->close(); 

?>   










