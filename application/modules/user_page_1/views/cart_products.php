<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="col-xs-24 col-sm-24 col-md-13"><!--13 columns begin -->
  <div id="main"><!--main begin-->
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
    <div class="tab-content"><!--tabs content begin    -->
        <div class="tab-pane fade in active" id="ifeed">
         
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