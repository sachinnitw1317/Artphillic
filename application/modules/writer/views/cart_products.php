<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="row">
<div class="col-xs-24 col-sm-24 col-md-24"><!--13 columns begin -->
 
  <div class="col-sm-5">
  <img src="<?php echo base_url(); ?>/images/flaticon/details/b_writer.png" style="width:200px;">
  <h3 style="text-align:center;">writer</h3>
    <nav class="nav-sidebar">
    <ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">About</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Highest Rated writers</a></li>
                                       
    </ul>
  </nav>
     
</div>
<!-- tab content -->
<div class="tab-content col-md-18">
<div class="tab-pane active text-style" id="tab1">
  <h3>Courtsey:wikipedia</h3>
       <p>
       A writer is a person who uses written words in various styles and techniques to communicate ideas. Writers produce various forms of literary art and creative writing such as novels, short stories, poetry, plays, screenplays and essays as well as various utilitarian forms such as reports and news articles. Writers' texts are published across a range of media. Skilled writers who are able to use language to express ideas well often contribute significantly to the cultural content of a society. The word is also used elsewhere in the arts – such as songwriter – but as a standalone term, "writer" normally refers to the creation of written language. Some writers work from an oral tradition.

Writers can produce material across a number of genres, fictional or non-fictional. Other writers use multiple media – for example, graphics or illustration – to enhance the communication of their ideas. Another recent demand has been created by civil and government readers for the work of non-fictional technical writers, whose skills create understandable, interpretive documents of a practical or scientific nature. Some writers may use images (drawing, painting, graphics) or multimedia to augment their writing. In rare instances, creative writers are able to communicate their ideas via music as well as words.</p>
       
</div>
<div class="tab-pane text-style" id="tab2">
  <h3>Highest Rated writers</h3>
    
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
              <li><img src="http://localhost/artphilic/images/flaticon/upload/writer1.png" onclick="change(this)"></li>\
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
            <li><img src="http://localhost/artphilic/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/dancer1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/director1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/musician1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/painter1.png" onclick="change(this)"></li>
            <li><img src="http://localhost/artphilic/images/flaticon/upload/writer1.png" onclick="change(this)"></li>
          </ul>
        </div>
     </div>
</div> -->