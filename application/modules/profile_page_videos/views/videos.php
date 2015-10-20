<div class="col-xs-24 col-sm-24 col-md-24">

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
foreach ($query->result() as $key) {  
echo '<div class="col-sm-6 col-md-8 post_box">
      <div class="thumbnail">
          <img src="'.base_url().'images/user_photos/'.$key->id.'.jpg" alt="image" class="img-responsive video_img" >
          <div class="caption">
              <div class="row">
                <ul class="list-inline list-images">
                  <li><img src="'.base_url().'/images/flaticon/upload/actor1.png" onclick="change(this)"></li>
                  <li><img src="'.base_url().'/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
                  <li><img src="'.base_url().'/images/flaticon/upload/director1.png" onclick="change(this)"></li>
                  <li><img src="'.base_url().'/images/flaticon/upload/musician1.png" onclick="change(this)"></li>
                  <li><img src="'.base_url().'/images/flaticon/upload/painter1.png" onclick="change(this)"></li>
                  <li><img src="'.base_url().'/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
                </ul>
              </div>
            </div>
         </div>
      </div>';
}
?>
<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <video width="560" height="315" controls  poster="http://localhost/artphilic/images/login.png">
            <source src="http://localhost/artphilic/videos/user_videos/" type="video/webm"> 
             <source src="http://localhost/artphilic/videos/user_videos/" type="video/ogg"> 
             <source src="http://localhost/artphilic/videos/user_videos/" type="video/mp4">
             <source src="http://localhost/artphilic/videos/user_videos/" type="video/3gp">
          Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
  
</div>


<script type="text/javascript">
$(document).ready(function(){
    $(".video_img").click(function(){
      var new_src= change_src(this);
     $("#video").find('source').attr("src","http://localhost/artphilic/videos/user_videos/1.3gp")
        //$("#video").css("src", "");
        $("#myModal").modal();
    });

});
  

 function change(img) {
    if (img.src.match("2.png")) {
      img.src=img.src.replace("2.png","1.png");
    }
    else{
    img.src=img.src.replace("1.png","2.png"); 
    }
  
 }

 function work(vid){
  change_src(vid);
  toggle_modal();
 }

 function change_src(vid) {
      var src=vid.src.replace("jpg","3gp");
      src=src.replace("images/user_photos/","videos/user_videos/");
      return src;
          
    }
function toggle_modal(){
  $("#myModal").modal();
}

</script>
</div>