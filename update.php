<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql = "SELECT * FROM `users` where id=$id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];  
    $email = $row['email'];  
    $mobile = $row['mobile'];  
    $password = $row['password']; 
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "UPDATE `users` SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
        $result = mysqli_query($connect,$sql);
        if($result){
            echo "data inserted successfully";
            // header("location:display.php");
        }
        else{
            echo "data inserted unsuccessfully";
        }
         
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD basic</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <form method="post">
            <div class="form-group mb-3">    
                <label>Name</label>
                <input type="text" autocomplete="off" name="name" class="form-control" placeholder="Enter your name"value="<?php echo $name; ?>">
               
            </div>
            <!--  -->
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Enter your Email" value="<?php echo $email; ?>">
               
            </div>
            <!--  -->
            <div class="form-group mb-3">
                <label>Mobile number</label>
                <input type="text" autocomplete="off" name="mobile" class="form-control" placeholder="Enter your mobile number" value="<?php echo $mobile; ?>">
                
            </div>
            <!--  -->
            <div class="form-group mb-3">
                <label>Password</label>
                <input type="text" autocomplete="off" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $password; ?>">
                
            </div>
            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


  </body>
</html>