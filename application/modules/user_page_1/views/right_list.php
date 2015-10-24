	<div class="col-xs-24 col-sm-24 col-md-4" style="margin-left:8px;"><!--right list begin  -->
				  					<div class="row">
        <div class="col-xs-24 col-md-24" style="background-color:white;">
            <div class="">
                <div class="row">
                    <div class="col-xs-24 col-md-24 text-center">
                        <h1 class="rating-num">
                            4.0</h1>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span>
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>1,050,008 total
                        </div>
                    </div>
                    <div class="col-xs-24 col-md-24">
                        <div class="row rating-desc">
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>5
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 5 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>4
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>6
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 6 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>2
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>1
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
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
					  		<button type="button" class="btn btn-default " data-toggle="collapse" data-target="#message_box" id="but"
					  		onclick="get_message( <?php  echo "'$username', '$to'"; ?> );setTimeout(goto('#msg'),100);">message user</button>
					  	  <div id="box">
						  		<form action="<?php echo base_url(); ?>message/post_data/<?php echo $to ?>" method="POST" class="form-horizontal collapse" role="form" id="message_box">
						  			</br>
						  		<div class="row">
						  			<div id="msg">
						  				
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-lg-24">
							  			   <div class="input-group" id="chat_form">
							  			     
							  			     <input type="text" name="message_text"  required="required" id="Message_text" class="form-control" placeholder="message">
							  			     
							  			     <span class="input-group-btn">
							  			     
							  			      <button  type="submit" class="btn btn-info" type="button" onclick="setTimeout(goto('#msg'), 100)">Go!</button>
							  			     
							  			     </span>
							  			   </div>
						  			 </div>
						  			</div>
						  		</form>
					  	   </div>
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
	      document.getElementById("message_box").elements.namedItem("message_text").value="";
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
		<script type="text/javascript">
			function goto(id){
				id="\'"+id+"\'";
			   var element = document.getElementById("msg");
			   element.scrollTop = element.scrollHeight - element.clientHeight;
			}
			$('#but').click(function () {
				$('#box').toggleClass("box");
			});
		</script>