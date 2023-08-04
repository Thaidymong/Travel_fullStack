<?php
    include('../admin/connection.php');
?>
<?php
    
    if(isset($_POST['btn-signup'])){
        $sign_title    = $_POST['txt_title'];
        $sign_detail   = $_POST['txt_title_detail'];

        $sign_sql      = "INSERT INTO `tb_signup`( `title`, `detail`) VALUES ('$sign_title','$sign_detail')";

        $sign_res      = $con->query($sign_sql);
    }

    if(isset($_POST['btn_update_signup'])){
        $id            = $_POST['txt_id'];
        $sign_title    = $_POST['txt_title'];
        $sign_detail   = $_POST['txt_title_detail'];

        $sign_update   = "UPDATE `tb_signup` SET `title`='$sign_title',`detail`='$sign_detail' WHERE id= $id";
        $res_update    = $con->query($sign_update);
    }
    if(isset($_POST['btn_signup_delete'])){
        $id            = $_POST['txt_id'];
        $sign_delete   = "DELETE FROM `tb_signup` WHERE id = $id";
        $res_delete    = $con->query($sign_delete);
    }



?>