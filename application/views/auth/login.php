<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="content" class="gridlove-site-content container">

	<div class="row">
        
        <div class="gridlove-content gridlove-not-found">

	    		<div class="box-inner-p-bigger box-single gridlove-box">

		    		<div id="bbp_login_widget-3" class="widget gridlove-box bbp_widget_login">
			<?php echo form_open('auth_controller/login_post'); ?>
				<fieldset class="bbp-form">
					<legend>Log In</legend>

					<div class="bbp-username">
						<label for="user_login">Username: </label>
						<input type="text" name="username" value="" size="20" maxlength="100" id="user_login" autocomplete="off">
					</div>

					<div class="bbp-password">
						<label for="user_pass">Password: </label>
						<input type="password" name="password" value="" size="20" id="user_pass" autocomplete="off">
					</div>
	
					<div class="bbp-submit-wrapper">

						<button type="submit" name="user-submit" id="user-submit" class="button submit user-submit">Log In</button>

	
					</div>

					
						<!--<div class="bbp-login-links">

							
								<a href="<?php echo lang_base_url(); ?>register" title="Register" class="bbp-register-link">Register</a>

							
							
								<a href="<?php echo lang_base_url(); ?>forgot-password" title="Lost Password" class="bbp-lostpass-link">Lost Password</a>

							
						</div>---->

					
				</fieldset>
			<?php echo form_close(); ?><!-- form end -->

		</div>
        </div>
    	
    </div>

</div>

</div>




