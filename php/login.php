<?php

if (isset($_POST['btn-login']){
	$UName=$_POST['Username'];
	$Pass=$_POST['Password'];
	$con= mysqli_connect('localhost','root','','register');
	 
	if(empty($UName) ||empty($Pass)){
      echo "please fill in the blanks";
	}
	 else
	      { $query="SELECT *FROM tb1_login WHERE User='$UName'";
	       $result=mysqli_query($con,$query);}
	 
	    if (row=mysqli_fetch_assoc($result)){
		   $db_password=$row['pass'];
		 
		        if(md5($Pass)==$db_Password){
                  header("location:register.html");}
			    else{
				 echo"incorrect password";
			    }else{
				 echo"please check your query";
	    }
    }
}


?>