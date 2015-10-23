	<div class="col-xs-24 col-sm-24 col-md-5" style="margin-left: 15px;"><!--right list begin  -->
					<div>
							<?php echo modules::run('followers'); ?>
					</div>
					</br>
					</br>
					<div >
						<?php echo modules::run('following'); ?>
					</div>
<?php $username=@$_SESSION['username']; ?>
<?php $to=$this->uri->segment(3);?>
					<div class="row">
					  	<div class="col-xs-24 col-sm-24 col-md-24">
					  		<button type="button" class="btn btn-default " data-toggle="collapse" data-target="#message_box" 
					  		onclick="get_message( <?php  echo "'$username', '$to'"; ?> )">message user</button>
					  		<form action="<?php echo base_url(); ?>message/post_data/<?php echo $to ?>" method="POST" class="form-horizontal collapse" role="form" id="message_box">
					  			<div id="msg">
					  				
					  			</div>
					  			<div class="form-group" id="chat_form">
					  					<div class="col-sm-24">
					  						<textarea name="message_text" id="Message_text" class="form-control" rows="3" required="required"></textarea>
					  					</div>
					  				</div>
					  			

					  				<div class="form-group">
					  					<div class="col-sm-24">
					  						<button type="submit" class="btn btn-primary">Submit</button>
					  					</div>
					  				</div>
					  		</form>
					  	</div>
					</div>


	</div><!--rightlist end   -->

		<script>
		function get_message(from,to) {
			        var xmlhttp = new XMLHttpRequest();
			        xmlhttp.onreadystatechange = function() {
			            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			                document.getElementById("msg").innerHTML = xmlhttp.responseText;
			            }
			        }
			        xmlhttp.open("GET", "http://localhost/artphilic/message?q="+to, true);
			        xmlhttp.send();
			    }


		 $("#message_box").submit(function(event) {
	      event.preventDefault();
	      var $form = $( this ),
	      url = $form.attr( 'action' );
	      var post_t=document.getElementById("message_box").elements.namedItem("message_text").value;
	      var posting = $.post( url, { post_text:post_t} );
	       posting.done(function( data ) {
	        $('#chat_form').prepend('<div class="row post_box">\
	          <div class="col-md-20"><img src="<?php echo base_url()?>/images/profile_pic/<?php echo $username ?>.jpg" class="img-circle" alt="profile_pic" width="30px" height="30px" >\
	         '+post_t +'\
	          </div>\
	          </div>');
	      });
	    });
		</script>