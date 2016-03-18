<!DOCTYPE html>
<?php
   session_start();
	if(isset($_GET["logout"]))
	{
		unset($_SESSION["iamin"]);
		header("Location: ../login.php");
	}

	if(!isset($_SESSION["iamin"]))
	{
		header("Location: ../login.php");
	}

	require("../database/dbconnection.php");

	$tag="home";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>





<html lang="en">

<head>


<meta charset="utf-8" />
<title>Faculty - <?php 
$id=$_SESSION["id"];
$query = "SELECT * FROM teacher where id='$id'";
$response = mysql_query($query);

$row = mysql_fetch_array($response);
		echo $row['first_name'] .' '. $row['last_name'];

?></title>

<link rel="stylesheet" type="text/css" href="../css/f_css/faculty.css" />
<link rel="stylesheet" type="text/css" href="../css/f_css/faculty_right.css" />
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/x.x.x/jquery.min.js"></script>
  
	
	<script type="text/javascript" src="../msg/table.js"></script><link rel="stylesheet" type="text/css" href="../msg/table.css" media="all">
	
	
<script src="../js/dropdown.js"></script>
<script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    });
</script>

</head>

<body>

<div id="wrapper">

<header>
  <div class="title">
      <h2>KALAM INSTITUTE OF ENGINEERING AND TECHNOLOGY</h2>
   </div>    

</header>  
	<nav>
	    <ul class="content clearfix">
		
		<li> <a href="?tag=home">Home</a> </li>

		<li class="dropdown">

		<li class="dropdown">
			   <a href="#">Personal Info</a>
                <ul class="sub-menu">
                    <li><a href="?tag=f_getdetails">Personal Details</a></li>
                    <li><a href="?tag=f_editdetails">Edit Info.</a></li>
                 
                </ul>
				</li>
				
				
		<li class="dropdown">
			   <a href="#">Attendance</a>
                <ul class="sub-menu">
                    <li><a href="?tag=markatn">Mark Attendance</a></li>
                    <li><a href="?tag=editatn">Edit attendance.</a></li>
                 
                </ul>
				</li>
				
		<li class="dropdown">
			   <a href="#">Marks</a>
                <ul class="sub-menu">
                    <li><a href="?tag=addmarks">Add Marks</a></li>
                    <li><a href="?tag=editmarks">Edit Marks.</a></li>
                 
                </ul>
				</li>
				
					
		<li class="dropdown">

			   <a href="#">Messaging</a>
                <ul class="sub-menu">
                    <li><a href="?tag=createmsg">Compose</a></li>
                    <li><a href="?tag=showmsg">Inbox</a></li>
                </ul>
				</li>
				
            

		<li id="enroll"><!?php echo "Welcome ".$_SESSION["username"]; ?> </li>
	    </ul>
	</nav>

   </div>
</header>






<div id="leftmenu">
<section> 
  <aside id="side_links">
    <ul>
		   <li><a href="?tag=notices">Notices</a></li>
		   <li><a href="?tag=password">Change Password</a></li>
		   <li><a href="?tag=settings">Settings</a></li>
		   <li><a href="?logout=logout">Logout</a></li>
    </ul>
  
  </aside>

  </section>
</div>
</div><!--end of leftmenu -->



<div id="rightmenu">

   	<?php

		if($tag=="home" or $tag=="")
			    include("default.php");

                        if($tag=="f_editdetails")
                            include("f_editdetails.php");
						
						elseif($tag=="f_getdetails")
                            include("f_getdetails.php");
						
                        elseif($tag=="markatn")
                            include("f_markatn.php");
						
                        elseif($tag=="editatn")
                            include("f_editatn.php");

							elseif($tag=="createmsg")
                            include("../msg/form.php");
						
						elseif($tag=="showmsg")
                            include("../msg/showform.php");
							
						elseif($tag=="addmarks")
                            include("f_addmark.php");
							
						elseif($tag=="editmarks")
                            include("f_editmark.php");
									
        ?>
	    </div> <!--end of rightmenu -->




</div>  <!--endl of wrapper -->

</body>
</html>



<?php

//Messaging

$id=$_SESSION["id"];
if($_SESSION['sms']=='no'){
$i=7;
while($i--)
{

$g='-';
$g.=$i;
$g.=' Days';

$d=strtotime($g);
//echo date("Y-m-d", $d).'</br>';
$ddt = date('D', strtotime(date("Y-m-d", $d)));
$dtt = date('Y-m-d', strtotime(date("Y-m-d", $d)));
$day=chkday($ddt);
//echo $day;


$query1 = "Select * from timetable 
			join teacher where teacher_id=id and teacher_id='$id' and day='$day'";/*"SELECT enroll,batch,first_name,last_name,t2.course_id as csid FROM student
	JOIN crs_teach_stud as t1 
	JOIN course as t2 
ON t1.teacher_id='$id'  and t2.course_id=t1.course_id and t2.course_name LIKE '%{$s_name}' and student.batch LIKE '%{$btch}'";
*/

$response1 = mysql_query($query1) or die(mysql_error());;		
while($row1 = mysql_fetch_array($response1))
{
	$mobb=$row1['mobile_no'];
	$r1=$dtt;
	$r2=$row1['time'];	
	$r3=$row1['course_id'];
	$r4=$row1['batch'];
	$tempqrr="SELECT COUNT(*) as cnt FROM attendance
					JOIN student as t2
					 where student_id=t2.enroll and date='$r1' and time='$r2' and course_id='$r3' and t2.batch='$r4'";

$res = mysql_query($tempqrr) or die(mysql_error());;
$rww=mysql_fetch_array($res);
if($rww['cnt']==0)
{

$mmss='You have not submitted attendance of batch='.$r4.' date='.$r1.' time='.$r2.' and course_id='.$r3;
?> <form method="POST" action="sendsms.php"  target="_blank" id="smsform">
      <input type="hidden" name="uid" value="9717694417" /> 
      <input type="hidden" name="pwd" value="bhaikapassword" /> 
      <input type="hidden" name="phone" value="<?php echo $mobb;?>" /> 
      <input type="hidden" name="msg" value="<?php echo $mmss;?>" />
	  <script type="text/javascript">
    document.getElementById('smsform').submit(); submit();
	alert('ddd');
  </script> <?php
}

}



}
$_SESSION['sms']='done';
}

function chkday($today)
{
$day=8;
switch($today)
{
	case 'Mon':{$day=1;break;}
	case 'Tue':{$day=2;break;}
	case 'Wed':{$day=3;break;}
	case 'Thu':{$day=4;break;}
	case 'Fri':{$day=5;break;}
	case 'Sat':{$day=6;break;}
	case 'Sun':{$day=7;break;}
}
return $day;
}



?>
