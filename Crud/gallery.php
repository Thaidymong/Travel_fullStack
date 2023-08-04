<?php
include('../admin/connection.php')
?>
<?php
    if(isset($_POST['btn-gallery'])){
        $photo   = $_FILES['txt_photo']['name'];
        $file    = rand(1,222).'-'.$photo;
        $path    = "../gallery_iamge/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);
        $gallery = "INSERT INTO `tb_gallery`(`photo`) VALUES ('$file')";
        $res_ga  = $con->query($gallery);
    }
    if(isset($_POST['btn-delete'])){
        $id          = $_POST['txt_id'];
        $delete_sql  = "DELETE FROM `tb_gallery` WHERE id = $id";
        $res_ga      = $con->query($delete_sql);

    }

?>