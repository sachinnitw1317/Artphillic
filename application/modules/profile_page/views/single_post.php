</br>
<div class="col-xs-24 col-sm-24 col-md-24">
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
echo '<div class="row post_box" >
			<div class="col-md-3">
			<br>
				<img src="'.base_url().'/images/profile_pic/'.$posted_by.'.jpg" class="img-circle" alt="profile_pic" width="60px" height="60px" >
			</div>
			<div class="col-md-20">
				<br>
			 	<div class="row">
			 		<div class="col-md-12">
			 			<h4>'.$posted_by.'</h4>
			 		</div>
			 		<h5 class="text-right">'.date("d-M-Y H:i a",strtotime($time)).'</h5>
			 	</div>
			 	<div class="row">
				 	<p class="text-justify">'.$post_text.'</p>
			 	</div>
			 	<div class="row">
			 	<br>
				 	<ul class="list-inline list-images">
					  <li><img src="'.base_url().'/images/flaticon/upload/actor1.png" onclick="change(this)"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/director1.png" onclick="change(this)"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/musician1.png" onclick="change(this)"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/painter1.png" onclick="change(this)"></li>
					  <li><img src="'.base_url().'/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
					</ul>
			 	</div>
		 </div>
	</div>';
}
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