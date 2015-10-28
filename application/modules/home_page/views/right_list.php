<div class="col-xs-24 col-sm-24 col-md-4" style="margin-left:8px;"><!--right list begin  -->

    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <img src="<?php echo base_url(); ?>/images/flaticon/details/objective.png" style="margin-top:8px;">
      </div>
      <div class="col-xs-16 col-sm-16 col-md-16 col-lg-16">
        <h4  ><a>Targets</a></h4>
      </div>
    </div>
    <div class="row">
      <ul class="list-group">
        <li class="list-group-item" style="padding:11px">Earn 200 points and become a rokie.</li>
        <li class="list-group-item" style="padding:11px">Share your art and earn points.</li>
        <li class="list-group-item" style="padding:11px"> Upload your art to Gallery and be a part of society.</li>
      </ul>    
    </div>

        </br>

    <div class="row">
				<?php echo modules::run('followers'); ?>
		</div>

					</br>

  	<div class="row">
  		<?php echo modules::run('following'); ?>
  	</div>     

</div><!--rightlist end   -->