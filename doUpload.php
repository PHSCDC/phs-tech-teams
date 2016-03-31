<?php
    session_start();
    if(isset($_SESSION['user']) ){
        include 'config.php';
        $errors = array();
        $file_name = $_FILES['uploadFile']['name'];
        $file_size =$_FILES['uploadFile']['size'];
        $file_tmp =$_FILES['uploadFile']['tmp_name'];
        $file_type=$_FILES['uploadFile']['type'];

        #if($file_size > $maxUploadSize) $errors[] ="File is too large";
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp, 'video/' . $file_name);
        }
    }
    header("Location: /videolist.php")
?>
