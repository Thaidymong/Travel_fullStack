<?php 
    include('../admin/connection.php')
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    *::after,
    *::before{
        box-sizing: border-box;
    }
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background: linear-gradient(gray, green);
        height: 100vh;
    }
</style>
<body>
    <div class="container bg-info p-4 mt-3 d-flex justify-content-between text-white">
        <h1>Register Form</h1>
        <button class="btn btn-primary">Login account</button>
    </div>
    <div class="container bg-dark mt-2 p-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="" class="text-white">Username</label>
                <input type="text" name="txt_name" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Password</label>
                <input type="password" name="txt_password" class="form-control" placeholder="password">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Gender</label>
                <input type="text" name="txt_gender" class="form-control" placeholder="male">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Email</label>
                <input type="email" name="txt_email" class="form-control" placeholder="thaidymong@gmail.com">
            </div>

            <input type="submit" value="Register" name="txt_register" class="btn btn-primary">
        </form>
    </div>
</body>
<?php

    if(isset($_POST['txt_register'])){
        $name       = $_POST['txt_name'];
        $password   = $_POST['txt_password'];
        $gender     = $_POST['txt_gender'];
        $email      = $_POST['txt_email'];
    }

    $data     = "INSERT INTO `tb_register`( `name`, `password`, `gender`, `email`)
                 VALUES ('$name','$password','$gender','$email')";
    $result   = $con->query($data);
    
?>
</html>