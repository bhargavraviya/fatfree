<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h1 class="prod-header"><?= ($i18n_register) ?></h1>
					<p><?= ($i18n_send_registration_mail_again) ?></p>
					<form action="<?= ($BASE) ?>" method="post" class="">
						<div class="form-group"><label class="control-label" for="email"><?= ($i18n_email) ?> </label>
							<div class="form-field">
								<input type="text" class="form-control input-lg" placeholder="Email" name="email" id="email" required autofocus />
							</div>
						</div>
						<input type="hidden" name="session_csrf" value="<?= ($CSRF) ?>" />
						<input type="hidden" name="sendmail" value="sendmail" />
						<div class="login-btn">
							<input class="btn lgn-btn login" name="reset_pw" value="<?= ($i18n_resend_activation_mail) ?>" type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>