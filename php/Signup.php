<?php
//linking the configuration file
require 'config.php';

$phno = $_POST["phno"];
$fname = $_POST["fname"];
$pnvc = $_POST["pnvc"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$crmpwd = $_POST["crmpwd"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];

if (!empty($phno) || !empty($fname) || !empty($pnvc) || !empty($email) || !empty($pwd) || !empty($crmpwd) || !empty($dob)){
	
	$SELECT = "SELECT Email From customerinfo Where Email = ? Limit 1";
    $INSERT = "INSERT Into Customerinfo (Phoneno, Fullname, Email, Password, Gender, DOB) values(?, ?, ?, ?, ?, ?)";
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
      $stmt->bind_param("isssss",$phno, $fname, $email, $pwd, $gender, $dob);
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