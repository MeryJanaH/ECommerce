<!DOCTYPE html>
<html lang="en">
@include('website.backend.layouts.users.head_user')
	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">
								<form name="frm-login">
									<fieldset class="wrap-title">
										<h3 class="form-title">s'identifier à votre compte</h3>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Address Email:</label>
										<input type="text" id="frm-login-uname" name="email" placeholder="Taper votre adress email">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Mot de pass:</label>
										<input type="password" id="frm-login-pass" name="pass" placeholder="************">
									</fieldset>

									<fieldset class="wrap-input">
										<a class="link-function left-position" href="#" title="Forgotten password?">Mot de pass oublié ?</a>
									</fieldset>
									<input type="submit" class="btn btn-submit" value="S'identifier" name="submit">
								</form>
							</div>
						</div>
					</div><!--end main products area-->
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

    @include('website.backend.layouts.users.foot_user')
	<!--footer area-->
</body>
</html>
