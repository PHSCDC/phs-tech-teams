<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHS Student Tech Teams</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("header.php"); ?>
<h1 class="center">Videos</h1>
<div class="center">
	<?php
		$files = glob('video/*.mp4');
		foreach ($files as $file){
			$file = pathinfo($file, PATHINFO_FILENAME);
			echo "<p><a class=\"inline-button\" href=\"video.php?v=" . rawurlencode($file) . "\">" . htmlspecialchars($file) . "</a></p>";
		}
	?>
</div>
<?php include("footer.php"); ?>
</body>
</html>
