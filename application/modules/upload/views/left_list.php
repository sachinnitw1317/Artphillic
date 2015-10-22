 <div class="row">
<div class="col-md-6">
All Your Stuff:<br>
<?php 
$tem=$_SESSION['userid'];
$dbc=mysqli_connect('localhost','root','','galla') or die('error');
$query="SELECT * FROM gallery WHERE artist='$tem'";
$result=mysqli_query($dbc,$query);
define('GALLERY','gallery/');
while($row=mysqli_fetch_assoc($result))
{
	$id=$row['id'];
	$path=GALLERY.$row['artist'].$row['pic'];
	?>

	<div id="show_case"><a href="<?php echo "upload_gallery.php?eid=".$id ?>"><?php
	?><img src="<?php echo $path?>" style="/* height:100px; */width: 90%;"><br><?php
	echo $row['name']."</a>";?></div><?php
}	
 
?><a href="upload_gallery.php">Upload a new art</a>
</div>
<!-- two div are required more for completion-->