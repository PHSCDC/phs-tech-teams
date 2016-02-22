<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHS Student Tech Teams</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("header.php"); ?>
<p class="center"><?php echo htmlspecialchars(rawurldecode($_GET['v'])); ?></p>
<video controls>
	<source src="<?php echo "video/" . htmlspecialchars(rawurldecode($_GET['v'])) . ".mp4"; ?>" type="video/mp4">
	<source src="<?php echo "video/" . htmlspecialchars(rawurldecode($_GET['v'])) . ".webm"; ?>" type="video/webm">
</video>
<?php include("footer.php"); ?>
</body>
</html>
