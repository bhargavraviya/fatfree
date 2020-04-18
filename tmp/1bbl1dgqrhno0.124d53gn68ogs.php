<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-warning card-header-icon">
						<div class="card-icon">
							<i class="material-icons">content_copy</i>
						</div>
						<p class="card-category">Used Space</p>
						<h3 class="card-title">49/50
							<small>GB</small>
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons text-danger">warning</i>
							<a href="javascript:;">Get More Space...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
						<div class="card-icon">
							<i class="material-icons">store</i>
						</div>
						<p class="card-category">Revenue</p>
						<h3 class="card-title">$34,245</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i> Last 24 Hours
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-danger card-header-icon">
						<div class="card-icon">
							<i class="material-icons">info_outline</i>
						</div>
						<p class="card-category">Fixed Issues</p>
						<h3 class="card-title">75</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">local_offer</i> Tracked from Github
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-info card-header-icon">
						<div class="card-icon">
							<i class="fa fa-twitter"></i>
						</div>
						<p class="card-category">Followers</p>
						<h3 class="card-title">+245</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">update</i> Just Updated
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Home Page</h4>
						<p class="card-category"> Here is a subtitle for this table</p>
					</div>
					<div class="card-body">
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
		</div>
	</div>
</div>