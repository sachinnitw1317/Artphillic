 <ul id="tab" class="nav nav-justified nav-pills">
 <li class="active"><a href="#a_courses" data-toggle="tab">Applied Courses</a></li>
    <li ><a href="#host" data-toggle="tab">Competition Hosting</a></li>
  <li ><a href="#c_ups" data-toggle="tab">Competition Participated In</a></li>
   
 </ul>
 <div class="tab-content">
 <div class="tab-pane fade in active" id="a_courses" >
 
  <?php 
  echo "<div id="."dashboard".">";
  define('PHOTO','course/');
  $dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
  
if(isset($_SESSION["userid"])){
echo "<div id="."your_course".">";
   
  $tem=$_SESSION["userid"];
  $query="Select * From student where userid='$tem'";
  $result=mysqli_query($dbc,$query)or die('Error querying database');
  echo "<div class="."well col-lg-12"." id="."active_course".">";
  echo "Applied active course"."<br>";
    
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
    $cid=$row[0];
    $query1="Select * From course where courseid='$cid' and sdate<CURDATE() AND edate>CURDATE()";
    $result1=mysqli_query($dbc,$query1) or die ('Error');
    $num=mysqli_num_rows($result1);
    if($num!=0){
      $flag=1;
      $row1=mysqli_fetch_row($result1);
    $path=PHOTO.$row1[3];
    ?>
     
    
     
    <tr>
    <td><img class="photo" class="pic" title="Pic_1" src="<?php echo $path;?>"></td></a>
    <td><?php echo "<a href = \"course_info.php?cID=".$row1[0]."\">".$row1[1]."</a></li>";?></td>
    <td><?php echo $row1[2];?></td>
    <td>
    <?php echo $row1[4];?>
    </td>
    <td>
    <?php echo " ".$row1[8];?>
    </td>
     
    <?php 
     
    echo "<td>";
    if($row1[15]!=0) echo $row1[15]." years";
    if($row1[16]!=0) echo $row1[16]." months";
    if($row1[17]!=0) echo $row1[17]." days";
    echo "</td>";}
  }
  echo "</table>";
  
  if($flag==0){
    echo "<div id="."none".">";
    echo "  No applied ACTIVE courses. Check out some new ones and hone your skills";
  echo "</div>";}

echo "</div>";
  ?> 
  <?php

  $query="Select * From student where userid='$tem'";
  $result=mysqli_query($dbc,$query)or die('Error querying database');
  echo "<div class="."well col-lg-12"." id="."applied_upcoming".">";
  echo "Applied upcoming course"."<br>";
    
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
    $cid=$row[0];
    $query1="Select * From course where courseid='$cid' and sdate>CURDATE()";
    $result1=mysqli_query($dbc,$query1) or die ('Error');
    $num=mysqli_num_rows($result1);
    if($num!=0){

    $flag=1;
      $row1=mysqli_fetch_row($result1);
    $path=PHOTO.$row1[3];
    ?>
    <tr>
    <td><img class="photo" class="pic" title="Pic_1" src="<?php echo $path;?>"></td></a>
    <td><?php echo "<a href = \"course_info.php?cID=".$row1[0]."\">".$row1[1]."</a></li>";?></td>
    <td><?php echo $row1[2];?></td>
    <td><?php echo $row1[4];?></td>
    <td><?php echo " ".$row1[8];?></td>
    <?php 
    
    echo "<td>";
    if($row1[15]!=0) echo $row1[15]." years";
    if($row1[16]!=0) echo $row1[16]." months";
    if($row1[17]!=0) echo $row1[17]." days";
    echo "</td>";
    echo "</tr>";}
  }
  echo "</div>";
  echo "</table>";
  
   
  
  if($flag==0){
    echo "<div id="."none".">";
    echo "  No applied ACTIVE courses. Check out some new ones and hone your skills";
  echo "</div>";
  }
echo "</div>";
echo "</div>";
}
 

 
?>
</div>
</div>
 <div class="tab-pane fade in" id="host" >
