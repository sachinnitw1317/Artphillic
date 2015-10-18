<div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-1 col-lg-12">
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
foreach ($query->result() as $key) {

	

echo '<div class="row post_box" >
			<div class="col-md-3">
			<br>
				<img src="'.base_url().'/images/profile_pic/'.$key->user.'.jpg" class="img-circle" alt="profile_pic" width="60px" height="60px" >
			</div>
			<div class="col-md-20">
				<br>
			 	<div class="row">
			 		<div class="col-md-12">
			 			<h4>'.$key->user.'</h4>
			 		</div>
			 		<h5 class="text-right">time</h5>
			 	</div>
			 	<div class="row">
				 	<p class="text-justify">'.$key->description.'</p>
			 	</div>
			</div>
	</div>';
}
?>
</div>