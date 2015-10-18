<div class="panel panel-primary" id="reg_panel">
	  <div class="panel-heading">
			<h3 class="panel-title">WELCOME</h3>
	  </div>
	  <div class="panel-body">
			<h1>HELLO!! <?php echo $this->session->userdata['username'];?></h1>
			<a href="<?php base_url('/login/logout'); ?>">logout</a>
	  </div>
</div>