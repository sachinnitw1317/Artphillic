<?php session_start();
?>
<html>
<head>
	
	<title>Learn</title>
	<link rel="stylesheet" href="practice.css" type="text/css"/>
 <link rel="stylesheet" href="animate.css" type="text/css"/>
  <script type="text/javascript" src="jquery-1.11.3.js"></script>
  <script src="brain2.js"></script>
<link rel="stylesheet" href="style1.css" />
<script src="brain1.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="bootie.css" />
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
 <?php require 'n_header.php';?>
<br><br>
<br><br> 
 
	
 <div id="profile" class="col-lg-12">
<div id="learn_online" class="well col-lg-6">
<div id="text_online">
	Learn Online
	</div>
	<?php 
	$val=0;$ins=0;
	$naz=$nza=$sd=$dur=$ac=$up=$op=$cl=0;
	$query="";
	$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
		define('PHOTO','course/');
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST["cate"])){
			$val=$_POST["cate"];
			$_SESSION["category"]=$val;
			$ins=0;
			$_SESSION["inspire"]=$ins;
		}
		if(isset($_POST["Inspire"]))
		{
			$ins=1;$val=0;
			$_SESSION["category"]=$val;
			$_SESSION["inspire"]=$ins;
		}
	}
		if(isset($_GET["naz"]))
		{
			$naz=1;$nza=0;$sd=0;$dur=0;$ac=0;$up=0;$op=0;$cl=0;
		}
		if(isset($_GET["nza"]))
		{
			$naz=0;$nza=1;$sd=0;$dur=0;$ac=0;$up=0;$op=0;$cl=0;
		}
		if(isset($_GET["sdate"]))
		{
			$naz=0;$nza=0;$sd=1;$dur=0;$ac=0;$up=0;$op=0;$cl=0;
		}
		if(isset($_GET["duration"]))
		{
			$naz=0;$nza=0;$sd=0;$dur=1;$ac=0;$up=0;$op=0;$cl=0;
		}
		if(isset($_GET["active"]))
		{
			$naz=0;$nza=0;$sd=0;$dur=0;$ac=1;$up=0;$op=0;$cl=0;
		}
		if(isset($_GET["upcoming"]))
		{
			$naz=0;$nza=0;$sd=0;$dur=0;$ac=0;$up=1;$op=0;$cl=0;
		}
		if(isset($_GET["open"]))
		{
			$naz=0;$nza=0;$sd=0;$dur=0;$ac=0;$up=0;$op=1;$cl=0;
		}
		if(isset($_GET["closed"]))
		{
			$naz=0;$nza=0;$sd=0;$dur=0;$ac=0;$up=0;$op=0;$cl=1;
		}
		
	if(isset($_SESSION["category"])) $val=$_SESSION["category"];
	if(isset($_SESSION["inspire"])) $ins=$_SESSION["inspire"];
 
 if($naz==1)
{

	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) order by name";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val order by name";
	}
}
else if($nza==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) order by name desc";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val order by name desc";
	}
}
else if($sd==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) order by sdate";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val order by sdate";
	}
}
else if($dur==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) order by ((year*365)+(month*30)+day)";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val order by ((year*365)+(month*30)+day)";
	}
}
else if($ac==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) and sdate<CURDATE() and edate>CURDATE()";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val and sdate<CURDATE() and edate>CURDATE()";
	}
}
else if($up==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) and sdate>CURDATE()";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val and sdate>CURDATE()";
	}
}
else if($op==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) and oc=1";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val and oc=1";
	}
}
else if($cl==1)
{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100) and oc=0";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val and oc=0";
	}
}
else{
	if($val==0&&$ins==1)
	{
		$q="Select max(nostu) from course";
		$r=mysqli_query($dbc,$q) or die('err');
		$v=mysqli_fetch_row($r);

		$query="Select * from course where nostu > ($v[0]-100)";
	}
	else if($val!=0&&$ins==0)
	{
		$query="Select * from course where s1=$val ";
	}
	
}


	?>
