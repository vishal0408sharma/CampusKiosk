<!DOCTYPE html>
<?php
   session_start();
	if(isset($_GET["logout"]))
	{
		unset($_SESSION["enroll"]);
		header("Location: ../login.php");
	}

	if(!isset($_SESSION["enroll"]))
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

<title>Profile-<?php 
$enr=$_SESSION["enroll"];
$query = "SELECT * FROM student where enroll='$enr'";
$response = mysql_query($query);
$row = mysql_fetch_array($response);
		echo $row['first_name']. $row['last_name'];

?></title>


<link rel="stylesheet" type="text/css" href="../css/s_css/student.css" />
<link rel="stylesheet" type="text/css" href="../css/s_css/student_right.css" />

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

			   <a href="#">Personal Info</a>
                <ul class="sub-menu">
                    <li><a href="?tag=getdetails">Personal Details</a></li>
                    <li><a href="?tag=editdetails">Edit Info.</a></li>
                    <li><a href="?tag=med">Medical History</a></li>
                    <li><a href="?tag=fee">Fees History</a></li>
                </ul>
				</li>
				
		<li class="dropdown">

			   <a href="#">Messaging</a>
                <ul class="sub-menu">
                    <li><a href="?tag=createmsg">Compose</a></li>
                    <li><a href="?tag=showmsg">Inbox</a></li>
                </ul>
				</li>
				
            <li class="dropdown">
			   <a href="#">Academics</a>
                <ul class="sub-menu">
                   <li><a href="?tag=getatn">My Attendance</a></li>
					<li><a href="?tag=gettmarks">Theory Marks</a></li>
					<li><a href="?tag=getlmarks">Lab Marks</a></li>
					<li><a href="?tag=gettt">View Your Timetable</a></li>
                </ul>
            </li>
			
            
		

	 </ul>
	</nav>


<div id="leftmenu">
<section> 
  <aside id="side_links">
     <ul>
		   ]<li><a href="?tag=home">Home</a></li>		   
		   <li><a href="?tag=createmsg">Send Message</a></li>
		   <li><a href="?tag=showmsg">Notifications</a></li>
		   <li><a href="?tag=password">Change Password</a></li>
		   <li><a href="?logout=logout">Logout</a></li>
    </ul>
  
  </aside>

  </section>
</div>


<div id="rightmenu">

   	<?php

			if($tag=="home" or $tag=="")
			    include("default.php");

                        if($tag=="editdetails")
                            include("s_editdetails.php");
						
						elseif($tag=="getdetails")
                            include("s_getdetails.php");
						elseif($tag=="gettmarks")
                            include("s_gettmarks.php");
							elseif($tag=="getlmarks")
                            include("s_getlmarks.php");
							elseif($tag=="gettt")
                            include("s_gettt.php");
							
							elseif($tag=="password")
                            include("password.php");
						
                        elseif($tag=="getatn")
                            include("s_getatn.php");
						elseif($tag=="med")
                            include("s_getmed.php");
						elseif($tag=="fee")
                            include("s_getfee.php");
						
						elseif($tag=="createmsg")
                            include("../msg/form.php");
						
						elseif($tag=="showmsg")
                            include("../msg/showform.php");

                        
									
        ?>
	    </div> <!--end of rightmenu -->


</body>
</html>
