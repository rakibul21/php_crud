<?php
include "connect.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud operation</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Serial Number</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Operation</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $sql = "Select * from crud";
        $result = mysqli_query($con,$sql);
        if ($result)
        {
//            $row = mysqli_fetch_assoc($result);
//            echo $row['name'];
//            $row = mysqli_fetch_assoc($result);
//            echo $row['name'];
            while ($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $password = $row['password'];
                echo '<tr>
                       <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class="btn btn-info"><a href="update.php? updateid='.$id.'" class="text-light" >Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
            }
        }

        ?>



        </tbody>
    </table>
</div>

<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/jquery-3.6.1.js"></script>
</body>
</html>
