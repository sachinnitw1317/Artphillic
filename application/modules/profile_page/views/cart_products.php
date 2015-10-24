<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="col-xs-24 col-sm-24 col-md-13" style="padding: 20px; padding-top: 0px;padding-right:5px;"><!--13 columns begin -->
  <div id="main"><!--main begin-->
        <div class="card hovercard" style="margin-top:0px;">
            <div class="card-background">
                <img id="photo" title="" src="<?php echo base_url(); ?>images/profile_pic/<?php echo $_SESSION['username']; ?>.jpg" />
           </div>
            <div class="useravatar">
              <a href="<?php echo base_url(); ?>images/profile_pic/<?php echo $_SESSION['username']; ?>.jpg" title="Name" data-gallery>
                <img alt="" src="<?php echo base_url(); ?>images/profile_pic/<?php echo $_SESSION['username']; ?>.jpg"  ></a>
            </div>
        </div> 
        <ul class="nav nav-justified nav-pills">
           <li class="active"><a href="#ifeed" data-toggle="tab">Posts</a></li>
           <li ><a href="#iphot" data-toggle="tab">Photos</a></li>
           <li ><a href="#ivideo" data-toggle="tab">Videos</a></li>
       </ul>
    <div class="tab-content"><!--tabs content begin    -->
        <div class="tab-pane fade in active" id="ifeed">
        <div id="b_right" style="right: 22px;    top: 209px;">
            <ul class="nav double" style="width: 100%;  margin: auto;" id="cd">
              <li class="active"><a href="#post" data-toggle="tab" style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/post.png"></a></li>
              <li ><a href="#picture" data-toggle="tab"style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/picture.png"></a></li>
              <li ><a href="#video" data-toggle="tab"style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/video.png"></a></li>
            </ul>
        </div>
          <div class="row"> 
            <div class="col-xs-23 col-sm-23 col-md-23 col-lg-23">
              
              <div class="tab-content"   style="margin-top:9px;">
                  
                  <div class="tab-pane fade in active" id="post">  
                    <form action="<?php echo base_url(); ?>profile_page/upload_text" method="POST" role="form" id="form_ajax" name="form_ajax">
                        <textarea name="post_text" id="input" class="form-control" rows="3" required="required"></textarea>
                       <button type="submit" class="btn btn-danger" style="margin-top: 5px;">Submit</button>
                     </form>
                  </div>

                  <div class="tab-pane fade " id="picture">
                   <form method="post" action=" " style="padding-top: 20px;" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            </br>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="file" class="filestyle" id="files" name="photos_upload[]" id="iupload" title="upload"
                            multiple onchange="readImagesAndPreview(this.files);" data-buttonName="btn-primary">
                          </div>
                           <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                              <button type="submit" name="mphoto" value=" " class="btn btn-default">
                                  upload
                             </button>
                           </div>
                      </div>
                    </form>
                  </div>

                  <div class="tab-pane fade " id="video">
                    <form method="post" action=" " style="padding-top: 20px;"enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            </br>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            
                            <input type="file" class="filestyle" id="files" name="photos_upload[]" id="iupload" title="upload"
                            multiple onchange="readImagesAndPreview(this.files);" data-buttonName="btn-primary">
                            <h4 style="text-align:center">or</h4>

                            <input type="url" name="video" id="inputVideo" class="form-control" value="" title="" placeholder="Enter url of your video">
                          </div>
                           <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                              <button type="submit" name="mvideo" value=" " class="btn btn-warning" 
                              style="margin-top: 73px; margin-left: 129px;padding-left: 27px; padding-right: 27px;">
                                  upload
                             </button>
                           </div>
                      </div>
                    </form>
                  </div>
                  
              </div>
            </div>
                </br>
                </br>
          </div>
           <?php  $this->load->view('profile_product');  ?>
        </div>
       
            <div class="tab-pane fade " id="iphot" >
            <?php  echo modules::run('profile_page_photos');?>
            </div>
            <div class="tab-pane fade in" id="ivideo">
            <?php  echo modules::run('profile_page_videos');?>
            </div>

    </div><!--tab content ends here-->


  </div><!--main end here-->

<script type='text/javascript'>
$(":file").filestyle({buttonName: "btn-info"});

    $("#form_ajax").submit(function(event) {
      event.preventDefault();
      var $form = $( this ),
      url = $form.attr( 'action' );
      var post_t=document.getElementById("form_ajax").elements.namedItem("post_text").value;
      var posting = $.post( url, { post_text:post_t} );
       posting.done(function( data ) {
        $('#last').prepend('<div class="row post_box">\
          <div class="col-md-3"><br>\
              <img class="img-circle" alt="profile_pic" width="60px" height="60px" src="<?php echo base_url(); ?>/images/profile_pic/<?php echo $_SESSION['username']; ?>.jpg"/>\
          </div>\
          <div class="col-md-20"><br>\
                <div class="row">\
                    <div class="col-md-12">\
                        <h4><?php echo $_SESSION['username'] ?></h4>\
                    </div>\
                    <h5 class="text-right">just now</h5>\
                </div>\
               <div class="row">\
                  <p class="text-justify">'+post_t+'</p>\
              </div>\
          <div class="row">\
            <ul class="list-inline list-images">\
              <li><img src="http://localhost/artphilic/images/flaticon/upload/actor1.png" onclick="change(this)"></li>\
              <li><img src="http://localhost/artphilic/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>\
              <li><img src="http://localhost/artphilic/images/flaticon/upload/director1.png" onclick="change(this)"></li>\
              <li><img src="http://localhost/artphilic/images/flaticon/upload/musician1.png" onclick="change(this)"></li>\
              <li><img src="http://localhost/artphilic/images/flaticon/upload/painter1.png" onclick="change(this)"></li>\
              <li><img src="http://localhost/artphilic/images/flaticon/upload/writer1.png" onclick="change(this)"></li>\
            </ul>\
          </div>\
        </div>\
    </div>\
          ');
      });
    });
</script>
<!-- var Date = new Date();
           var Hrs = Date.getHours();
           var Min = Date.getMinutes();
           var Dat = Date.getDate();
           var Mnth = Date.getMonth();
           var Year = Date.getFullYear();

 <div class="col-xs-24 col-sm-24 col-md-24">
          <div class="col-md-3">
      <br>
        <img src="http://localhost/artphilic/images/profile_pic/'+ posted_by +'.jpg" class="img-circle" alt="profile_pic" width="60px" height="60px" >
      </div>
      <div class="col-md-20">
        <br>
        <div class="row">
          <div class="col-md-12">
            <h4>'+posted_by+'</h4>
          </div>
          <h5 class="text-right">'+dat+'</h5>
        </div>
        <div class="row">
          <p class="text-justify">'+post_text+'</p>
        </div>
        <div class="row">
        <br>
          <ul class="list-inline list-images">
            <li><img src="http://localhost/artphilic/images/flaticon/upload/actor1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/director1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/musician1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/painter1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
          </ul>
        </div>
     </div>
</div> -->