	<div class="col-xs-24 col-sm-24 col-md-5" style="margin-left: 15px;"><!--right list begin  -->
				  <div>
				  <h4>My Courses</h4>
				  <div>
				  No courses yet
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