<header id="header">
	<div class="left">
		<h1><a href="index.php" class="plain-link">PHS Technology</a></h1>
	</div>

        <?php
                session_start();
                if(isset($_SESSION['user'])):
        ?>

                <div class="right">
                        <a href="logout.php" class="link-button">Logout</a>
                </div>

                <div class="right">
                        <a href="upload.php" class="link-button">Upload</a>
                </div>

	<?php else: ?>
		<div class="right">
			<a href="login.php" class="link-button">Login</a>
		</div>
	<?php endif; ?>

        <div class="right">
                <div class="dropdown-button">
                        <p>Teams</p>
                        <div class="dropdown-contents">
                                <a href="/team/cd.php" class="link-button">Cyber Defense</a>
                                <a href="/team/robotics.php" class="link-button">Robotics</a>
                                <a href="/team/vrep.php" class="link-button">VREP</a>
                        </div>
                </div>
        </div>

        <div class="right">
                <a href="videolist.php" class="link-button">Videos</a>
        </div>

</header>
<header class="spacer" id="header-spacer">
	<!--
		Mimic the shape of the visible header, to compensate
		for the fixed header not being a part of the document flow.
		It's admittedly hacky, but functional.
	-->
	<script>
		document.getElementById("header-spacer").innerHTML = document.getElementById("header").innerHTML;
	</script>
	<noscript>
		<h1>PHS Tech Teams</h1>
	</noscript>
</header>
