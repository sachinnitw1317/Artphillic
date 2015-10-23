<div class="row">
	<div class="col-xs-24 col-sm-24 col-md-14 col-lg-14">
				<form action="<?php echo base_url(); ?>course_details/post_data" method="POST" role="form">
					<legend>Form title</legend>
				
					<div class="form-group">
						<label for="">Course name</label>
						<input type="text" class="form-control" name="name" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">start date</label>
						<input type="date" name="start" id="input" class="form-control" value="" required="required" title="">
					</div>
					<div class="form-group">
						<label for="">end date</label>
						<input type="date" name="end" id="input" class="form-control" value="" required="required" title="">
					</div>
					<div class="form-group">
						<label for="">Course Desciption</label>
						<textarea name="description" id="input" class="form-control" name="course_description" rows="3" required="required"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
	</div>
</div>