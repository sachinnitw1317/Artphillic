	<div class="col-xs-24 col-sm-24 col-md-5" style="margin-left: 15px;"><!--right list begin  -->
				 	<div class="panel panel-primary custom_border">
						<div class="panel-heading">
						    <h3 class="panel-title">Notification</h3></div>
						  <div class="list-group">
								  <a href="#"  class="list-group-item" data-toggle="popover" data-trigger="hover" data-placement="left" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">hover</a>
								   <a href="#"  class="list-group-item" data-toggle="popover" data-trigger="hover" data-placement="left" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">notes</a>
								   <a href="#"  class="list-group-item" data-toggle="popover" data-trigger="hover" data-placement="left" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">adds</a>
								   <a href="#"  class="list-group-item" data-toggle="popover" data-trigger="hover" data-placement="left" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">click</a>
								   <a href="#"  class="list-group-item" data-toggle="popover" data-trigger="hover" data-placement="left" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">last</a>
							</div>
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
		$(document).ready(function(){
	    	$('[data-toggle="tooltip"]').tooltip(); 
	    	$('[data-toggle="popover"]').popover({ trigger: "hover" }); 
		});
	</script>