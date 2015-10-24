<?php
if($query_message->num_rows()>0){
	foreach ($query_message->result() as $key ){
		if($key->from==$from){
			echo '<div class="row">';
			echo '<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<img src="'.base_url().'/images/profile_pic/'.$from.'.jpg" class="img-circle" alt="profile_pic" width="30px" height="30px">
					</div>';				
			echo '<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
				<p> '.$key->message_text.'</p>
					</div>';
			echo "</div></br>";
		}
		else if($key->to==$from){
			echo '<div class="row"><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></br></div>';
			echo '<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
				<p style="float:right"> '.$key->message_text.'    </p>
					</div>';
			echo '<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<img src="'.base_url().'/images/profile_pic/'.$to.'.jpg" class="img-circle" alt="profile_pic" width="30px" height="30px">
					</div>';				
			echo "</div></br>";
		}		
	}
}
else
echo "no message to display";
?>
