<?php include('../admin/connection.php')  ?>
<?php

    if(isset($_POST['btn-revieww'])){
        $name      = $_POST['txt_name'];
        $title     = $_POST['txt_title'];
        $photo     = $_FILES['txt_photo']['name'];
        $file      = rand(1,111).'-'.$photo;
        $path      = "../review_image/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);
        $review    = "INSERT INTO `tb_review`( `name`, `title`, `photo`)
                     VALUES ('$name','$title','$file')";
        $result    = $con->query($review);
    }

    if(isset($_POST['btn-update'])){
        $id        = $_POST['txt_id'];
        $name      = $_POST['txt_name'];
        $title     = $_POST['txt_title'];
        $photo     = $_FILES['txt_photo']['name'];
        $file      = rand(1,111).'-'.$photo;
        $path      = "../review_image/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);
        $update    = "UPDATE `tb_review` SET `name`='$name',`title`='$title',`photo`='$file' WHERE id = $id";
        $res_up    = $con->query($update);
    }
    if(isset($_POST['btn-delete'])){
        $id        = $_POST['txt_id'];
        $delete    = "DELETE FROM `tb_review` WHERE id = $id";
        $res_de    = $con->query($delete);

    }




   

?>