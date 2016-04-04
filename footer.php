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

	<p class="center"><span style="display:inline-block; transform:rotate(180deg) translateY(-2.5px); -webkit-transform:rotate(180deg) translateY(-2.5px); -ms-transform: rotate(180deg) translateY(-2.5px); -moz-transform: rotate(180deg) translateY(-2.5px);">
		&copy;</span> <?php echo date("Y"); ?>
	</p>
</footer>
