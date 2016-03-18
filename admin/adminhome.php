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

	$tag="";
	if (isset($_GET['tag']))
            $tag=$_GET['tag'];

        $admin_type=$_SESSION["admintype"];
        $admin_id=$_SESSION["adminid"];
?>


<html lang="en">

<head>


<meta charset="utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
<link rel="stylesheet" type="text/css" href="../css/admin_right.css" />
    
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

		<li class="dropdown">
			   <a href="#">Teacher</a>
			   <ul class="sub-menu">
			<li><a href="?tag=faculty_entry">New Entry</a></li>
			<li><a href="?tag=faculty">View teachers</a></li>
		   </ul>
                </li>
		<li class="dropdown">
			    <a href="#">Student</a>
				<ul class="sub-menu">
			<li><a href="?tag=student_entry">New Entry</a></li>
			<li><a href="?tag=students">View Students</a></li>
		    </ul>
			</li>
		<li class="dropdown">
		   <a href="#">Admins</a>
		   <ul class="sub-menu">
                        <li><a href="?tag=user_info">Personal Information</a></li>

<?php
        if($admin_type=="s")
        {
?> 
			<li><a href="?tag=user_entry">Add Admin</a></li>
                        <li><a href="?tag=users">View Admins</a></li>
<?php
        }
?>
		   </ul>
		</li>
		<li class="dropdown">
			   <a href="#">Courses</a>
			   <ul class="sub-menu">
			<li><a href="?tag=course_entry">New Entry</a></li>
			<li><a href="?tag=courses">View Courses</a></li>
		   </ul>
		</li>

		<li class="dropdown">
			   <a href="#">Fee</a>
			   <ul class="sub-menu">
			<li><a href="?tag=fee_entry">Deposit</a></li>
			<li><a href="?tag=fee">View fee details</a></li>
		   </ul>
		</li>

		<li class="dropdown">
			   <a href="#">Classes</a>
			   <ul class="sub-menu">
			<li><a href="?tag=class_entry">Add Class</a></li>
			<li><a href="?tag=classes">View Classes</a></li>
		   </ul>
		</li>


		<li class="dropdown">
			   <a href="?tag=tagging">Add Students to Course</a>
		</li>
		

	    </ul>
	</nav>


<div id="leftmenu">
<section> 
  <aside id="side_links">
    <ul>
		   <li id="username"><?php echo "Welcome ".$_SESSION["iamin"]; ?> </li>
		   <li><a href="?tag=home">Home</a></li>		   
		   <li><a href="?tag=createmsg">Send Message</a></li>
		   <li><a href="?tag=showmsg">Notifications</a></li>
		   <li><a href="?tag=password">Change Password</a></li>
		   <li><a href="?logout=logout">Logout</a></li>
    </ul>
  
  </aside>

  </section>
</div>
</div><!--end of leftmenu -->







<div id="rightmenu">

   	<?php

			if($tag=="home" or $tag=="")
			    include("admin_content.php");

                        elseif($tag=="students")
                            include("students.php");

                        elseif($tag=="student_entry")
                            include("student_entry.php");

                        elseif($tag=="faculty")
                            include("faculty.php");

                        elseif($tag=="faculty_entry")
                            include("faculty_entry.php");

                         elseif($tag=="user_info")
                            include("user_info.php");

                       elseif($tag=="users")
                            include("users.php");

                        elseif($tag=="user_entry")
                            include("user_entry.php");	

                        elseif($tag=="courses")
                            include("courses.php");
							
			elseif($tag=="course_entry")
                            include("course_entry.php");
			
                        elseif($tag=="password")
                            include("password.php");	

                        elseif($tag=="createmsg")
                            include("../msg/form.php");
						
                        elseif($tag=="showmsg")
                            include("../msg/showform.php");

			elseif($tag=="fee_entry")
                            include("fee_entry.php");
			
			elseif($tag=="fee")
                            include("fee.php");	

			elseif($tag=="class_entry")
                            include("class_entry.php");	

			elseif($tag=="class_entry2")
                            include("class_entry2.php");	

			elseif($tag=="class_entry3")
                            include("class_entry3.php");	

			elseif($tag=="classes")
                            include("classes.php");	

			elseif($tag=="tagging")
                            include("tagging.php");	

			elseif($tag=="tagging2")
                            include("tagging2.php");	

			elseif($tag=="tagging3")
                            include("tagging3.php");	

			elseif($tag=="fee_details")
                            include("fee_details.php");	

					    		
        ?>
	    </div> <!--end of rightmenu -->

</div>  <!--endl of wrapper -->

</body>
</html>
