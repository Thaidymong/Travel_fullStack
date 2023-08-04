<?php
    include("../admin/connection.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *::after,
        *::before {
            box-sizing: border-box;
        }

        * {
            padding: 0;
            margin: 0;
        }
        body{
            background: linear-gradient(45deg, green, yellow);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-form{
            width: 300px;
            height: 350px;
            box-shadow: inset 0px 0px 15px blueviolet;
            border-radius: 10px;
        }
        .box-login{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="box-form bg-info p-4">
        <div class="box-login">
            <h4 class="text-center text-white pb-2">Admin Dashboard</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label for="" class="text-white">username</label>
                    <input type="text"name="txt_name" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="" class="text-white">password</label>
                    <input type="password" name="txt_password" class="form-control" placeholder="password">
                </div>
                <input type="submit" name="btn-login" value="Login" class="btn btn-warning">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    session_start();
    if(isset($_POST['btn-login'])){
        $user     = $_POST['txt_name'];
        $password = $_POST['txt_password'];

        $sql = "SELECT * FROM `tb_register` WHERE name = '$user' AND password = '$password' ";
        $res = $con->query($sql);

        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $_SESSION['FullName']= $row['name'];
                $_SESSION['Password']= $row['password'];
                header("location: dashboard.php");
            }
        }

    }

?>