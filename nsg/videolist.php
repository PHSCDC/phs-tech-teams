<HTML>
<HEAD>
<TITLE>PHS Student Tech Teams</TITLE>
</HEAD>
<BODY TEXT="BLACK" LINK="#669" VLINK="#669" ALINK="#99B" BGCOLOR="WHITE">
<?php include("header.php"); ?>
<H1 ALIGN="CENTER">Videos</H1>
<DIV ALIGN="CENTER">
	<?php
		$files = glob('../video/*.mp4');
		foreach ($files as $file){
			$file = pathinfo($file, PATHINFO_FILENAME);
			echo "<P><A HREF=\"../video/" . rawurlencode($file) . ".mp4\">" . htmlspecialchars($file) . "</A></P>";
		}
	?>
</DIV>
<?php include("footer.php"); ?>
</BODY>
</HTML>
