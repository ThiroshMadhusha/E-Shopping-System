<?php
$con=mysqli_connect('local host','root','','');
$txtjapply=$_POST['japply'];
$txtfname=$_POST['txfname'];
$txtlname=$_POST['txtlname'];
$txtdob=$_POST['txtdob'];
$txtgender=$_POST['txtgender'];
$txtmobile=$_POST['txtmobile'];
$txtemail=$_POST['txtemail'];
$txtyears=$_POST['txtyears'];
$txtsallary=$_POST['txtsallary'];

$sql=" INSERT INFO *'' (')";

 $rs=mysqli_query($con,$sql);
 if($rs)
 {
	 echo"contact record inserted";
 }






?>