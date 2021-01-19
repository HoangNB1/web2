<?php
		$hostname = "34.200.32.20";
		$user = "root";
		$pass = "123@123a";
		$db = "tunesource";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>
