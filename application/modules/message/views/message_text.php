<?php 
if($query_message->num_rows()>0){
	foreach ($query_message->result() as $key ){
		if($key->from==$from){
			echo '<div><img src="'.base_url().'/images/profile_pic/'.$from.'.jpg" class="img-circle" alt="profile_pic" width="30px" height="30px">';
			echo $key->message_text;
			echo "</div></br>";
		}
		else if($key->to==$from){
			echo '<div style="float:right"><img src="'.base_url().'/images/profile_pic/'.$to.'.jpg" class="img-circle" alt="profile_pic" width="30px" height="30px">';
			echo $key->message_text;
			echo "</div></br>";
		}		
	}
}
else
echo "no message to display";
 	

?>