<?php 
   
  
  $dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
  
 
   
  $tem=$_SESSION["userid"];
  $query="Select * From compete where organizer1='$tem' or organizer2='$tem' or organizer3='$tem' or organizer4='$tem' or organizer5='$tem'";
  $result=mysqli_query($dbc,$query)or die('Error querying database');
  echo "<div class="."well col-lg-12"." id="."active_course".">";
  echo "Competitions Hosting"."<br>";
    
  $flag=0;
  echo "<table id="."d_table".">";
echo "<tr>";
echo "<td> Name </td>";
echo "<td> Description </td>";
echo "<td> Start Date </td>";
echo "<td> Category </td>";
echo "<td> Other Organizers </td>";
echo "</tr>";
  

  while($row=mysqli_fetch_row($result))
  {
    $flag=1;
    ?><tr>
    <td><?php echo "<a href = \"compete.php?compID=".$row[0]."\">".$row[1]."</a></li>";?></td>
    <td>
    <?php echo $row[2];?>
    </td>
    <td>
    <?php 
    if($row[4]<date('Y-m-d'))
    {
      echo "Competition Ended";
    }
    else
    {
      echo $row[3];
    }
    ?>
    </td>
     <td> <?php 
     switch ($row[7]) {
      case 1:
        echo "Painter";
        break;
      case 2:
        echo "Dancer";
        break;
      case 3:
        echo "Musician";
        break;
      case 4:
        echo "Writer";
        break;
      case 5:
        echo "Director";
        break;
      case 6:
        echo "Actor";
        break;
     }?></td>
     <td><?php
     $ind=8;
     while($ind<13)
     {
      if($row[$ind]!='' and $row[$ind]!=$tem)
      {
        echo $row[$ind]." ";
      }
      $ind++;
     }
     ?></td>

    <?php
  }
  echo "</table>";
  
  if($flag==0){
    echo "<div id="."none".">";
    echo "You have not hosted any competitions";
  echo "</div>";}

 
echo "</div>";
  ?> 
  </div>
   <div class="tab-pane fade in" id="c_ups" >
<?php 
 
  
  $dbc=mysqli_connect('localhost','root','','galla') or die('Error connecting to mysql server');
  
 
   
  $tem=$_SESSION["userid"];
  $query="Select * From participant where userid='$tem'";
  $result=mysqli_query($dbc,$query)or die('Error querying database');
  echo "<div class="."well col-lg-12"." id="."active_course".">";
  echo "Competitions participating in"."<br>";
    
  $flag=0;
  echo "<table id="."d_table".">";
echo "<tr>";
echo "<td> Name </td>";
echo "<td> Start Date </td>";
echo "<td> Category </td>";
echo "<td> Submissions </td>";
echo "<td> Ranking </td>";

echo "</tr>";
  

  while($row=mysqli_fetch_row($result))
  {
    $cid=$row[0];
    $q="SELECT * FROM compete where compid=$cid";
    
    $r=mysqli_query($dbc,$q) or die('err');
    $num=mysqli_num_rows($r);
    if($num!=0){
      $flag=1;
      $row1=mysqli_fetch_row($r);
    ?><tr>
    <td><?php echo "<a href = \"compete.php?compID=".$row[0]."\">".$row1[1]."</a>";?></td>
    <td>
    <?php 
    if($row1[4]<date('Y-m-d'))
    {
      echo "Competition Ended";
    }
    else
    {
      echo $row1[3];
    }
    ?>
    </td>
     <td> <?php 
     switch ($row1[7]) {
      case 1:
        echo "Painter";
        break;
      case 2:
        echo "Dancer";
        break;
      case 3:
        echo "Musician";
        break;
      case 4:
        echo "Writer";
        break;
      case 5:
        echo "Director";
        break;
      case 6:
        echo "Actor";
        break;
     }?></td>
     <td><?php echo "<a href = \"submission.php?compID=".$row[0]."\">"."View Submission"."</a>";?></td>
     <td><?php echo $row[3];?></td>

    <?php
  }}
  echo "</table>";
  
  if($flag==0){
    echo "<div id="."none".">";
    echo "You have not participated in any competition";
  echo "</div>";}

echo "</div>";
  ?> 

 </div>
 </div>