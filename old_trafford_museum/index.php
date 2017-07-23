<?php
require_once 'myClass.php';
$db = new myClass();
if(isset($_GET["vemail"]) && isset($_GET["vpassword"]))
{
	echo json_encode($db->check($_GET["vemail"],$_GET["vpassword"]));

}
else if(isset($_GET["vemail"]))
{
	echo json_encode($db->show($_GET["vemail"]));
}
else
{
	echo "API SERVER - Send Request To Get Response.";
}
?>
