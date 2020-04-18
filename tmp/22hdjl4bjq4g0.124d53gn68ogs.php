<div class="container py-5">
	<div class="row">
		<div class="col-12">
			<h1>Fat Free Login</h1>
			<?php if ($SESSION['logged_in']): ?>
				
					<p>Welcome <?= ($SESSION['username']) ?>!</p>
					<p>You managed to log in succesfully. Have a look at the options in the menu item with your username. </p>
					<p>
				  <a class="btn btn-lg btn-primary" href="<?= ($BASE) ?>/user/update">Go to your settings</a>
				  <a class="btn btn-lg btn-warning" href="<?= ($BASE) ?>/logout">Logout</a></p>
				
				<?php else: ?>
					<p>Congratulations on installing the Fat Free Login script. You are not logged in right now. </p>
					<p><a href="<?= ($BASE) ?>/login">You can login here</a>.</p>
				
			<?php endif; ?>
		</div>
	</div>
</div>
