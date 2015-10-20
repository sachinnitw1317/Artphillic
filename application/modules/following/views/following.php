<div class="col-xs-24 col-sm-24 col-md-24">

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
echo '<div class="row">
<button class="btn btn-primary col-xs-24 col-sm-24 col-md-24 col-lg-24" type="button">Following&nbsp <span class="badge">'.$query->num_rows().'</span></button>';
foreach ($query->result() as $key) {	
	echo '<div class="col-sm-6 col-md-4 post_box">
			    <img src="'.base_url().'/images/profile_pic/'.$key->username.'.jpg" alt="image" width="100%" height="35px">
	    </div>';
}
echo "</div>";
?>
</div>