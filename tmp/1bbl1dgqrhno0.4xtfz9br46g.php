<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title"><?= ($i18n_reset_pw_submit) ?></h4>
						<p class="card-category"> Here is a subtitle for this table</p>
					</div>
					<div class="card-body">
						<form action="" method="post" class="">
							<p><?= ($i18n_reset_pw) ?></p>
							<div class="form-group"><label class="control-label" for="email"><?= ($i18n_email) ?> </label>
								<div class="form-field"><input class="form-control input-lg" type="text" name="email" id="email" required autofocus /></div>
							</div>
							<input type="hidden" name="session_csrf" value="<?= ($CSRF) ?>" />
							<div class="col-lg-xs text-center"><input class="btn btn-primary" name="reset_pw" value="<?= ($i18n_reset_pw_submit) ?>" type="submit"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>