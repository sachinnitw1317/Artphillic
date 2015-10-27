<div class="col-xs-24 col-sm-24 col-md-24" id="follow">

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
echo '<div class="row">
<button class="col-xs-24 col-sm-24 col-md-24 col-lg-24"  style="background-color: #FFFFFF; border: 0px;text-align: left;padding: 10px 0px;"
 type="button"><a href="'.base_url().'my_followings">Following</a>&nbsp <span class="badge">'.$query->num_rows().'</span></button>';
foreach ($query->result() as $key) {

	echo '<div class="col-sm-6 col-md-6">
	            <a href="http://localhost/artphilic/profile_page/load_user/'.$key->username.'">
			    <img src="'.base_url().'/images/profile_pic/'.$CI->get_pic($key->username).'" alt="image" width="100%" height="50px" style="padding:4px;">
			    </a>
	    </div>';
}
echo "</div>";
?>
</div>