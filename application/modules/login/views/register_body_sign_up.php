<div class="row">
	<div class="col-xs-13 col-sm-13 col-md-13 col-lg-13">
		<img src='<?php echo base_url("/images/login.png"); ?>' class="img-responsive" alt="Image">
	</div>
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<form name="sign_up" action='<?= base_url("/login/sign_up_validation");?>' method="POST" role="form" class="form-horizontal">
				<div class="form-group">
					<legend>SignUp</legend>
				</div>	


				<p class="text-warning"><?php echo validation_errors(); ?></p>	


				<div class="form-group">
			        <label for="username" class="control-label" >Username</label>
			        <div >
			            <input type="text" class="form-control" id="inputPassword" name="username" required="required" placeholder="username">
			        </div>
			    </div>


				 <div class="form-group">
			        <label for="inputPassword" class="control-label">Password</label>
			        <div >
			            <input type="password" class="form-control" id="inputPassword" name="password" required="required" placeholder="Password">
			        </div>
			    </div>

			    <div class="form-group">
				    <label for="InputEmail1">Email address</label>
				    <input type="email" class="form-control" id="inputEmail1" name="email" required="required" placeholder="something@something.com">
				 </div>

				<div class="form-group">
					<div class="col-sm-15">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>

				<a href='<?php echo base_url("/login"); ?>'>Login</a>
			</form>
	</div>
</div>