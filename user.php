<?php

session_start();
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $category=$_POST['category'];
    $sql="insert into `crud` (name,email,password,category) vaules('$name','$email','$password','$category') ";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "data insert succesfully";
       // header('location:display.php');
    }
    else{
        die (mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud operation</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="password" autocomplete="off">
            </div>

            <div class="form-group">
                <label>category</label>
                <input type="text" class="form-control" placeholder="enter your category" name="category" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </form>
    </div>
</body>
</html>