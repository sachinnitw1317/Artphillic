<div class="col-xs-24 col-sm-24 col-md-24" id="last"><!--row2 24 columns -->
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
if(($query->num_rows() > 0)){
	foreach ($query->result() as $key) {	

	echo '<div class="row post_box"  ><!--postbox  -->
				<div class="col-md-3" style="text-align: center;padding-top: 10px;">
				 <a href="http://localhost/artphilic/profile_page/load_user/'.$key->posted_by.'">
					<img src="'.base_url().'/images/profile_pic/'.$key->posted_by.'.jpg" class="img-circle" alt="profile_pic" width="50px" height="50px" >
				</a>
				</div>
				<div class="col-md-20">
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
				 	<div class="col-md-10">
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
				 	<ul class="list-inline list-images col-md-6" onclick="likes(this,\''.$key->id.'\',\''.$key->posted_by.'\')">
				 	 <br>     <li class="likes"
						 	  <span>'.$key->likes.'</span>
						 	  <img src="'.base_url().'/images/flaticon/upload/like1.png" onclick="change(this) ">
					 	       </li>
				 	</ul>
				 	</div>
				 	<div id="comments">
				 	</div>
				 	<form action="'.base_url().'comments/post_data" method="POST" class="form-horizontal "  role="form" id="comment_box">
				 		<div class="input-group">
				 		     <input name="comment_text" type="text" class="form-control" placeholder="comment here.....">
				 		     <span class="input-group-btn">
				 		       <button type="submit" class="btn btn-default" type="button">comment</button>
				 		     </span>
				 		</div><!-- /input-group -->
				 	</form>
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

<!--  $("#form_ajax").submit(function(event) {
      event.preventDefault();
      var $form = $( this ),
      url = $form.attr( 'action' );
      var post_t=document.getElementById("form_ajax").elements.namedItem("post_text").value;
      var post_b="sachin";
      var post_to="ketki";
      var posting = $.post( url, { post_text:post_t, posted_by:post_b ,posted_on:post_to} );
       posting.done(function( data ) {
        $('#last').prepend('<div class="row post_box">\
          <div class="col-md-3">\
          you just posted\
           </div>\
          <div class="col-md-20">\
         '+post_t +'\
          </div>\
          </div>');
      });
    }); -->