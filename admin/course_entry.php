<!DOCTYPE html>

<?php
if(isset($_POST['submit']))
{
	$c_name=$_POST['cname'];
	 if (!empty($c_name)) {
     $name = test_input($c_name);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
     <?php  }
     }
	$c_id=$_POST['cid'];
	$ctype=$_POST['ctype'];
	$department=$_POST['department'];
	$sem=$_POST['sem'];
	$year=$_POST['year'];


$sql_ins=mysql_query("INSERT INTO course
						VALUES(							
							'$c_name',
							'$c_id',
							'$ctype',
							'$department',
							'$sem',
							'$year'
                             )
					");
if($sql_ins==true)
	$msg="1 Row Inserted";
else
	$msg="Insert Error:".mysql_error();

print $msg;
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>


<html lang="en">

<head>


<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/Student_entry.css">    

</head>

<body>

  <article>
	<div id="query_title"></div>
	<table>	
	<tr>
	<td>
	Add New Course
	</td>
	<td>
		<form method="post">
            	<a href="?tag=courses"><input type="button" name="courses_view" value="View courses" id="course_view"/></a>
       		</form>
	</td>
	</tr>
	</table>

    <form method="POST">
      
	 <fieldset>
	 <legend>Course details</legend>
		 <table>
		<tr>
		   <td><div id="formvalue">Course Name:</td>
		   <td><div class="formholder"><input type="text"  name="cname" maxlength="20" placeholder="Course Name" required>*</div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Course ID:</td>
		   <td><div class="formholder"><input type="numbers" maxlength="10"  name="cid" required>*</div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Course Type:</td>
		   <td><div class="formholder"><select name="ctype" required>
	            <option value="th">Theory</option>
		    <option value="pr">Lab</option></div>
			</td>	
		 </tr>
		<tr>
		   <td><div id="formvalue">Department:</div></td>
		   <td><div class="formholder">
			<select name="department">
			        <option value="cse">Computer Science</option>
				<option value="ece">Electronic Communication</option>
				<option value="me">Mechanical</option>
				<option value="ce">Civil Engineering</option>
				<option value="ee">Electrical Engineering</option>
				<option value="bt">Biotechnology</option>
		        </select></div>
		   </td>
		 </tr>	
		<tr>
		   <td><div id="formvalue">Semester:</div></td>
		   <td><div class="formholder">
			<select name="sem">
	        		<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
				<option value="5">V</option>
				<option value="6">VI</option>
				<option value="7">VII</option>
				<option value="8">VIII</option>
	          </select></div></td>
		 </tr>	

		 <tr>
		   <td><div id="formvalue">Year:</td>
		   <td><div class="formholder"><input type="date"  name="year">
	            </div>
		   </td>
		 </tr>		 
		 </table>
	 </fieldset>
	 
	 <br>
	 <div class="formholder1">
	<a href="?tag=home"> 
	<input type="button" value="Cancel">
	</a>
	</div>
	<div class="formholder2">
	<input name="submit" type="submit" value="Add Teacher"> 
	</div>	
  </form>      
<br><br>
  </article>
</body>
</html>


