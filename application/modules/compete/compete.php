<?php session_start();
if(isset($_GET["compID"]))
{
	$_SESSION["compete"]=$_GET["compID"];
}
?>
<html>
<head>
 
	<title>Compete</title>
	<link rel="stylesheet" href="profile_page.css" type="text/css"/>
 <link rel="stylesheet" href="animate.css" type="text/css"/>
  <script type="text/javascript" src="jquery-1.11.3.js"></script>
  <script src="brain2.js"></script>
<link rel="stylesheet" href="compete.css" />
<script src="brain1.js"></script>
<link href="./css/fbphotobox.css" rel="stylesheet" type="text/css" />
<script src="./js/fbphotobox.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="bootie.css" />
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php 
	if(isset($_POST["search_user"])&&!empty($_POST["user"]))
	{
		$_SESSION["user_searched"]=$_POST["user"];
		header("Location:search_user.php");
	}
	if(isset($_POST["register"]))
	{

		$comp=$_SESSION['compete'];
		$tem=$_SESSION["userid"];
		$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
		$query="INSERT INTO participant values('$comp','$tem',NULL,NULL) ";
		$result=mysqli_query($dbc,$query)or die('Error querying database');
		//header("Location:competition.php");
	}
	?>

 <?php require 'header.php';?>
<div class="col-md-12" style="text-align:center;margin-top:100px;font-size:16px;">
<?php
$comp=$_SESSION["compete"];
$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
$query="SELECT * FROM compete WHERE compid='$comp' ";
$result=mysqli_query($dbc,$query)or die('Error querying database');
$row=mysqli_fetch_row($result);
?>
<strong>Name:</strong><?php echo $row[1];?><br>
<strong>Description:</strong><?php echo $row[2];?><br>
<strong>Start Date and Time:</strong><?php echo $row[3]."	".$row[13];?><br>
<strong>End Date and Time:</strong><?php echo $row[4]."	".$row[14];?><br>
<strong>Judges:</strong><?php echo $row[5];?><br>
<strong>Prizes:</strong><?php echo $row[6];?><br>
<strong>Category:</strong>
<?php 
switch($row[7])
{
	case 1:{
		echo "Painter";
		break;
	}
	case 2:{
		echo "Dancer";
		break;
	}
	case 3:{
		echo "Musician";
		break;
	}
	case 4:{
		echo "Writer";
		break;
	}
	case 5:{
		echo "Director";
		break;
	}
	case 6:{
		echo "Actor";
		break;
	}
}?><br>
<strong>Organizers:</strong>
<?php
$var=8;
				define('PROFILE_PIC','profile_pic/');
				define('TUTOR','tutor/');
				define('SCOUT','scout/');

while($var<13)
{
	$oid=$row[$var];
	if($oid!=NULL)
	{
		$type=$row[7+$var];
		if($type=='A')
			$q="SELECT * FROM login WHERE email='$oid'";
		else if($type=='T')
			$q="SELECT * FROM tutor WHERE email='$oid'";
		else if($type=='S')
			$q="SELECT * FROM talent_scout WHERE email='$oid'";
	
			$r=mysqli_query($dbc,$q);

			$asd=mysqli_fetch_row($r);

			if($type=='A')
			{
				 echo "<a _blank href = \"other_user.php?userID=".$asd[2]."\">";
				 $uid=$asd[2];
				 $query_hai_be="SELECT * FROM profilepic WHERE userid='$uid'";
				 $result_nhi_lu=mysqli_query($dbc,$query_hai_be);
				 $row_aur_kya=mysqli_num_rows($result_nhi_lu);

				if($row_aur_kya==0) $picpath='default.png'; //if no profile pic haas been uploaded yet
				else 
				{	
					$row_aur_kya=mysqli_fetch_row($result_nhi_lu); //else get the name of the picture
					$uid=$asd[2];
				 
					if($row_aur_kya[1]=="default.png") $picpath='default.png';
					else
					$picpath=PROFILE_PIC.$uid.$row_aur_kya[1]; //the path of the profile pics
				}
			}
			else if($type=='T')
			{ 
				echo "<a _blank href = \"tutor.php?userID=".$asd[2]."\">";
					 //else get the name of the picture
				$uid=$asd[2];
				 
					if($asd[7]=="default.png") $picpath='default.png';
					else
					$picpath=TUTOR.$uid.$asd[7]; //the path of the profile pics
				
			}
			else if($type=='S')
			{
				echo "<a href = \"talent.php?userID=".$asd[2]."\">";
					if($asd[7]=="default.png") $picpath='default.png';
					else
					$picpath=PROFILE_PIC.$uid.$asd[7]; 
			}

				?><img src="<?php echo $picpath;?>" style="height:50px; width:50px;">
				<?php 
				 echo $asd[0]." ".$asd[1]."  "."</a>";
	}
	$var++;
}
?><br><strong>
Submission Type:</strong>
<?php
if($row[20]=='I') echo "Image";
else if($row[20]=='V') echo "Video";
else if($row[20]=='p') echo "Post";
?><br><strong>
Status:</strong>
<?php
$flag=0;
if(date('Y-m-d')>$row[4])
{
	echo "Ended";$flag=0;
	$_SESSION["status"]=0;
}
else if(date('Y-m-d')>$row[3] and date('Y-m-d')<$row[4])
{
	echo "Active";$flag=1;
	$_SESSION["status"]=1;
}
else
{
	echo "Upcoming";$flag=2;

	$_SESSION["status"]=2;
}?><br>

<?php 
if($flag==0)
{
	$_SESSION["ended"]=1;
	echo "The competition has ended, you can still view other people's submissions.";
	?><a href="the_comp.php">View Now</a><?php
}
else if($flag==1 OR $flag==2)
{
	$_SESSION["ended"]=0;
	if(isset($_SESSION["userid"]) and $_SESSION["type"]=='A')
	{
		$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
		$tem=$_SESSION["userid"];
		$query="SELECT * FROM participant WHERE compid='$comp' AND userid='$tem'";
		$result=mysqli_query($dbc,$query)or die('Error querying database');
		$num=mysqli_num_rows($result);
		if($num==0)
		{
			?><form method="POST" id="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="submit" name="register" value="Register"></form>
			<?php 
		}
		else
		{
			echo "<br>"."You are registered"."<br>";
			if($flag==1){?>
			<a href="the_comp.php">Go to competition</a><?php }
			else if($flag==2){
				echo "We'll notify you when the competition starts";
			}
		}
	}
	else 
	{
		?><a href="login.php">Login/SignUp as 'artist' to register</a>
		<?php
	}
}
?>
</body></html>