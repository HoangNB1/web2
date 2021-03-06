<?php
		$hostname = "3.93.188.184";
		$user = "ec2-user";
		$pass = "123@123a";
		$db = "tunesource";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>
