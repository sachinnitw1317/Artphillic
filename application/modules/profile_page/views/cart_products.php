<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="col-xs-24 col-sm-24 col-md-13">
  <div id="main">
    <div class="card hovercard">
        <div class="card-background">
            <img id="photo" title="" src="<?php echo base_url(); ?>/images/logo.png" />
       </div>
        <div class="useravatar">
          <a href="<?php echo base_url(); ?>/images/logo.png" title="Name" data-gallery>
            <img alt="" src="<?php echo base_url(); ?>/images/logo.png" style="width:60px;" ></a>
        </div>
        <div class="card-info"> <span class="card-title"></span>
        </div>
    </div> 
    <ul class="nav nav-justified nav-pills">
       <li class="active"><a href="#ifeed" data-toggle="tab">Posts</a></li>
       <li ><a href="#iphot" data-toggle="tab">Photos</a></li>
       <li ><a href="#ivideo" data-toggle="tab">Videos</a></li>
   </ul>
<div class="tab-content">
  <div class="tab-pane fade in active" id="ifeed">
    <div id="b_right">
        <ul class="nav nav-tabs" style="width: 100%;  margin: auto;">
          <li class="active"><a href="#post" data-toggle="tab" style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/post.png"></a></li>
          <li ><a href="#picture" data-toggle="tab"style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/picture.png"></a></li>
          <li ><a href="#video" data-toggle="tab"style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/video.png"></a></li>
        </ul>
    </div>
    <div class="tab-content">
    
      <div class="tab-pane fade in active" id="post"> 
        <textarea name="posts" id="fb_post"placeholder="What's going on?" form="upform"></textarea> 
        <form>
           <button type="submit" style="width: 100%;text-align: right;" value="" form="upform" name="posting">
              <img src="<?php echo base_url(); ?>/images/flaticon/upload/upload.png"/>
           </button>
         </form>
      </div>

      <div class="tab-pane fade " id="picture">
       <form method="post" action=" " style="padding-top: 50px;margin-left: 33%;" enctype="multipart/form-data">
            <input type="file" id="files" name="photos_upload[]" id="iupload" title="upload" multiple onchange="readImagesAndPreview(this.files);" value="">
             <button type="submit" name="mphoto" id="save_p" value=" ">
              <img src="<?php echo base_url(); ?>/images/flaticon/upload/upload.png"/>
             </button>
        </form>
      </div>

      <div class="tab-pane fade " id="video">
        <form method="post" action=" " style="padding-top: 50px;margin-left: 17%;"enctype="multipart/form-data">
            <input type="url" name="video" placeholder="Enter url of your video" size="50">
            <button type="submit" id="save_v" name="mvideo">
                <img src="<?php echo base_url(); ?>/images/flaticon/upload/upload.png"/>
            </button>
        </form>
      </div>
        <?php  $this->load->view('profile_product');  ?>
    </div>
  </div>
 
  <div class="tab-pane fade " id="iphot" >
  <?php  $this->load->view('profile_page_photos/Photos');?>
  </div>
  <div class="tab-pane fade in" id="ivideo">
  <?php  $this->load->view('profile_page_videos/videos');?>
  </div>

</div><!--tab content ends here-->


</div><!--main end here-->

<!--column end here-->