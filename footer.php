<footer>
        <?php
                if(isset($_SESSION['user'])):
        ?>
                <div class="center">
                        <h4 class="plain-link">You are logged in as  <?php echo($_SESSION['user']);?>.</h4>
                </div>		
        <?php endif; ?>
	<p><a class="link-button center" href="#">Back to top</a></p>
	<p><a class="link-button center" href="contact.php">Contact</a></p>
	<iframe style="text-align: center" src="https://ghbtns.com/github-btn.html?user=PHSCDC&repo=phs-tech-teams&type=fork&count=true&size=large" frameborder="0" scrolling="0" width="158px" height="30px"></iframe>	
	<p class="center"><span style="display:inline-block; transform:rotate(180deg) translateY(-2.5px); -webkit-transform:rotate(180deg) translateY(-2.5px); -ms-transform: rotate(180deg) translateY(-2.5px); -moz-transform: rotate(180deg) translateY(-2.5px);">
		&copy;</span> <?php echo date("Y"); ?>
	</p>
</footer>
