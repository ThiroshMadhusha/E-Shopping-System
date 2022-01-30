<?php
    include_once('../conn.php');
    session_start();


    if(isset($_GET['Item'])){
        $Item = $_GET['Item'];
        $user= $_SESSION['id'];

        $sql = "SELECT * FROM items WHERE fileName='$Item'";
        $result=$conn->query($sql);
        

                if(($result->num_rows<1)||($Item=="")||($user==""))
				  {
                    header("Location:404!.php?error=NotLoggedIn");
                  }else{
                    $sql="INSERT INTO cart (fileName,userId) VALUES('$Item','$user')";
                    $conn->query($sql);
                    header("location: ../items.php?url=$Item&sucess=SongAdded");
                  }
    }else{
        header("Location:404!.php?itemsNotFound");
    }
?>