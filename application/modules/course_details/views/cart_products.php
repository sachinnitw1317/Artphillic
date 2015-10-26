<?php 
  
  $this->load->view('header');
  
  $this->load->view('left_list');
    echo  "<div class='col-xs-20 col-sm-20 col-md-20 col-lg-20' style='padding-left:20px;padding-right:20px;'>";
      foreach ($query->result() as $key) {
       
       echo "<div class='col-xs-24 col-sm-12 col-md-4 col-lg-4'>
                <div class='thumbnail'>
                  <img src='".base_url()."images/login.png' width=80px height=80px></br>
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