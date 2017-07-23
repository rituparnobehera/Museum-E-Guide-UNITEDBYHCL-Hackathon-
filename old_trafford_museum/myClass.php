<?php
require_once 'config.php';
class myClass
{
	public function check($user,$pass)
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$res=mysqli_query($con,"select vpassword from visitors_details where vemail = '$user'");
		$pa = mysqli_fetch_array($res)[0];
		$arr = array();
		if ($pa == $pass)
			$arr=array('check' => 'True','vemail' => "$user");
		else
			$arr=array('check' => 'False');
		return $arr;		
	}
	public function register($user,$pass,$email)
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$res=mysqli_query($con,"insert into visitors_details values ('$user','$pass','$email')");
		if($res)
			$arr=array('check' => 'True');
		else
			$arr=array('check' => 'False');
		return $arr;		
	}
	public function show($user)
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$res=mysqli_query($con,"select * from visitors_details where vemail = '$user'");
		$arr = array();
		while($row = $res->fetch_assoc())
		{
			$arr[]= $row;
		}
		return $arr;
	}
}
?>