<?php
    include("../admin/connection.php")
?>
<?php
    //Insert
    if(isset($_POST['btn-feature'])){
        $discount     = $_POST['txt_dis'];
        $title        = $_POST['txt_title'];
        $title_detail = $_POST['txt_title_detail'];

        $photo        = $_FILES['txt_photo']['name'];
        $file         = rand(1,1111).'-'.$photo;
        $path         = "../feature_image/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $sql_insert     = "INSERT INTO `tb_feature`( `discount`, `title`, `title_detail`, `photo`) 
                        VALUES ('$discount','$title','$title_detail','$file')";
        $result       = $con->query($sql_insert);
       
    }
    //Update
    if(isset($_POST['btn_update'])){

        $id           = $_POST['txt_id'] ;   
        
        $discount     = $_POST['txt_dis'];
        $title        = $_POST['txt_title'];
        $title_detail = $_POST['txt_title_detail'];

        $photo        = $_FILES['txt_photo']['name'];
        $file         = rand(1,1111).'-'.$photo;
        $path         = "../feature_image/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $sql_update   = "UPDATE `tb_feature` SET `discount`='$discount',`title`='$title',
                        `title_detail`='$title_detail',`photo`='$file' WHERE id = $id";
        $result       = $con->query($sql_update);
        if($result  == TRUE){
            echo "success";
        }
        else{
            echo "error";
        }
    }
    //Delete 
    if(isset($_POST['btn_delete'])){
        $id           = $_POST['txt_id'] ;   
        $sql_delete   = "DELETE FROM `tb_feature` WHERE id = $id";
        $result       = $con->query($sql_delete);
    }

?>