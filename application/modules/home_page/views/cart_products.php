<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="col-xs-24 col-sm-24 col-md-13" style="padding: 20px; padding-top: 0px; padding-right:5px;"><!--13 columns begin -->
  <div id="main"><!--main begin-->
           <?php  $this->load->view('profile_product');  ?>
  </div><!--main end here-->
</div>
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