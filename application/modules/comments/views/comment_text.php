<?php 
if($query_message->num_rows()>0){
	foreach ($query_message->result() as $key ){

			echo '<div><img src="'.base_url().'/images/profile_pic/'.$key->username.'.jpg" class="img-circle" alt="profile_pic" width="20px" height="20px">';
			echo $key->comment_text;
			echo "</div></br>";	
	}
}
else
echo "no message to display";
 	

?>