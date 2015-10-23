<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="row">
<div class="col-xs-24 col-sm-24 col-md-24"><!--13 columns begin -->
 
  <div class="col-sm-5">
  <img src="<?php echo base_url(); ?>/images/flaticon/details/b_painter.png" style="width:200px;">
  <h3 style="text-align:center;">Painter</h3>
    <nav class="nav-sidebar">
    <ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">About</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Highest Rated Painter</a></li>
                                       
    </ul>
  </nav>
     
</div>
<!-- tab content -->
<div class="tab-content col-sm-18" >
<div class="tab-pane active text-style" id="tab1">
  <h3>Courtsey:wikipedia</h3>
       <p>
       Painting is the practice of applying paint, pigment, color or other medium to a surface (support base). The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, can be used.

In art, the term painting describes both the act and the result of the action. The support for paintings includes such surfaces as walls, paper, canvas, wood, glass, lacquer, clay, leaf, copper and concrete, and the painting may incorporate multiple other materials including sand, clay, paper, plaster, gold leaf, as well as objects.

The term painting is also used outside of art as a common trade among craftsmen and builders.

Painting is a mode of creative expression, and the forms are numerous. Drawing, gesture (as in gestural painting), composition, narration (as in narrative art), or abstraction (as in abstract art), among other aesthetic modes, may serve to manifest the expressive and conceptual intention of the practitioner. Paintings can be naturalistic and representational (as in a still life or landscape painting), photographic, abstract, narrative, symbolistic (as in Symbolist art), emotive (as in Expressionism), or political in nature (as in Artivism).

A portion of the history of painting in both Eastern and Western art is dominated by spiritual motifs and ideas. Examples of this kind of painting range from artwork depicting mythological figures on pottery, to Biblical scenes rendered on the interior walls and ceiling of the Sistine Chapel, to scenes from the life of Buddha or other images of Eastern religious origin.</p>
       
</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Highest Rated Painters</h2>
    
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