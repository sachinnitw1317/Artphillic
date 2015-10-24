<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
 <div class="container">
 <div class="col-md-24">
  <form class="navbar-form" role="search" style="margin-left: 3%;text-align:center;">
         <div class="input-group">
              <input type="text" class="form-control" placeholder="Find him/her" style="width: 300px; -webkit-transition: width 0.4s; transition: width 0.4s;" onkeyup="sethint(this.value)" name="search">
              <span class="input-group-btn">
           <button class="btn btn-info" type="button"><img src="<?php echo base_url(); ?>images/header/search.png" width="20px" height="18px"></button>
              </span>
            </div><!-- /input-group -->
          <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Find him/her" style="width: 150px;" onkeyup="sethint(this.value)" name="search">
          </div>
          <button type="submit"><img src="<?php echo base_url(); ?>images/header/dashboard.png"></button> -->
        </form>
        </div>
    <div class="row">
        <div class="col-xs-24 col-sm-12 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-12 col-md-24" style="text-align:center;">
                        <img src="<?php echo base_url(); ?>/images/flaticon/upload/actor1.png" alt="" style="text-align: center;margin: auto;height: 200px;"class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-12 col-md-24">
                        <h4>
                            Bhaumik Patel</h4>
                        <small class="text-right;"><cite>India <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-user"></i>Rating
                            <br />
                            <i class="glyphicon glyphicon-star"></i><a href="http://www.jquery2dotnet.com">Points</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Rating Bar</p>
                       <div class="row">
    
<div class="col-md-8">
<button class="btn btn-success"> +Follow</button>
</div>
<div class="col-md-8">
<button class="btn btn-primary">Profile</button>
</div>
<div class="col-md-8">
<button class="btn btn-info"> Message</button>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xs-24 col-sm-12 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-12 col-md-24" style="text-align:center;">
                        <img src="<?php echo base_url(); ?>/images/flaticon/upload/actor1.png" alt="" style="text-align: center;margin: auto;height: 200px;"class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-12 col-md-24">
                        <h4>
                            Bhaumik Patel</h4>
                        <small class="text-right;"><cite>India <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-user"></i>Rating
                            <br />
                            <i class="glyphicon glyphicon-star"></i><a href="http://www.jquery2dotnet.com">Points</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Rating Bar</p>
                       <div class="row">
    
<div class="col-md-8">
<button class="btn btn-success"> +Follow</button>
</div>
<div class="col-md-8">
<button class="btn btn-primary">Profile</button>
</div>
<div class="col-md-8">
<button class="btn btn-info"> Message</button>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
  <br>
  <!-- <div class="row">
 <?php  echo modules::run('footer');?>
 </div> -->
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