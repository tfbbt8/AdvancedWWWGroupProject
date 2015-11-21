<?php
	$con = mysqli_connect('localhost','root','pass');


	if (!$con) {
	    die('We could not connect: ' . mysqli_error($con));
	}

	$sql="SELECT * FROM shenanigans.databases";

	$result = mysqli_query($con,$sql);

	class DB{
		var $name;
		var $url;
	}

	$arr = array();

	while($row = mysqli_fetch_array($result)) {
	    $db = new DB();
	    $db->name = $row['name'];
	    $db->url = $row['url'];
	    array_push($arr,$db);
	}

	echo json_encode($arr);

	mysqli_close($con);
?>