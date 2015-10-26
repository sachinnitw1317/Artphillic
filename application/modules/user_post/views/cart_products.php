
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
foreach ($query->result() as $key) {	

echo '<div class="row post_box" >
			<div class="col-md-3">
			<br>
				<img src="'.base_url().'/images/profile_pic/'.$key->posted_by.'.jpg" class="img-circle" alt="profile_pic" width="60px" height="60px" >
			</div>
			<div class="col-md-20">
				<br>
			 	<div class="row">
			 		<div class="col-md-12">
			 			<h4>'.$key->posted_by.'</h4>
			 		</div>
			 		<h5 class="text-right">'.date("d-M-Y H:i a",strtotime($key->time)).'</h5>
			 	</div>
			 	<div class="row">
				 	<p class="text-justify">'.$key->post_text.'</p>
			 	</div>
			 	<div class="row">
			 	<br>
				 						 	<div class="row">
					 	<ul class="list-inline list-images">
					 	  <li class="col-md-6 likes" onclick="likes(this,\''.$key->id.'\',\''.$key->posted_by.'\')">
						 	  <span>'.$key->likes.'</span>
						 	  <img src="'.base_url().'/images/flaticon/upload/like1.png" onclick="change(this) ">
					 	  </li>
						  <li><img src="'.base_url().'/images/flaticon/upload/actor1.png" onclick="change(this)"></li>
						  <li><img src="'.base_url().'/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
						  <li><img src="'.base_url().'/images/flaticon/upload/director1.png" onclick="change(this)"></li>
						  <li><img src="'.base_url().'/images/flaticon/upload/musician1.png" onclick="change(this)"></li>
						  <li><img src="'.base_url().'/images/flaticon/upload/painter1.png" onclick="change(this)"></li>
						  <li><img src="'.base_url().'/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
						</ul>
                    </div>		
			 	</div>
		 </div>
	</div>';
}
?>
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