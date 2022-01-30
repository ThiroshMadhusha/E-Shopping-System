<?php 

require 'config.php';

	$username = $_POST['user'];
	$password = $_POST['newpwd'];

	$query = "UPDATE customerinfo SET Password = '$newpwd' WHERE Email = '$user'";
	
?>