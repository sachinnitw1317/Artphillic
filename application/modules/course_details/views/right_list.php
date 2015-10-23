	<div class="col-xs-24 col-sm-24 col-md-5" style="margin-left: 15px;"><!--right list begin  -->
				  
					<div>
							<?php echo modules::run('followers'); ?>
					</div>
					</br>
					</br>
					<div>
						<?php echo modules::run('following'); ?>
					</div>
					<button type="button" class="btn btn-default " data-toggle="collapse" data-target="#message_box">message user</button>
					<form action="<?php echo base_url(); ?>message/post_data" method="POST" class="form-horizontal collapse" role="form" id="message_box">
						<div class="form-group" >
								<div class="col-sm-24">
									<textarea name="message_text" id="inputMessage_text" class="form-control" rows="3" required="required"></textarea>
								</div>
							</div>
						

							<div class="form-group">
								<div class="col-sm-24">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
					</form>

	</div><!--rightlist end   -->
	<script>
	 $("#message_box").submit(function(event) {
      event.preventDefault();
      var $form = $( this ),
      url = $form.attr( 'action' );
      var post_t=document.getElementById("message_box").elements.namedItem("message_text").value;
      var posting = $.post( url, { post_text:post_t} );
       posting.done(function( data ) {
        $('#message_box').prepend('<div class="row post_box">\
          <div class="col-md-3">\
          you just posted\
           </div>\
          <div class="col-md-20">\
         '+post_t +'\
          </div>\
          </div>');
      });
    });
	</script>