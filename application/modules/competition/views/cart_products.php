<div class="col-xs-24 col-sm-24 col-md-24 col-lg-24 ">
		<div class="row">
			<h1 style="text-align:center">COMPETITIONS</h1>
			<h3  style="text-align:center">Enroll in competitions and win amazing prizes</h3>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-offset-9 col-md-6 col-lg-6">
				<select class="form-control">
				  <option>Painter</option>
				  <option>Dancer</option>
				  <option>Musician</option>
				  <option>Actor</option>
				  <option>Writer</option>
				  <option>Director</option>
				</select>	
			</div>
		</div>
		</br>
		<div class="row">
			<div class="col-xs-20 col-sm-20 col-md-offset-2 col-md-20 col-lg-20">
				<ul class="nav nav-tabs nav-justified">
				    <li ><a data-toggle="tab" href="#home">Past</a></li>
				    <li class="active"><a data-toggle="tab" href="#menu1">Ongoing</a></li>
				    <li><a data-toggle="tab" href="#menu2">Upcoming</a></li>
				 </ul>
				<div class="tab-content">
					  <div id="home" class="tab-pane fade">
					      <h3>Completed</h3></br>
					    	<div class="col-sm-6 col-md-8">
					    	    <div class="thumbnail">
					    	      <img src="<?php echo base_url(); ?>images/login.png">;
					    	      <div class="caption">
					    	        <h3>Competition Name</h3>
					    	        <p>
						    	        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						    	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						    	     </p>
					    	        <p><a href="#" class="btn btn-primary" role="button">Join</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
					    	    </div>
					    	 </div>
					       </div>
					  </div>
					  <div id="menu1" class="tab-pane fade in active">
					    <h3>Ongoing</h3></br>
					        	<div class="col-sm-6 col-md-8">
					        	    <div class="thumbnail">
					        	      <img src="<?php echo base_url(); ?>images/login.png">;
					        	      <div class="caption">
					        	        <h3>Competition Name</h3>
					        	        <p>
					    	    	        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    	    	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    	    	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    	    	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    	    	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    	    	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					    	    	     </p>
					        	        <p><a href="#" class="btn btn-primary" role="button">Join</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
					        	    </div>
					        	 </div>
					           </div>
					  </div>
					  <div id="menu2" class="tab-pane fade">
					    <h3>Upcoming</h3></br>
					        	<div class="col-sm-6 col-md-8">
					        	    <div class="thumbnail">
					        	      <img src="<?php echo base_url(); ?>images/login.png">;
					        	      <div class="caption">
					        	        <h3>Competition Name</h3>
					        	        <p>
					    	    	        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    	    	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    	    	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    	    	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    	    	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    	    	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					    	    	     </p>
					        	        <p><a href="#" class="btn btn-primary" role="button">Join</a> <a href="#" class="btn btn-default" role="button">Details</a></p>
					        	    </div>
					        	 </div>
					           </div>
					  </div>
				</div>
			</div>
		</div>
</div>


<!-- 
<?php 
	$count=0;
	foreach ($query->result() as $key) {
		if ($count%4==0 && $count!=0) 
		echo "</br>";	
			
  echo "<div class='col-xs-24 col-sm-12 col-md-8 col-lg-8'>
			 <div class='thumbnail'>
				<img src='./images/thumb/".$key->id.".jpg' width=80px height=80px></br>
				<div class='caption'>
					<a href='cart/auto/".$key->id."'>".$key->name."</a></br>".
					"<span>price:-".$key->price."</span>&nbsp&nbsp&nbsp <span>quantity:-".$key->quantity."
					</span>
				</div>
			</div>
		</div>";
		$count++;
	}
?> -->