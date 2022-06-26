<?php
    include 'connect.php';
    if (isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
     
        $sql = "DELETE FROM `users` where id=$id";
        $result = mysqli_query($connect,$sql); 
        if ($result){
            // echo "Success";
            header("Location:display.php");
        }
        else {
            die(mysqli->error($connect));
            
        }
    }
?>