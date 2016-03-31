<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHS Student Tech Teams</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("header.php"); ?>
<h1 class="center">Login</h1>
<div class="center">
    <form action="doLogin.php" method="post">
            Username:<input type="text" name='user'><br/>
            Password:<input type="password" name='passwd'><br/>
            <input type="submit" value="Log in">
    </form>
</div>
<?php include("footer.php"); ?>
</body>
</html>
