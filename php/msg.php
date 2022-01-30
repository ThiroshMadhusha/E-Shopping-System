<?php
 if(isset($_POST['BtnSubmit']))
 {
 echo "<h2>Bellow is the form data</h2>";
 echo "<hr>";
 echo "</br>Your Name :{$_POST['fname']}";
 echo "</br>Your Telephone No :{$_POST['teleNo']}";
 echo "<hr>";
 echo "<h2>Thank you!</h2>";
 }
?>