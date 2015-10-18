
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
			 	<div class="row">
			 	<br>
				 	<ul class="list-inline list-images">
					  <li><img src="'.base_url().'/images/flaticon/upload/actor2.png"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/dancer2.png"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/director2.png"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/musician2.png"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/painter2.png"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/writer2.png"></li>
					</ul>
			 	</div>
			</div>
	</div>';
}
?>
 