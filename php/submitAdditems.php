<?php
	require 'config.php';
?>

<?php

	$name = $_POST["field1"];
	$code = $_POST["field2"];
	$price = $_POST["field3"];
	$qty = $_POST["field4"];
	$brand = $_POST["field5"];

	$sql="insert into item(Item_name,Item_brand,Price,Quantity,Item_code)values('$name','$brand','$price','$qty','$code')";
	
	if($conn->query($sql)){
		
		echo "Successufullu";
	}
	else{
		echo "Error !!". $conn->error;
		
	}
	$conn->close();

?>