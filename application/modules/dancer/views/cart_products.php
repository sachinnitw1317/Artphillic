<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="row">
<div class="col-xs-24 col-sm-24 col-md-24"><!--13 columns begin -->
 
  <div class="col-sm-5">
  <img src="<?php echo base_url(); ?>/images/flaticon/details/b_dancer.png" style="width:200px;">
  <h3 style="text-align:center;">Dancer</h3>
    <nav class="nav-sidebar">
    <ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">About</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Highest Rated dancers</a></li>
                                       
    </ul>
  </nav>
     
</div>
<!-- tab content -->
<div class="tab-content col-md-18">
<div class="tab-pane active text-style" id="tab1">
  <h3>Courtsey:wikipedia</h3>
       <p>
        An dancer (actress is sometimes used for females; see § Terminology) is a person portraying a character in a dramatic or comic production; he or she performs in film, television, theatre, radio, commercials or music videos.dancer, ὑποκριτής (hypokrites), literally means "one who interprets";an dancer, then, is one who interprets a dramatic character.Method acting is an approach in which the dancer identifies with the portrayed character by recalling emotions or reactions from his or her own life. Presentational acting refers to a relationship between dancer and audience, whether by direct address or indirectly by specific use of language, looks, gestures or other signs indicating that the character or dancer is aware of the audience's presence. In representational acting, "dancers want to make us 'believe' they are the character; they pretend."
       </p>
       
</div>
<div class="tab-pane text-style" id="tab2">
  <h3>Highest Rated dancers</h3>
    
</div>
 
</div>
    
    
</div>
  </div>
 
  <br>
  <div class="row">
 <?php  echo modules::run('footer');?>
 </div>
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
              <li><img src="http://localhost/artphilic/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>\
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
            <li><img src="http://localhost/artphilic/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/director1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/musician1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/painter1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
          </ul>
        </div>
     </div>
</div> -->