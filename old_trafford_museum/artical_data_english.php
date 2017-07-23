<?php
define('HOST','mysql.hostinger.in');
define('USER','u120967034_user');
define('PASS','rootroot');
define('DB','u120967034_mydb');
 
$con = mysqli_connect(HOST,USER,PASS,DB);

$sql = "select * from eng_artifact_details";
mysqli_set_charset( $con, 'utf8');

$res = mysqli_query($con,$sql);

$result = array(); 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('artifact_id'=>$row[0],
'gallery_id'=>$row[1],
'artifact_name'=>$row[2],
'artifact_description'=>$row[3],
'media_id'=>$row[4],
));
}

if($result!=null){
	echo json_encode(array("eng_artifact_details"=>$result), JSON_UNESCAPED_UNICODE);
	mysqli_close($con);
//echo json_encode($result, JSON_UNESCAPED_UNICODE);
}
else{
	print("Error in connection");
}
 
?>
