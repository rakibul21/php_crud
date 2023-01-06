<?php

include 'connect.php';
$id= $_GET['updateid'];
$sql ="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile =  $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update crud set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id ";


    $result = mysqli_query($con,$sql);
    if ($result){
//        echo "Updated successfully";
       header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" name="name" value="<?php echo $name ?>" autocomplete="off" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email"  name="email" value="<?php echo $email ?>" autocomplete="off" class="form-control" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label  class="form-label">Mobile</label>
            <input type="text" name="mobile" value="<?php echo $mobile ?>" autocomplete="off" class="form-control" placeholder="Enter your mobile number">
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" value="<?php echo $password ?>" class="form-control" autocomplete="off" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jquery-3.6.1.js"></script>

</div>
</body>
</html>

