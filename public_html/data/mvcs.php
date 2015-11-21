<?php
	$con = mysqli_connect('localhost','root','pass');


	if (!$con) {
	    die('We could not connect: ' . mysqli_error($con));
	}

	$sql="SELECT * FROM shenanigans.mvcs";

	$result = mysqli_query($con,$sql);

	class MVC{
		var $name;
		var $url;
	}

	$arr = array();

	while($row = mysqli_fetch_array($result)) {
	    $mvc = new MVC();
	    $mvc->name = $row['name'];
	    $mvc->url = $row['url'];
	    array_push($arr,$mvc);
	}

	echo json_encode($arr);

	mysqli_close($con);
?>