<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHS Student Tech Teams</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("header.php"); ?>

<?php
    session_start();
    if(isset($_SESSION['user'])){
?>

<h1 class="center">Upload</h1>
<div class="center">
    <form action="doUpload.php" method="post" enctype="multipart/form-data">
            <input type='file' name='uploadFile'>
            <input type="submit" value="Upload">
    </form>
</div>
<?php
    }else{
        header('Location: /login.php');
    
    }
?>

<?php include("footer.php"); ?>
</body>
</html>
