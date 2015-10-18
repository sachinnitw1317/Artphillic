<div class="row">
	<div class="col-xs-13 col-sm-13 col-md-13 col-lg-13">
		<img src='<?php echo base_url("/images/login.png"); ?>' class="img-responsive" alt="Image">
	</div>
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		<form name="login_form" action="<?=base_url('/login/validation');?>" method="POST" role="form" class="form-horizontal">
				<div class="form-group">
					<legend>Login</legend>
				</div>	
				<p class="text-warning"><?php echo validation_errors(); ?></p>	
				 <div class="form-group">
			        <label for="username" class="control-label col-xs-8" style="float:left">Username</label>
			        <div class="col-xs-15">
			            <input type="text" class="form-control" id="inputPassword" name="username" required="required" placeholder="username">
			        </div>
			    </div>


				 <div class="form-group">
			        <label for="inputPassword" class="control-label col-xs-8">Password</label>
			        <div class="col-xs-15">
			            <input type="password" class="form-control" id="inputPassword" name="password" required="required" placeholder="Password">
			        </div>
			    </div>


			    <div class="form-group">
			        <div class=" col-xs-15">
			            <div class="checkbox">
			                <label><input type="checkbox"> Remember me</label>
			            </div>
			        </div>
			    </div>

				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
					<a href='<?php echo base_url("/login/login_facebook"); ?>'>
						<button type="submit" class="btn btn-primary">
							<img src='<?php echo base_url("/images/facebook.png"); ?>' class="social">Facebook
						</button>
					</a>
					</div>
					<div class="col-sm-12">
						<a href='<?php echo base_url("/login/login_google"); ?>'>
							<button type="submit" class="btn btn-danger"><img src='<?php echo base_url("/images/google.png"); ?>' class="social">
							Google+</button>
						</a>
					</div>
				</div>
				

				<p class="text-danger"><a href="">Forgot Password</a></p>
				<p ><a href='<?php echo base_url("/login/sign_up"); ?>'>Sign up</a></p>
		</form>
	</div>	
</div>