<?php if (isset($message)): ?>

	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<?= ($this->raw($message))."
" ?>
			</div>
		</div>
	</div>

<?php endif; ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">
							User: <?= ($POST['username']) ?> (<em>
								<?php if ($POST['user_type'] ==1): ?>
									Standard user
									<?php else: ?>
										<?php if ($POST['user_type'] ==10): ?>
											Superuser
											<?php else: ?>Administrator
										<?php endif; ?>
									
								<?php endif; ?>
							</em>)
						</h4>
						<p class="card-category"> Here is a subtitle for this table</p>
					</div>
					<div class="card-body">
						<form action="" method="post" class="form-horizontal">
							<div class="row py-5">
								<div class="col-6">
									<h4>Email: <?= ($POST['email']) ?></h4>
									<h4>Activated: <select name="activated">
										<option value=1<?php if (intval($POST['activated'])===1): ?> selected<?php endif; ?>>Yes</option>
										<option value=0<?php if (intval($POST['activated'])===0): ?> selected<?php endif; ?>>No</option>
									</select></h4>
								</div>

								<div class="col-6">
									<h2>Change Password</h2>
									<p>Leave blank to keep the user's current password. Fill out only if you want to change the user's password:</p>
									<div class="form-group">
										<label class="control-label" for="password"><?= ($i18n_password) ?></label>
										<input type="password" class="form-control" name="password" id="password" />
									</div>
									<div class="form-group">
										<label class="control-label" for="confirm"><?= ($i18n_password_conf) ?></label>
										<input type="password" class="form-control" name="confirm" id="confirm" />
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="col-lg-xs text-center py-5">
										<input type="hidden" name="session_csrf" value="<?= ($CSRF) ?>" />
										<input type="hidden" name="edit" value="edit" />
										<input type="hidden" name="user_id" value="<?= ($POST['id']) ?>" />
										<input type="hidden" name="pw" value="<?= ($POST['password']) ?>" />
										<button type="submit" class="btn btn-primary"> <?= ($i18n_submit) ?></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container py-5">
		 
<h1>

</h1>
	
</div>