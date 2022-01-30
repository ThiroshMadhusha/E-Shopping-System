<html>
<body>
<?php equire "config.php"; 

<p> Dear <?php echo $_GET ["name"]; ?><br>
<p>Your email address is :  <?php echo $_GET ["email"]; ?><br>
<p> We will contact you soon  </p>

<?p php
$checkBox = implode(',', $_GET ['Wsession']);

$sql= "INSERT INTO students (name, email, member ,meeting site , Reserver your place)
	VALUES ('".$_GET["name"].'",'".$_GET["email"].'",$_GET["member"].'",$_GET["loction"].'",$_GET["Wsession"].'")

if ($conn->query(sql)=== TRUE){
echo "new record created sucessfully";
}else}
echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>
</body>
</html>