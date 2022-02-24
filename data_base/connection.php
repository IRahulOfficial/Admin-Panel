<?php

session_start();
error_reporting(0);

$conn = new mysqli('localhost','root','','blog');
	if ($conn->connect_error) {
		die("Connection Failed : ".$conn->connect_error);
		
	}
	else{
		 echo "";
	}
?>