<form  id="category" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<select name="cate" onchange="submit()">
<option value="0" name="cat" <?php if($val==0) echo "Selected"?>>Choose a category</option>
<option value="1" name="cat" <?php if($val==1) echo "Selected"?>>Painter</option>
<option value="2" name="cat" <?php if($val==2) echo "Selected"?>>Dancer</option>
<option value="3" name="cat" <?php if($val==3) echo "Selected"?>>Musician</option>
<option value="4" name="cat" <?php if($val==4) echo "Selected"?>>Writer</option>
<option value="5" name="cat" <?php if($val==5) echo "Selected"?>>Director</option>
<option value="6" name="cat" <?php if($val==6) echo "Selected"?>>Actor</option>
</select>

OR
<div id="bulb">
<input type="submit" name="Inspire" value="">
</div>
</form>

<div id="sort">
<form  id="category_sort" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<div id="text_sort">Sort By</div>
<input class="butt" type="submit" name="naz" value="Name(A-Z)">
 <input class="butt" type="submit" name="nza" value="Name(Z-A)">
<input class="butt" type="submit" name="sdate" value="Start Date">
<input class="butt" type="submit" name="duration" value="Duration">
<input class="butt" type="submit" name="active" value="Active ">
<input class="butt" type="submit" name="upcoming" value="Upcoming">
<input class="butt" type="submit" name="open" value="Open">
<input class="butt" type="submit" name="closed" value="Closed">
</form>
</div>
<?php 
if($query=="") echo "\nNo courses matching your requirements, try differnt category. If you are confused you can always try 'Inspire Me'";
else {
$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
	
$result=mysqli_query($dbc,$query) or die('err');
$flag=0;
echo "<table id="."d_table".">";
echo "<tr>";
echo "<td> Course </td>";
echo "<td> Name </td>";
echo "<td> Institute </td>";
echo "<td> Description </td>";
echo "<td> Start Date </td>";
echo "<td> Duration </td>";
echo "</tr>";
	while($row=mysqli_fetch_row($result))
	{
		$flag=1;
		$cid=$row[0];
		$path=PHOTO.$cid.$row[3];
		?><tr>
		<td><img class="photo" class="pic" title="Pic_1" src="<?php echo $path;?>"></td>
		<td><?php echo "<a href = \"course_info.php?cID=".$row[0]."\">".$row[1]."</a>";?> </td>
		<td><?php echo $row[2];?></td>
		<td><?php echo $row[4];?></td>
		<td><?php echo " ".$row[8];?></td>
		<td>
		<?php if($row[15]!=0) echo $row[15]."years  ";
		if($row[16]!=0) echo $row[16]."months  ";
		if($row[17]!=0) echo $row[17]."days";
		echo "</td>";
		 
	}
	echo "</table>";
	
	if($flag==0){
		echo "<div id="."none".">";
		echo "\nNo courses matching your requirements, try differnt category. If you are confused you can always try 'Inspire Me'";
	echo "</div>";}
	
	
		}
		 
?>
</div>
 
<div id="learn_offline"class="well col-lg-6">
<div id="text_offline">
	Learn Offline
	</div>
	<?php
	$vl=0; $c=0;$s=0;$ct=0;
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST["ski"])){
			$vl=$_POST["ski"];
			$_SESSION["value"]=$vl;
		}
		if(isset($_POST["country"])){
			$c=$_POST["country"];
			$_SESSION["country"]=$c;
		}
		if(isset($_POST["state"])){
			$s=$_POST["state"];
			$_SESSION["state"]=$s;
		}
		if(isset($_POST["city"])){
			$ct=$_POST["city"];
			$_SESSION["city"]=$ct;
		}
	}

	?>
<form  id="skill" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<select name="ski" onchange="submit()">
<option value="0" name="sk" <?php if($vl==0) echo "Selected"?>>Choose a category</option>
<option value="1" name="sk" <?php if($vl==1) echo "Selected"?>>Painter</option>
<option value="2" name="sk" <?php if($vl==2) echo "Selected"?>>Dancer</option>
<option value="3" name="sk" <?php if($vl==3) echo "Selected"?>>Musician</option>
<option value="4" name="sk" <?php if($vl==4) echo "Selected"?>>Writer</option>
<option value="5" name="sk" <?php if($vl==5) echo "Selected"?>>Director</option>
<option value="6" name="sk" <?php if($vl==6) echo "Selected"?>>Actor</option>
</select>

<select name="country" onchange="submit()">
<option value="0" name="co" <?php if($c==0) echo "Selected"?> >Choose a country</option>
<?php 
	$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
	$query="Select * From country";
	$result=mysqli_query($dbc,$query)or die('Error querying database');
