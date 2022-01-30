<?php
	session_start();
	require 'config.php';

	$uname = $_POST["uname"];
	$password = $_POST["password"];

	$check = "SELECT Email,Password FROM sellerinfo WHERE Email = '$uname';";
	$result = $con->query($check);
	echo mysqli_num_rows($result);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$tuname = $row["Email"];
			$tpwd = $row["Password"];

			if($tuname == $uname && $tpwd == $password)
			{
				$_SESSION['user'] = $tuname;
				echo $_SESSION['user']; 
				if(!isset($_SESSION['user']))
				{
					$_SESSION['user'] = $uname;

				}
				header('Location:../php/sellerprofile.php');
			}
			else
			{
				session_destroy();
				echo "<script>alert ('Wrong credentials! Try again')</script>";
				header('Location:../html/sellersignin.html');
			}
		}
	}
 	

?>