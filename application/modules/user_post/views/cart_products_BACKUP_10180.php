
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
					  <li><img src="'.base_url().'images/flaticon/upload/actor1.png" id="icon_image" onclick="change(this)"></li>
					  <li><img src="'.base_url().'images/flaticon/upload/dancer1.png " id="icon_image" onclick="change(this)"></li>
					  <li><img src="'.base_url().'images/flaticon/upload/director1.png" id="icon_image" onclick="change(this)"></li>
					  <li><img src="'.base_url().'images/flaticon/upload/musician1.png" id="icon_image" onclick="change(this)"></li>
					  <li><img src="'.base_url().'images/flaticon/upload/painter1.png" id="icon_image" onclick="change(this)"></li>
					  <li><img src="'.base_url().'images/flaticon/upload/writer1.png" id="icon_image" onclick="change(this)"></li>
					</ul>
			 	</div>
			</div>
	</div>';
}
?>
<<<<<<< HEAD
<script type="text/javascript">
 function change(img) {
    if (img.src.match("2.png")) {
    	img.src=img.src.replace("2.png","1.png");
    }
    else{
    img.src=img.src.replace("1.png","2.png");	
    }
 	
 }
</script>
</div>
=======
 
>>>>>>> acb5e7aea4972b10dfbfd322b3b4f7e7e6e00aa3
