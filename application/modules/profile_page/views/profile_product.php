</br>
<div class="col-xs-24 col-sm-24 col-md-24" id="last"><!--row2 24 columns -->
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
if(($query->num_rows() > 0)){
	foreach ($query->result() as $key) {	
	echo '<div class="row post_box"  ><!--postbox  -->
				<div class="col-md-3">
					<br><a href="http://localhost/artphilic/profile_page/load_user/'.$key->posted_by.'">
					<img src="'.base_url().'/images/profile_pic/'.$user_pic.'" class="img-circle" alt="profile_pic" width="60px" height="60px" >
					</a>
				</div>
				<div class="col-md-20">
					<br>
				 	<div class="row">
				 		<div class="col-md-12">
				 			<a href="http://localhost/artphilic/profile_page/load_user/'.$key->posted_by.'"><h4>'.$key->posted_by.'</h4></a>
				 		</div>
				 		<h6 class="text-right">'.date("d-M-Y H:i a",strtotime($key->time)).'</h6>
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
							  <li style="float:right"><a  onclick="get_comment(\''.$key->id.'\')">Comments</a></li>
							</ul>
                    	</div>
                    </div>
				</div>
			</div><!--postbox end   -->
			<div class="row" id="comment_box">

			</div>';
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
 function likes(id,post_id,post_username){
 	url="http://localhost/artphilic/likes";
 	var posting = $.post( url, { post_id:post_id,post_username:post_username} );
 	posting.done(function( data ) {
 	 	var y = id.getElementsByTagName("span")[0];
 	 	var text=y.innerHTML;
 	 	text=Number(text)+1;
 	 	y.innerHTML=text;
 	 	count=1;
 	});
 }
</script>
<script type="text/javascript">
	<script>
		function get_comment(id) {
			        var xmlhttp = new XMLHttpRequest();
			        xmlhttp.onreadystatechange = function() {
			            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			                document.getElementById("comment_box").innerHTML = xmlhttp.responseText;
			            }
			        }
			        xmlhttp.open("GET", "http://localhost/artphilic/comments?q="+id, true);
			        xmlhttp.send();
			    }


		 $("#comment_box").submit(function(event) {
	      event.preventDefault();
	      var $form = $( this ),
	      url = $form.attr( 'action' );
	      var post_t=document.getElementById("comment_box").elements.namedItem("comment_text").value;
	      document.getElementById("comment_box").elements.namedItem("comment_text").value="";
	      var posting = $.post( url, { post_text:post_t} );
	       posting.done(function( data ) {
	        $('#msg').append('<div class="row">\
	          <div class="col-md-20"><img src="<?php echo base_url()?>/images/profile_pic/<?php echo $username ?>.jpg" class="img-circle" alt="profile_pic" width="30px" height="30px" >\
	         '+post_t +'\
	          </div>\
	          </div></br>');
	      });
	    });
		</script>
</script>