while($row=mysqli_fetch_row($result)){
?>
<option value="<?php echo $row[0]?>" name="co" <?php if($c==$row[0]) echo "Selected"?>><?php echo $row[1]?></option>
<?php }?>
</select>


<select name="state" onchange="submit()">
<option value="0" name="st" <?php if($s==0) echo "Selected"?> >Choose state</option>
<?php 
$query="Select * From state where cid=$c";
$result=mysqli_query($dbc,$query)or die('Error querying database');
while($row=mysqli_fetch_row($result)){
	?>
<option value="<?php echo $row[0]?>" name="st" <?php if($s==$row[0]) echo "Selected"?>><?php echo $row[2]?></option>
<?php }?>
</select>
 

<select name="city" onchange="submit()">
<option value="0" name="ct" <?php if($ct==0) echo "Selected"?> >Choose a city</option>
<?php 
$query="Select * From city where cid=$c and sid=$s";
$result=mysqli_query($dbc,$query)or die('Error querying database');
while($row=mysqli_fetch_row($result)){
	?>
<option value="<?php echo $row[0]?>" name="ct" <?php if($ct==$row[0]) echo "Selected"?>><?php echo $row[3]?></option>
<?php }?>
</select>
</form>
<div id="sort">
<form  id="category_sort" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<div id="text_sort">Sort By</div>
<input class="butt" type="submit" name="nazoff" value="Name(A-Z)">
<input class="butt" type="submit" name="nzaoff" value="Name(Z-A)"> 
</form>
</div>

<?php 

	if(isset($_SESSION["value"])) $vl=$_SESSION["value"];
	if(isset($_SESSION["country"])) $c=$_SESSION["country"];
	if(isset($_SESSION["state"])) $s=$_SESSION["state"];
	if(isset($_SESSION["city"])) $ct=$_SESSION["city"];


		$dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
		$query="SELECT * FROM tutor_description,tutor where tutor.email=tutor_description.tid and verified='Y'";
		if($vl!=0)
		{
			$query.=" and skill=$vl";
		}
		if($c!=0)
		{
			$query.=" and country=$c";
		}
		if($s!=0)
		{
			$query.=" and state=$s";
			
		}
		if($ct!=0)
		{
			$query.=" and city=$ct";
		}


		if(isset($_GET["nazoff"]))
		{
			$query.=" order by first_name";
		}
		 if(isset($_GET["nzaoff"]))
		{
			$query.=" order by first_name desc";
		}

		$result=mysqli_query($dbc,$query)or die('Error querying dae');
		$row=mysqli_num_rows($result);
		if($row==0) echo 'Sorry no data matched your result. Try refining your search';
		else
		{
			define('TUTOR_PHOTO','tutor/');
			echo "<table id="."d_table".">";
echo "<tr>";
echo "<td> Institute </td>";
echo "<td> Tutor Name </td>";
echo "<td> Insti Name </td>";
  echo "<td> Skill1 </td>";
 echo "<td> Skill2 </td>";
echo "</tr>";
			while($row=mysqli_fetch_row($result))
			{
				//define the path for profile pictures
				$userid=$row[0]; //userid
				$q="Select * from tutor where email='$userid'";
				$r=mysqli_query($dbc,$q) or die('err');
				$rw=mysqli_fetch_row($r);
				if($rw[7]=='default.png') $picpath='default.png';
				else
				$picpath=TUTOR_PHOTO.$userid.$rw[7];
				?>
				<tr>
				<td>
				<img src="<?php echo $picpath;?>" style="height:50px; width:50px;">
				</td>
				<?php
				echo "<td>";
				 echo "<a href = \"tutor.php?userID=".$row[0]."\">".$rw[0]." ".$rw[1]."</a>";
				 echo "</td>";
				echo "<td>". $rw[6]."</td>";
			  echo "<td>".$row[7]."</td>";
			  echo "<td>".$row[8]."</td>";
			  
			  echo "</tr>";
				 ?>
				<?php



			}
			echo "</table>";

			unset($_SESSION["value"]);
			unset($_SESSION["country"]);
			unset($_SESSION["state"]);
			unset($_SESSION["city"]);
		}
	
?>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>