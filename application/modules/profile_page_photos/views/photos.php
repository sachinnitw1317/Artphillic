<div class="col-xs-24 col-sm-24 col-md-24">

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
foreach ($query->result() as $key) {	
echo '<div class="col-sm-6 col-md-12 post_box" style="padding:5px;">
			<div class="thumbnail">
			    <img src="'.base_url().'/images/user_photos/'.$key->id.'.jpg" alt="image" class="img-responsive" style="width:100%;height:180px;">
			    <div class="caption">
			       	<div class="row">
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
	       </div>
	    </div>';
}
?>
</div>
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
