<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
$this->load->view('left_list');
$this->load->view('followers',$query);
$this->load->view('right_list');

?>
			<!--<li class="list-group-item">
				<span class="badge">5</span>
				GOLD
			</li>-->
</div>
</div>
</body>
</html>