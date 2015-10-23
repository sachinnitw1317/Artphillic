<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-offset-3  col-lg-4">
						<?php foreach ($query->result() as $key) {
							echo "<h1>".$key->name."</h1>";
							echo "<img src='".base_url()."images/".$key->id.".jpg' width=200px height=200px> ";
						} ?>	
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					</br></br>
					<h3>price: <?php echo $key->price;  ?></h3>
					<p>Quantiy available: <?php echo $key->quantity;  ?></p>
					<p><?php echo $key->description;  ?></p>
				</div>
			</div>
		</div>
	</body>
</html>