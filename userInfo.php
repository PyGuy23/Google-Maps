<?php
	include_once('db.php');

	$name = $_POST['name'];
	$work = $_POST['work'];
	$date = $_POST['date'];
	$phoneNum = $_POST['phoneNumber'];

	if(mysql_query("INSERT INTO Customers VALUES('$name', '$work', '$date', '$phoneNum')"))
		echo "Successfully inserted data into the databse";
	else 
		echo "Could not insert data into the database";
?>