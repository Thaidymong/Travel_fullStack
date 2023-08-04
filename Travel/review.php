<?php
    session_start();
    if (!($_SESSION['FullName'] && $_SESSION['Password'])) {
        header("location: login.php");
    }
?>
<?php  include('../Crud/review.php')  ?>
<?php  include('../admin/connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6821/6821002.png" type="image/gif" sizes="16x16">
    <title>dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: sans-serif;

    }

    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        background-color: #1A191F;
    }

    .box-left {
        width: 15%;
        height: 940px;
        border-right: 1px solid black;
        position: sticky;
        top: 0px;
        left: -11%;
        position: absolute;
        transition: 0.3s;
        float: left;
        box-shadow: inset 0px 0px 10px;
    }

    .box-right {
        width: 81%;
        height: 1000px;
        margin-left: 2%;
        margin-right: 2%;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-radius: 7px;
        margin-top: 30px;
        float: right;
        box-shadow: inset 0px 0px 10px;
    }

    .back-left {
        left: 0;
        position: absolute;
        transition: 0.3s;
    }

    .box-top {
        width: 100%;
        height: 90px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .box-top h1 {
        font-size: 20px;
    }

    .box-1 {
        width: 100%;
        height: 90px;
        padding: 15px;
    }

    .sub-box1 {
        width: 100%;
        height: 100%;
        display: flex;
    }

    .box-1 .sub-box1 .box1 {
        width: 20%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box-1 .sub-box1 .box1 i {
        font-size: 25px;
        width: 90%;
        height: 50px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid gray;
        border-top: 1px solid gray;
        border-left: 1px solid gray;
        border-right: 1px solid gray;
    }

    .box-1 .sub-box1 .box2 {
        width: 60%;
        height: 100%;
    }

    .box-1 .sub-box1 .box2 .top {
        width: 100%;
        height: 50%;
    }

    .box-1 .sub-box1 .box2 .top small {
        color: gray;
        top: 115px;
        padding-left: 10px;
        font-size: 11px;
        position: absolute;
    }

    .box-1 .sub-box1 .box2 .bottom {
        width: 100%;
        height: 50%;
    }

    .box-1 .sub-box1 .box2 .bottom p {
        padding-left: 10px;
        color: white;
    }

    .box-1 .sub-box1 .box3 {
        width: 20%;
        height: 100%;
        transition: 0.2s;
    }

    .box-1 .sub-box1 .box3:hover {
        transform: scale(0.9);
        transition: 0.3s;
    }

    .box-1 .sub-box1 .box3 i {
        font-size: 25px;
        width: 100%;
        height: 60px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        border-radius: 7px;
        transform: scale(0.9);
        transition: 0.1s;
    }

    .box-1 .sub-box1 .box3:hover {
        background-color: #ff00d8;
        border-radius: 7px;
        transition: 0.2s;
        cursor: pointer;
    }

    .box-center {
        width: 100%;
        height: 700px;
        padding: 10px;
    }

    .box-center .sub1 {
        width: 100%;
        height: 100%;

    }

    .box-center .sub1 .box1 {
        width: 100%;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box-center .sub1 .box1 .left {
        width: 10%;
        height: 100%;
        padding-left: 10px;
        padding-top: 10px;
    }

    .box-center .sub1 .box1 .left i {
        color: white;
        transition: 0.2s;
        transform: scale(1);
    }

    .box-center .sub1 .box1 .right {
        width: 90%;
        height: 100%;
        padding-left: 10px;
        padding-top: 10px;

    }

    .box-center .sub1 .box1 .right p {
        color: white;
        transition: 0.2s;
        transform: scale(1);
    }

    .box-center .sub1 .box1:hover p {
        color: #ff00d8;
        transition: 0.3s;
        transform: scale(0.9);
        cursor: pointer;
    }

    .box-center .sub1 .box1:hover i {
        color: #ff00d8;
        transition: 0.3s;
        transform: scale(0.9);
        cursor: pointer;
    }

    .box-slide-page {
        width: 100%;
        /* height: 120px; */
        display: none;
        margin-left: 10px;
    }

    .box-slide-user {
        width: 100%;
        height: 120px;
        display: none;
        margin-left: 10px;
    }

    .box-big1 {
        width: 50%;
        height: 100%;
        margin-right: 20px;
    }

    .box-big2 {
        width: 50%;
        height: 100%;
    }

    .box-right {
        display: flex;
        padding: 15px;
    }

    .box-right .box-top {
        width: 100%;
        height: 120px;
        display: flex;
        margin-top: 5px;
    }

    .box-right .box-top .left {
        width: 50%;
        height: 100%;
        background-color: #222028;
        margin-right: 20px;
        border-radius: 7px;
        box-shadow: 0 0 6px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-top .left:hover {
        box-shadow: 0 0 10px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-top .right {
        width: 50%;
        height: 100%;
        background-color: #222028;
        border-radius: 7px;
        box-shadow: 0 0 6px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-top .right:hover {
        box-shadow: 0 0 10px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-center2 {
        width: 100%;
        height: 800px;
        background-color: #222028;
        border-radius: 7px;
        margin-top: 20px;
        box-shadow: 0 0 6px 1px #ff00d8;
        transition: 0.2s;
        padding: 10px;

    }

    .box-right .box-center2:hover {
        box-shadow: 0 0 10px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-center3 {
        width: 100%;
        height: 350px;
        background-color: #222028;
        border-radius: 7px;
        margin-top: 20px;
        box-shadow: 0 0 6px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-center3:hover {
        box-shadow: 0 0 10px 1px #ff00d8;
        transition: 0.2s;
    }

    .box-right .box-center2 .left {
        width: 80%;
        height: 50px;
        padding-left: 10px;
        padding-top: 10px;
        position: relative;
    }

    .box-right .box-center2 .left p {
        color: white;
        font-size: 22px;
    }

    .box-right .box-center2 .right {
        width: 20%;
        height: 50px;
        position: relative;
    }

    .box-right .box-center2 .right button {
        width: 100px;
        padding: 8px 10px;
        border: none;
        border-radius: 7px;
        right: 10px;
        top: 10px;
        position: absolute;
        color: white;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        border-radius: 7px;
        background-color: #222028;
        transition: 0.8s;
        transform: scale(1);
    }

    .box-right .box-center2 .right button:hover {
        background-color: #ff00d8;
        transform: scale(0.97);
        transition: 0.8s;
        cursor: pointer;
    }

    #btn-logo {
        width: 100px;
        padding: 8px 10px;
        border: none;
        border-radius: 7px;
        right: -20px;
        top: 10px;
        position: absolute;
        color: white;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        border-radius: 7px;
        background-color: #222028;
        transition: 0.8s;
        transform: scale(1);
    }

    .box-right .box-center2 .left #btn-logo:hover {
        background-color: #ff00d8;
        transform: scale(0.97);
        transition: 0.8s;
        cursor: pointer;
    }

    .box-form {
        width: 500px;
        height: 400px;
        left: 40%;
        top: -100%;
        z-index: 99;
        position: absolute;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        background-color: #222028;
        border-radius: 7px;
        transition: 0.8s;
        padding: 40px;
    }

    .box-form-delete {
        width: 500px;
        height: 400px;
        left: 40%;
        top: -100%;
        z-index: 99;
        position: absolute;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        background-color: #222028;
        border-radius: 7px;
        transition: 0.8s;
        padding: 40px;
    }

    .back-box-form-delete {
        top: 5%;
        position: absolute;
        transition: 0.8s;
    }

    .box-form-delete .box-delete {
        width: 100%;
        height: 100%;
    }

    #icon_times_delete {
        color: white;
        font-size: 25px;
    }

    #icon_times_delete:hover {
        font-size: 25px;
        color: #ff00d8;
        cursor: pointer;
    }

    .box-form .box {
        width: 100%;
        height: 100%;
    }

    .back-form {
        top: 5%;
        position: absolute;
        transition: 0.8s;
    }

    #icon_times {
        font-size: 35px;
        right: 20px;
        top: 5px;
        position: absolute;
        transition: 0.5;
        color: black;
    }

    #icon_times:hover {
        cursor: pointer;
        color: #ff00d8;
        transition: 0.5;
    }

    .box-form .box input {
        border: none;
        outline: none;
        border-bottom: 2px solid #ff00d8;
        border-top: 2px solid #ff00d8;
        border-left: 2px solid #ff00d8;
        border-right: 2px solid #ff00d8;
        background-color: #222028;
        color: white;
        padding-left: 20px;
    }

    .box-form .box #btn-save,
    #btn-save-delete {
        width: 100px;
        padding: 8px 10px;
        border: none;
        border-radius: 7px;
        color: white;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        border-radius: 7px;
        background-color: #222028;
        transition: 0.8s;
        transform: scale(1);
    }

    .box-form .box #btn-cancel,
    #btn-cancel-delete {
        width: 100px;
        padding: 8px 10px;
        border: none;
        border-radius: 7px;
        color: white;
        border-bottom: 1px solid #ff00d8;
        border-top: 1px solid #ff00d8;
        border-left: 1px solid #ff00d8;
        border-right: 1px solid #ff00d8;
        border-radius: 7px;
        background-color: #222028;
        transition: 0.8s;
        transform: scale(1);
    }

    .box-form .box #btn-cancel:hover {
        background-color: #ff00d8;
        transform: scale(0.97);
        transition: 0.8s;
        cursor: pointer;
    }

    .box-form-delete .box #btn-save:hover {
        background-color: #ff00d8;
        transform: scale(0.97);
        transition: 0.8s;
        cursor: pointer;
    }

    .box-form .box #btn-cancel,
    #btn-cancel-delete:hover {
        background-color: #ff00d8;
        transform: scale(0.97);
        transition: 0.8s;
        cursor: pointer;
    }

    .box-form .box #btn-cancel,
    #btn-save-delete:hover {
        background-color: #ff00d8;
        transform: scale(0.97);
        transition: 0.8s;
        cursor: pointer;
    }

    td {
        color: white;
    }

    #icon_delete {
        transform: scale(1);
        transition: 0.8s;
    }

    #icon_delete:hover {
        transform: scale(1.1);
        transition: 0.8s;
        color: #ff00d8;
        cursor: pointer;
    }

    .a1:hover {
        color: #ff00d8;
    }

    .box-light {
        width: 90px;
        height: 40px;
        box-shadow: 0px 0px 5px 4px #ff00d8;
        border-radius: 50px;
        position: absolute;
        right: 30px;
        top: 30px;
        padding: 1px;
    }

    .box-light .sub1 {
        width: 100%;
        height: 100%;
        background-color: #ff00d8;
        border-radius: 50px;
        display: flex;
    }

    .box-light .sub1 .left {
        width: 50%;
        height: 100%;
        border-radius: 50%;
        background-color: black;
        transition: 0.4s;
    }

    .box-light .sub1 .right {
        width: 50%;
        height: 100%;
        border-radius: 50%;
        background-color: red;
        transition: 0.4s;

    }

    .back_left {
        position: absolute;
        right: 0px;
        transition: 0.4s;

    }

    .light_left:hover {
        cursor: pointer;
    }

    .bg {
        background-color: white;
    }

    .color1 {
        background-color: black;
    }

    .b1 {
        color: black;
    }
    .title {
        width: 50px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>

<body class="body1">
    <div class="box">
        <div class="box-left">
            <div class="box-top">
                <h1>Dashboard</h1>
            </div>
            <hr style="color:#1A191F">
            <div class="box-1">
                <div class="sub-box1">
                    <div class="box1"><i class="fa-regular fa-user"></i></div>
                    <div class="box2">
                        <div class="top">
                            <small>Admin</small>
                        </div>
                        <div class="bottom">
                            <p>Thai Dymong</p>
                        </div>
                    </div>
                    <div class="box3">
                        <i class="fa-solid fa-arrow-right-from-bracket icon1"></i>
                    </div>
                </div>
            </div>
            <hr style="color:#1A191F">
            <div class="box-center">
                <div class="sub1">

                    <div class="box1">
                        <div class="left"><i class="fa-solid fa-gauge"></i></div>
                        <div class="right">
                            <p><a class="a1" style="color: white;" href="dashboard.php">Dashboard</a></p>
                        </div>
                    </div>
                    <div class="box1" id="slide_down1">
                        <div class="left"><i class="fa-solid fa-file"></i></div>
                        <div class="right">
                            <p>Pages<i class="fa-solid fa-sort-down" style="padding-left: 5px;font-size:13px;margin-top:-5px;"></i></p>
                        </div>
                    </div>
                    <div class="box-slide-page">
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-file-arrow-up"></i></div>
                            <div class="right">
                                <p><a class="a1" style="color: white;" href="../Travel/feature.php">Feature</a></p>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-file-arrow-up"></i></div>
                            <div class="right"><a class="a1" style="color: white;" href="../Travel/about.php">About Us</a></div>
                        </div>
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-file-arrow-up"></i></div>
                            <div class="right"><a class="a1" style="color: white;" href="../Travel/review.php">Review</a></div>
                        </div>
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-file-arrow-up"></i></div>
                            <div class="right"><a class="a1" style="color: white;" href="../Travel/gallery.php">Gallery</a></div>
                        </div>
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-file-arrow-up"></i></div>
                            <div class="right"><a class="a1" style="color: white;" href="../Travel/signUp.php">Sign Up</a></div>
                        </div>

                    </div>
                    <div class="box1" id="slide_down2">
                        <div class="left"><i class="fa-solid fa-user"></i></div>
                        <div class="right">
                            <p>Users<i class="fa-solid fa-sort-down" style="padding-left: 5px;font-size:13px;margin-top:-5px;"></i></p>
                        </div>
                    </div>
                    <div class="box-slide-user">
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-user-plus"></i></div>
                            <div class="right">
                                <p>user1</p>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-user-plus"></i></div>
                            <div class="right">
                                <p>user2</p>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="left"><i class="fa-solid fa-user-plus"></i></div>
                            <div class="right">
                                <p>user3</p>
                            </div>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="left"><i class="fa-solid fa-comment-slash"></i></div>
                        <div class="right">
                            <p>Comments</p>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="left"><i class="fa-solid fa-star"></i></div>
                        <div class="right">
                            <p>Reviews</p>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="left"><i class="fa-solid fa-right-from-bracket"></i></div>
                        <div class="right"><a href="logout.php">
                                <p id="logout_sweet">Logout</p>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-content-right">
            <div class="box-light">
                <div class="sub1">
                    <div class="left light_left"></div>
                </div>
            </div>

            <!-- bootstrap form -->
            <!-- Button trigger modal -->
            <button style="margin-left: 350px; margin-top: 100px;" type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalLong">
            Insert Review
            </button>

            <!-- Modal Insert-->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="text" name="txt_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">title</label>
                            <input type="text" name="txt_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">photo review</label>
                            <input type="file" name="txt_photo" class="form-control">
                        </div>
                        <input type="submit" value="Insert" name="btn-revieww" class="btn btn-outline-info">
                    </form>
                </div>
                </div>
            </div>
            </div>

            <!-- table -->
            <div class="w-50 text-white mt-4" style="margin-left: 400px;">
            <table id="myTable" class="table w-100 text-white" >
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Content</td>
                        <td>Title</td>
                        <td>Photo</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_review = "SELECT * FROM `tb_review`";
                        $result     = $con->query($sql_review);
                        if($result->num_rows>0){
                            $index = 1;
                            while($row = $result->fetch_assoc()){

                    ?>

                    <tr>
                        <td><?= $index;?></td>
                        <td><?=$row['name']?></td>
                        <td><p class="title"><?=$row['title']?></p></td>
                        <td><img style="width: 50px;" src="../review_image/<?=$row['photo']?>" ></td>
                        <td>
                        <button  type="submit" class="btn btn-secondary " data-toggle="modal" data-target="#updateModel<?=$row['id']?>">Edit</button>
                        <button  type="submit" class="btn btn-warning " data-toggle="modal" data-target="#deleteModel<?=$row['id']?>">Delete</button>
                        </td>
                    </tr>


                    <!-- Modal Update-->
                    <div class="modal fade" id="updateModel<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group text-dark">
                                    <input type="hidden" name="txt_id" value="<?=$row['id']?>">
                                    <label for="">name</label>
                                    <input type="text" name="txt_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">title</label>
                                    <input type="text" name="txt_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">photo review</label>
                                    <input type="file" name="txt_photo" class="form-control">
                                </div>
                                <input type="submit" value="Canael"  class="btn btn-outline-danger">
                                <input type="submit" value="Update" name="btn-update" class="btn btn-outline-success">
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>


                    <!-- Modal Delete-->
                    <div class="modal fade" id="deleteModel<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLongTitle">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <p class="text-dark">Do u want to delete it?</p>
                                <div class="form-group text-dark">
                                    <input type="hidden" name="txt_id" value="<?=$row['id']?>">
                                    <input type="submit" value="Canael"  class="btn btn-outline-primary">
                                    <input type="submit" value="Delete" name="btn-delete" class="btn btn-outline-danger">
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php $index++;  }} ?>
                </tbody>
            </table>
            </div>

        </div>
    </div>

</body>

</html>

<script>
    //link table data
     $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    // light body
    var x = document.querySelector(".light_left");
    var body1 = document.querySelector(".body1");

    x.addEventListener('click', () => {
        x.classList.toggle("back_left");

        body1.classList.toggle("bg");
    })
    $(document).ready(function() {

        $(".icon1").click(function() {
            $(".box-left").toggleClass("back-left");
        })

        $("#slide_down1").click(function() {
            $(".box-slide-page").slideToggle();
        })
        $("#slide_down2").click(function() {
            $(".box-slide-user").slideToggle();
        })

        $("#btn-logo").click(function() {
            $(".box-form").addClass("back-form");
        })
        $("#icon_times").click(function() {
            $(".box-form").removeClass("back-form");
        })

        $(".icon_delete1").click(function() {
            $(".box-form-delete").addClass("back-box-form-delete");
        })

        $(".icon_delete").click(function() {
            // $(".box-form-delete").removeClass("back-box-form-delete");
            $(".box-form-delete").removeClass("back-box-form-delete");
        })
    })
</script>