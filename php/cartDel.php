<?php
    include_once('conn.php');
    session_start();


    if(isset($_GET['item'])){
        $Song = $_GET['item'];
        $user= $_SESSION['id'];

        $sql = "DELETE FROM cart WHERE fileName='$Item' AND userId='$user'";
        $result=$conn->query($sql);

        if($result){
            header("location: ../cart.php?sucess=itemRemoved");
           }else{
            echo "<script> alert('Not Deleted!!');</script> ";
           }
  
    }
    else{
        header("location: ../cart.php?rerror=itemNotFound");
    }
?>