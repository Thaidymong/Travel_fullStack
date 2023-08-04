<?php
    include('../admin/connection.php')
?>
<?php
    if(isset($_POST['btn-about'])){

        $content   = $_POST['txt_content'];
        $title     = $_POST['txt_detail'];
        $photo     = $_FILES['txt_photo']['name'];

        $file      = rand(1,111).'-'.$photo;
        $path      = "../about_image/".$file;        
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);


        $sql_about = "INSERT INTO `tb_about`( `content`, `title`, `photo`) 
                    VALUES ('$content','$title','$file')";
        $result    = $con->query($sql_about);
    }
    
    if(isset($_POST['btn-about-update'])){

        $id        = $_POST['txt_id'];
        $content   = $_POST['txt_content'];
        $title     = $_POST['txt_detail'];
        $photo     = $_FILES['txt_photo']['name'];

        $file      = rand(1,111).'-'.$photo;
        $path      = "../about_image/".$file;        
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $sql_update= "UPDATE `tb_about` SET `content`='$content',`title`='$title',`photo`='$file' WHERE id = $id";
        $result    = $con->query($sql_update);

        if($result == TRUE){
            echo "success";
        }
        else{
            echo "error";
        }
    }
    if(isset($_POST['btn-about-delete'])){
        $id        = $_POST['txt_id'];
        $sql_delete= "DELETE FROM `tb_about` WHERE id = $id";
        $result    = $con->query($sql_delete);
        if($result == TRUE){
            echo "success";
        }
        else{
            echo "error";
        }
    }

?>