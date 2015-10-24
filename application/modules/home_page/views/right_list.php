	<div class="col-xs-24 col-sm-24 col-md-4" style="margin-left:8px;"><!--right list begin  -->
				    <div id="info" style="background-color:#f1f1f1;height:auto;padding:5px;font-size:13px;">
            <img src="<?php echo base_url(); ?>/images/flaticon/details/objective.png" style="float:left;"><h4 style="margin-top: 5px;margin-left: 33px;"><a>Targets</a></h4>
               Earn 200 points and become a rokie.<br>
               Share your art and earn points.<br>
               Upload your art to Gallery and be a part of society.<br>
            </div>
					<div>
							<?php echo modules::run('followers'); ?>
					</div>
					</br>
					</br>
					<div>
						<?php echo modules::run('following'); ?>
					</div>
       
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
          <div class="col-md-6">\
          you just posted\
           </div>\
          <div class="col-md-20">\
         '+post_t +'\
          </div>\
          </div>');
      });
    });
	</script>