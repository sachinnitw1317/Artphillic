<div class="col-xs-24 col-sm-24 col-md-24">

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
echo '<div class="row">
<button class="btn btn-primary col-xs-24 col-sm-24 col-md-24 col-lg-24"  style="background-color: #009688; border: 0px;"
 type="button">Following&nbsp <span class="badge">'.$query->num_rows().'</span></button>';
foreach ($query->result() as $key) {

	echo '<div class="col-sm-6 col-md-6 post_box" >
	            <a href="http://localhost/artphilic/profile_page/load_user/'.$key->username.'">
			    <img src="'.base_url().'/images/profile_pic/'.$key->username.'.jpg" alt="image" width="100%" height="60px" style="padding:4px;">
			    </a>
	    </div>';
}
echo "</div>";
?>
</div>