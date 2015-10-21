</br>
<div class="col-xs-24 col-sm-24 col-md-24" id="last"><!--row2 24 columns -->
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
if(($query->num_rows() > 0)){
	foreach ($query->result() as $key) {	

	echo '<div class="row post_box"  ><!--postbox  -->
				<div class="col-md-3">
				<br><a href="http://localhost/artphilic/user_page/get_data/'.$key->posted_by.'">
					<img src="'.base_url().'/images/profile_pic/'.$key->posted_by.'.jpg" class="img-circle" alt="profile_pic" width="60px" height="60px" >
				</a>
				</div>
				<div class="col-md-20">
					<br>
				 	<div class="row">
				 		<div class="col-md-12">
				 			<a href="http://localhost/artphilic/user_page/get_data/'.$key->posted_by.'"><h4>'.$key->posted_by.'</h4></a>
				 		</div>
				 		<h5 class="text-right">'.date("d-M-Y H:i a",strtotime($key->time)).'</h5>
				 	</div>
				 	<div class="row">
					 	<p class="text-justify">'.$key->post_text.'</p>
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
		</div><!--postbox end   -->';
	}
}
else
echo "no POST found";
?>
</div><!-- col end -->
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