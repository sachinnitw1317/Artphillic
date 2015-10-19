	<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
<div class="col-xs-24 col-sm-24 col-md-13">
<div id="main">
 
    <div class="card hovercard">
        <div class="card-background">

    <img id="photo" title="" src="<?php echo base_url(); ?>/images/logo.png" />
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
          <a href="<?php echo base_url(); ?>/images/logo.png" title="Name" data-gallery>
            <img alt="" src="<?php echo base_url(); ?>/images/logo.png" style="width:60px;" ></a>
        </div>
        <div class="card-info"> <span class="card-title"></span>

        </div>
    </div>
    <div id="bout">
   <ul class="nav nav-tabs nav-justified" style="
    width: 100%;
    margin: auto;
">
 <li class="active"><a href="#tab1" data-toggle="tab">Ratings</a></li>
    <li ><a href="#tab2" data-toggle="tab">Personal</a></li>
  <li ><a href="#tab3" data-toggle="tab">Points</a></li>
   
 </ul>
        <div style="min-height:100px;">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3>
      </h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3> </h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
         <img src="8.png">:<span id="c1"> </span> 
          <img src="9.png">:<span id="c2"> </span> 
        
          <img src="10.png">:<span id="c3"> </span> 
        
         <img src="11.png">:<span id="c4"> </span> 
     
          <img src="12.png">:<span id="c5"> </span> 
        
           <img src="13.png">:<span id="c6"> </span> 
         
        </div>
      </div>
    </div>
    </div>
    
     <ul class="nav nav-justified nav-pills">
 <li class="active"><a href="#ifeed" data-toggle="tab">Posts</a></li>
    <li ><a href="#iphot" data-toggle="tab">Photos</a></li>
  <li ><a href="#ivideo" data-toggle="tab">Videos</a></li>
   
 </ul>
<!--post feed-->
<div class="tab-content">
 <div class="tab-pane fade in active" id="ifeed" >

<div id="b_right">
  <ul class="nav nav-tabs" style="
    width: 100%;
    margin: auto;
">
 <li class="active"><a href="#post" data-toggle="tab" style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/post.png"></a></li>
    <li ><a href="#picture" data-toggle="tab"style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/picture.png"></a></li>
  <li ><a href="#video" data-toggle="tab"style="padding: 0px;"><img src="<?php echo base_url(); ?>/images/flaticon/upload/video.png"></a></li>
   
 </ul>
</div>

<div class="tab-content">
  


  <div class="tab-pane fade in active" id="post"> 
<form method="POST">
  <span class="error"> </span></form>
<textarea name="posts" id="fb_post"placeholder="What's going on?" form="upform"></textarea> 
 <button type="submit" style="width: 100%;text-align: right;" value="" form="upform" name="posting"><img src="<?php echo base_url(); ?>/images/flaticon/upload/upload.png"/></button></form>
 </div>

<div class="tab-pane fade in" id="picture">
  <form method="post" action=" " style="padding-top: 50px;margin-left: 33%;" enctype="multipart/form-data">
    <input type="file" id="files" name="photos_upload[]" id="iupload" title="upload" multiple onchange="readImagesAndPreview(this.files);" value="">
    <img id="image" />
     <button type="submit" name="mphoto" id="save_p" value=" "><img src="<?php echo base_url(); ?>/images/flaticon/upload/upload.png"/></button>
    </form>
   </div>

 <div class="tab-pane fade in" id="video">
<form method="post" action=" " style="padding-top: 50px;margin-left: 17%;"enctype="multipart/form-data">
  <input type="url" name="video" placeholder="Enter url of your video" size="50">
    <button type="submit" id="save_v" name="mvideo"><img src="<?php echo base_url(); ?>/images/flaticon/upload/upload.png"/></button>
  </form>
</div>
<?php
$this->load->view('profile_product');
?>
</div>
 
  </div>
 
  <div class="tab-pane fade in" id="iphot" >
 
<div id="pics" >
 

     <span id=" ">
     <div  id="links">
    <a href="  " title="" data-gallery>
    
    <img id="photo" title="" src=" " /></a>
    
    
<div class="row">
      <div class="col-lg-4">Likes: </div>
  

    <div id="poiu" class="col-xs-6">
    <button id=" " onclick="delete_entity(this)"> <img src= "trash.png "/></button>
    </div>

</div>
<div id="show">    
           
                       <div id="painter">
    <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'i','1')" checked="checked" cheched=value="1"><label for=" " title="Painter">.</label>
   </div>
    <div id="dancer"title="Dancer">
  <input type="checkbox" name=" " id=" "  onchange="setcategory(this,'i','2')" checked="checked" cheched=value="2"><label for=" "title="Dancer">.</label>
  </div>
  <div id="musician"title="Musician">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'i','3')" checked="checked"value="3"><label for=" "title="Musician">.</label>
  </div>
  <div id="writer"title="Writer">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'i','4')" checked="checked"value="4"><label for=" " title="Writer">.</label>
  </div>
  <div id="director"title="Director">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'i','5')" checked="checked"value="5"><label for=" "title="Director">.</label>
  </div>
  <div id="actor"title="Actor">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'i','6')" checked="checked"value="6"><label for=" "title="Actor">.</label>
  </div>
   </div>
    </div></span>

  
      
</div>

</div>
<!--video section-->
 <div class="tab-pane fade in" id="ivideo">
  
  
    <span id=" ">
<div id="vidaa">
    <iframe  class="photo" src=" " seamless frameborder="0" allowfullscreen></iframe>
      
      
      <button class="pull right" id=" " onclick="delete_entity(this)"><img src="trash.png"></button></a>

      </p>
     <div id="seedhu">
           
    <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'v','1')" checked="checked" cheched=value="1"><label for=" " title="Painter">.</label>
   </div>
    <div id="dancer"title="Dancer">
  <input type="checkbox" name=" " id=" "  onchange="setcategory(this,'v','2')"checked="checked" cheched=value="2"><label for=" "title="Dancer">Dancer</label>
  </div>
  <div id="musician"title="Musician">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'v','3')" checked="checked"value="3"><label for=" "title="Musician">Musician</label>
  </div>
  <div id="writer"title="Writer">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'v','4')" checked="checked"value="4"><label for=" "> Writer</label>
  </div>
  <div id="director"title="Director">
  <input type="checkbox" name=" " id=" "   onchange="setcategory(this,'v','5')" checked="checked"value="5"><label for=" "title="Director">Director </label>
  </div>
  <div id="actor"title="Actor">
  <input type="checkbox" name=" " id="  "  onchange="setcategory(this,'v','6')" checked="checked"value="6"><label for=" "title="Actor">Actor</label>
   </div>
  </div></span>

 
  

</div>
</div>
</div></div>