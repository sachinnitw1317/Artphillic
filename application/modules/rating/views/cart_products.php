<?php 
//print_r($query);
if($query->num_rows()>0){
    foreach ($query->result() as $key) {
    $sum=$key->one + $key->two + $key->three + $key->four + $key->five;
    if($sum==0){
        $sum=1;
    }
    $percent_five=round($key->five/$sum * 100);
    $percent_four=round($key->four/$sum * 100);
    $percent_three=round($key->three/$sum * 100);
    $percent_two=round($key->two/$sum * 100);
    $percent_one=round($key->one/$sum * 100);
    $rate=($key->five*5 + $key->four*4 + $key->three*3 + $key->two*2 + $key->one)/($sum);
    $star=floor($rate);
      //  print_r($rating);
             echo '<div class="row">
        <div class="col-xs-24 col-md-24">
            
                    <div class="col-xs-24 col-md-24 text-center">
                        <h1 class="rating-num">
                            '.round($rate,2).'</h1>
                        <div class="rating">';
                       
                    for ($i=1; $i <=$star ; $i++) { 
                        echo  '</span><span class="glyphicon glyphicon-star"></span>';
                    }
                    for ($i=$star; $i <5 ; $i++) { 
                        echo  '</span><span class="glyphicon glyphicon-star-empty"></span>';   
                    }
                           
                      echo ' </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>'.$sum.' total
                        </div>
                    </div>
                    <div class="col-xs-24 col-md-24">
                        <div class="row rating-desc">
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$key->five.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_five.'%">
                                        <span class="sr-only">'.$percent_five.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 5 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$key->four.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_four.'%">
                                        <span class="sr-only">'.$percent_four.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$key->three.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_three.'%">
                                        <span class="sr-only">'.$percent_three.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 6 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$key->two.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_two.'%">
                                        <span class="sr-only">'.$percent_two.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$key->one.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_one.'%">
                                        <span class="sr-only">'.$percent_one.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                           
    </div> ';
  }

}
else{

    $percent_five=0;
    $percent_four=0;
    $percent_three=0;
    $percent_two=0;
    $percent_one=0;
    $rate=0;   
    $sum=0;
    $one=0;
    $two=0;
    $three=0;
    $four=0;
    $five=0;
    $star=0;
             echo '<div class="row">
        <div class="col-xs-24 col-md-24" style="background-color:#f1f1f1;">
            
                    <div class="col-xs-24 col-md-24 text-center">
                        <h1 class="rating-num">
                            '.round($rate,2).'</h1>
                        <div class="rating">';
                       
                    for ($i=1; $i <=$star ; $i++) { 
                        echo  '</span><span class="glyphicon glyphicon-star"></span>';
                    }
                    for ($i=$star; $i <5 ; $i++) { 
                        echo  '</span><span class="glyphicon glyphicon-star-empty"></span>';   
                    }
                           
                      echo ' </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>'.$sum.' total
                        </div>
                    </div>
                    <div class="col-xs-24 col-md-24">
                        <div class="row rating-desc">
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$five.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_five.'%">
                                        <span class="sr-only">'.$percent_five.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 5 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$four.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_four.'%">
                                        <span class="sr-only">'.$percent_four.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$three.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_three.'%">
                                        <span class="sr-only">'.$percent_three.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 6 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$two.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_two.'%">
                                        <span class="sr-only">'.$percent_two.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-6 col-md-6 text-right">
                                <span class="glyphicon glyphicon-star"></span>'.$one.'
                            </div>
                            <div class="col-xs-16 col-md-18">
                               <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: '.$percent_one.'%">
                                        <span class="sr-only">'.$percent_one.'</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                           
    </div> ';
}


?>

<?php  
if ($rating->num_rows()>0) {
$row=$rating->row();
  $current_rate=$row->rating;
}
else{
    $current_rate=0;
}


 ?>

 <div class="row" style="text-align:center">
 <?php
  if($this->uri->segment(1)!="profile_page"){
             echo ' <h4 style="text-align:center;">would you like to rate him</h4>
             <input type="hidden" class="rating" value="'.$current_rate.'" />';
    }
?>
 </div>
<script type="text/javascript">
    
$('.rating').on('change', function () {
    alert("rate");
  url="http://localhost/artphilic/rating/upload_text/<?php echo $this->uri->segment(3)?>";
  var posting = $.post( url, { post_rate: $(this).val() } );
  posting.done(function(){
    alert("hey");
  });

});

</script>