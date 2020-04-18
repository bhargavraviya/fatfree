<?php if (isset($message)): ?>
	
	<div class="row alert alert-<?= ($alert_type) ?>" role="alert">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<span class="sr-only">Error:</span>
	<?= ($this->raw($message))."
" ?>
	</div>
	
<?php endif; ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title"><?= ($i18n_update_user) ?></h4>
						<p class="card-category"> Here is a subtitle for this table</p>
					</div>
					<div class="card-body">
						<form action="" method="post" class="form-horizontal">
							<div class="form-group row">
								<div class="col-12">  
									<label class="col-form-label" for="password"><?= ($i18n_password) ?></label>
									<div class="form-field"><input type="password" class="form-control col-form-label" id="password" name="password" required />
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-12">  
									<label class="col-form-label" for="confirm"><?= ($i18n_password_conf) ?></label>
									<div class="form-field"><input type="password" class="form-control col-form-label" id="confirm" name="confirm" required />
									</div>	  
								</div>
							</div>

							<input type="hidden" name="session_csrf" value="<?= ($CSRF) ?>" />
							<input type="hidden" name="edit" value="edit" />
							<input type="hidden" name="user_id" value="<?= ($POST['id']) ?>" />

							<div class="form-group row ">
								<div class="col-lg-12 mx-auto">
									<div class="col-lg-xs text-center"><input class="btn btn-primary" value="<?= ($i18n_submit) ?>" name="create" id="create" type="submit"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>