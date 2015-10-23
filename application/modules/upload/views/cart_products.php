<div class="col-md-18" style="border-left:1px solid black;"> 




<?php

  if(isset($_POST['save']))
  {
    $id=$_SESSION['eid'];
    $name=$_POST['name'];
    $uniq=$_POST['uniq'];
    $price=$_POST['price'];
    $cat=$_POST['cat'];
    $abta=$_POST['abtauth'];
    $abtar=$_POST['abtart'];
    $query="UPDATE gallery SET name='$name',price=$price,about='$abta',uniq=$uniq,content='$abtar',category=$cat";
    $result=mysqli_query($dbc,$query);
  }
  else if(isset($_POST['upload']))
  {

    define('GALLERY_UP','C:/xampp/htdocs/mydreamshow_2/main/gallery/');

    $err="";
    if(isset($_FILES['profile_upload'])){

      $pname=$_FILES['profile_upload']['name'];
      $type=$_FILES['profile_upload']['type'];
      $size=$_FILES['profile_upload']['size'];
      $temp=$_FILES['profile_upload']['tmp_name'];
      $error=$_FILES['profile_upload']['error'];

      if($type=='image/jpg'||$type=='image/jpeg'||$type=='image/png'||$type=='image/gif'||$type=='image/pjpeg')
      {
        if($error==0)
        {
          if($size>10485760) $err="maximum file size allowed is 10MB";
          else 
          {

          $target=GALLERY_UP.$_SESSION["username"].$pname;
          move_uploaded_file($temp, $target);
          }
        }
      else
      {
        $err="Something went wrong. Try again";
      }
      }
      else
      {
    $err="Only .jpg,.jpeg,.png and .gif files are allowed";
      }

    }
    else
    {
      $err="Upload a picture";
    }

    if($err==""){
      $tem=$_SESSION['userid'];
      $name=$_POST['uname'];
      $uniq=$_POST['uuniq'];
      $price=$_POST['uprice'];
      $cat=$_POST['ucat'];
      $abta=$_POST['uabtauth'];
      $abtar=$_POST['uabtart'];
      $query="INSERT INTO gallery values(0,'$name','$tem',$price,'$abta',0,0,$uniq,'$abtar','$pname',$cat)";
      $result=mysqli_query($dbc,$query);
      $q1="SELECT * FROM follow WHERE fid='$tem'";
      $r1=mysqli_query($dbc,$q1);
      $msg="<a href=\"kart.php\">".$_SESSION['username']." ".$_SESSION['lastname']." added a new item to gallery. <img src=".'gallery/'.$pname." style=\"height:50px;width:50px;\">";
      while($rw=mysqli_fetch_assoc($r1))
      {
        $uid=$rw['userid'];
        $q1="INSERT INTO notification values(0,'$msg','$uid',now(),0,0,0)";
        $r1=mysqli_query($dbc,$q1);
      }
  }
}

if(isset($_GET['eid']))
{
  $id=$_GET['eid'];
  $query="SELECT * FROM gallery WHERE id=$id";
  $result=mysqli_query($dbc,$query);
  $row=mysqli_fetch_assoc($result);
  ?>
<div class="row">
<div class="col-md-12" style="text-align:center;">
  <img src="<?php echo GALLERY.$row['artist'].$row['pic']?>" style="height:300px;width:auto;">
  </div></div><br><br><?php
  if($row['sold']==1){
    echo "SOLD!!!";
  }
  else
  {
    ?><form method="post" name="galform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="gal" >
    
    <div class="col-md-4"> Viewed By:<input type="number" value="<?php echo $row['no_cust']; ?>" disabled></div>
    <div class="col-md-4"> Name<input type="text" name="name" value="<?php echo $row['name']?>"></div>
    <div class="col-md-4"> Uniq  <input type="radio" name="uniq" <?php if($row['uniq']==1) echo "checked";?> value="1">Unique
      <input type="radio" name="uniq" <?php if($row['uniq']==0) echo "checked";?> value="0">Not Unique</div>
    <div class="col-md-6"> Price <input type="number" name="price" value="<?php echo $row['price']?>"> <br>
   Category
    <br><input type="radio" name="cat" <?php if($row['category']==1) echo "checked"?> value="1">History
    <br><input type="radio" name="cat" <?php if($row['category']==2) echo "checked"?> value="2">Portraits
    <br><input type="radio" name="cat" <?php if($row['category']==3) echo "checked"?> value="3">Genre Painting
    <br><input type="radio" name="cat" <?php if($row['category']==4) echo "checked"?> value="4">Landscapes
    <br><input type="radio" name="cat" <?php if($row['category']==5) echo "checked"?> value="5">Still Life</div>
    </form>
    <div class="col-md-6"> 
    About Artist<br><textarea name="abtauth" form="gal" rows="5" cols="40"><?php echo $row['about']?></textarea><<br>
     About The Art<br><textarea name="abtart" form="gal" rows="5" cols="40"><?php echo $row['content']?></textarea><br></div>
    <div class="col-md-12" style="text-align:center;">
    <input type="submit" name="save" value="SAVE" form="gal" style="
    margin-top: 15px;
"></div>
    <?php
  }
}
else
{
  ?>UPLOAD A NEW ENTRY:<br>
  <div class="row">
  <form method="post" name="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="new" enctype="multipart/form-data">
    <div class="col-md-12" style="text-align:center;">
    Upload Picture: 
    <input type="file" id="files"name="profile_upload" value="Choose">
    <img id="image" /><br></div>
    <div class="col-md-6">
    Name<br><input type="text" name="uname" ><br>
    </div>
    <div class="col-md-6">
    Price<br><input type="number" name="uprice" ><br>
    </div>
    <div class="col-md-6">
    Uniq<br><input type="radio" name="uuniq" checked value="1">Unique
      <input type="radio" name="uuniq" value="0">Not Unique<br>
    Category<br>
    <input type="radio" name="ucat"  value="1" checked>History
    <input type="radio" name="ucat" value="2">Portraits
    <input type="radio" name="ucat" value="3">Genre Painting
    <input type="radio" name="ucat"  value="4">Landscapes
    <input type="radio" name="ucat"  value="5">Still Life</div>
    </form>
    <div class="col-md-6">
    About Artist<br><textarea name="uabtauth" form="new" rows="5" cols="40"></textarea><br>
    About The Art<br><textarea name="uabtart" form="new" rows="5" cols="40"></textarea><br>
    </div>
    <div class="col-md-12" style="margin-top:10px; text-align:center;">
    <input type="submit" name="upload" value="UPLOAD" form="new">
    </div></div><?php
}
?></div></div>