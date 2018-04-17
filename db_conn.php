<?php
function updateDB($sql){
	$conn = mysqli_connect("localhost", "root", "", "recomme");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(mysqli_query($conn, $sql)) {
		echo "New records updated successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function updateSQL($sql){
	$conn = mysqli_connect("localhost", "root", "","recomme");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	return $result;
}
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","recomme");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($$conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","recomme");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
}
?>