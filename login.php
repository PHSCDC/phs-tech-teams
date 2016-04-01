<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("header.php"); ?>
<div class="center">
    <form action="doLogin.php" method="post">
            <p><b>U S E R N A M E</b></p>
            <input type="text" name='user'><br>
            <br>
            <p><b>P A S S W O R D</b></p>
            <input type="password" name='passwd'><br><br>
            <input type="submit" value="Log in">
    </form>
</div>
<?php include("footer.php"); ?>
</body>
</html>
