<?php
//linking the configuration file
require 'config.php';

$phno = $_POST["phno"];
$shpnme = $_POST["shpnme"];
$pnvc = $_POST["pnvc"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$crmpwd = $_POST["crmpwd"];
$acctype = $_POST["acctype"];


if (!empty($phno) || !empty($shpnme) || !empty($pnvc) || !empty($email) || !empty($pwd) || !empty($crmpwd)){
	
	$SELECT = "SELECT Email From sellerinfo Where Email = ? Limit 1";
     $INSERT = "INSERT Into sellerinfo (Phoneno, Shopname, Email, Password, Accountype) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $con->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("issss",$phno, $shpnme, $email, $pwd, $acctype);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $con->close();
    }
else {
 echo "All field are required";
 die();
}

?>