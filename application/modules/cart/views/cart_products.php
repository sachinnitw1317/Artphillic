<div class="col-xs-24 col-sm-24 col-md-15">
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
			?>
</div>