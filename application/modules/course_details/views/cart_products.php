<div class="col-xs-23 col-sm-23 col-md-23">
  <?php 
  $this->load->view('header');
 echo '<div class="row">';
     echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';
       $this->load->view('left_list');
     echo '</div>';
      foreach ($query->result() as $key) {
       echo "<div class='col-xs-24 col-sm-12 col-md-5 col-lg-5'>
                <div class='thumbnail'>
                  <img src='./images/thumb/".$key->id.".jpg' width=80px height=80px></br>
                  <div class='caption'>
                    <h3><a href=".base_url()."course_details/auto/".$key->id.">".$key->name."</a></h3>
                    <p>price:-".$key->start."</span>&nbsp&nbsp&nbsp <span>quantity:-".$key->end."
                    </p>
                    <p>".$key->description."</p>
                  </div>
                </div>
            </div>";
       }
   ?>
  </div>
</div>