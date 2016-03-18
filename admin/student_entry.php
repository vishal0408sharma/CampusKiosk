<!DOCTYPE html>

<?php

$id="";
$opr="";

if(isset($_GET['operation']))
	$opr=$_GET['operation'];

if(isset($_GET['student_id']))
	$id=$_GET['student_id'];




//--------------add data-----------------	
if(isset($_POST['submit']))
{


$f_name=$_POST['fname'];
	 if (!empty($f_name)) {
     $name = test_input($f_name);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
     <?php  }
     }
	$l_name=$_POST['lname'];
	 if (!empty($l_name)) {
     $name = test_input($l_name);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
     <?php  }
     }
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
	 if((preg_match("/[^0-9]/", '', $contact)) && strlen($contact) == 10)
     { 
     ?>
	 <script> alert("Inavlid phone number");</script>
	 <?php
	 }
	$batch=$_POST['batch'];
	$yoa=$_POST['yoa'];
	$sem=$_POST['sem'];
	$mail=$_POST['mail'];
	  if (!empty($mail)) {
     $email = test_input($mail);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      ?> 
	   <script> alert("Inavlid email format");</script>
	  <?php 
     }
     }
	$caddr=$_POST['caddr'];
	$paddr=$_POST['paddr'];
	$father=$_POST['father'];
	 if (!empty($father)) {
     $name = test_input($father);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
     <?php  }
     }
	$mother=$_POST['mother'];
	 if (!empty($mother)) {
     $name = test_input($mother);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
     <?php  }
     }
	$blood=$_POST['blood'];
	$branch=$_POST['branch'];
	$enroll=$_POST['enroll'];
	$pass=$_POST['pass'];


$sql_ins=mysql_query("INSERT INTO student 
                                                VALUES(		
                                                        '$enroll',                      
							'$pass',
							'$f_name',
							'$l_name',
							'$gender',
							'$dob',
							'$contact',
							'$batch',
							'$yoa',
							'$sem',

							'$mail',
							'$caddr',
							'$paddr',
							'$father',
							'$mother',

							'$blood',
							'$branch'
							)
					");


	$dis=$_POST['disability'];
	$type_dis=$_POST['disability_type'];

	$sql_ins2=mysql_query("INSERT INTO med_info
						VALUES( 
                                                        '$enroll',
							'$dis',
							'$type_dis'
						)
					");


if($sql_ins==true)
	$msg="Student added to the database";
else
	$msg="Insert Error:".mysql_error();

print $msg;


if($sql_ins2==false)
{
	$msg="Insert Error:".mysql_error();
	print $msg;
}

function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

print "\n";
}




//------------------uodate data----------
if(isset($_POST['update']))
{

	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
	$batch=$_POST['batch'];
	$yoa=$_POST['yoa'];
	$sem=$_POST['sem'];
	$mail=$_POST['mail'];
	$caddr=$_POST['caddr'];
	$paddr=$_POST['paddr'];
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	$blood=$_POST['blood'];
	$branch=$_POST['branch'];
	$enroll=$_POST['enroll'];
	$pass=$_POST['pass'];

        $sql_update=mysql_query("UPDATE student SET 
                                                        enroll='$enroll',
							pwd='$pass',
							first_name='$f_name',
							last_name='$l_name',
							gender='$gender',
							dob='$dob',
							mobile_no='$contact',
							batch='$batch',
							date_of_adm='$yoa',
							semester='$sem',
							email='$mail',
							temp_addr='$caddr',
							perm_addr='$paddr',
							fname='$father',
							mname='$mother',
							bld_grp='$blood',
							branch='$branch'
					    	WHERE 
							enroll=$id
						
					");

	$dis=$_POST['disability'];
	$type_dis=$_POST['disability_type'];

	$sql_update2=mysql_query("UPDATE med_info SET 
                                                        student_id='$enroll',
							disability='$dis',
							type_of_dis='$type_dis',

					    	WHERE 
							student_id=$id

						
					");


if($sql_update==true)
		header("location:?tag=students");
else
		$msg="Update Fail".mysql_error();

print $msg;

	if($sql_update2==false)
	{
		$msg="Update Fail".mysql_error();
		print $msg;
	}
}

?>





<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/Student_entry.css">    
</head>
<body>


<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM student WHERE enroll=$id");
	$rs_upd=mysql_fetch_array($sql_upd);

	$sql_upd2=mysql_query("SELECT * FROM med_info WHERE student_id=$id");
	$rs_upd2=mysql_fetch_array($sql_upd2);
	
?>


<!-- for form Upadte-->
 <article>
	<div id="query_title"></div>
	<table>	
	<tr>
	<td>
	Update Student Record
	</td>
	<td>
	<pre>                                                                                             </pre>
	</td>
	<td>
		<form method="post">
            	<a href="?tag=students"><input type="button" name="students_view" value="View Students" id="students_view"/></a>
       		</form>
	</td>
	</tr>
	</table>
    <form method="POST">
      
	 <fieldset>
	 <legend>Personal Information</legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">First Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="fname" placeholder="First Name" value="<?php echo $rs_upd['first_name'];?>" required></div></td>
		 </tr>

		 <tr>
		   <td><div id="formvalue">Last Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="lname" placeholder="Last Name" value="<?php echo $rs_upd['last_name'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Date of Birth:*</div></td>
		   <td><div class="formholder"><input type="date"  name="dob" value="<?php echo $rs_upd['dob'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Gender:</div></td>
		   <td>
		<div class="formholder">
		<input type="radio" name="gender" value="male" <?php if($rs_upd['gender']=="male") echo "checked";?>> Male
                <input type="radio" name="gender" value="female" <?php if($rs_upd['gender']=="female") echo "checked";?>> Female
		</div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Blood Group:</div></td>
		   <td><div class="formholder">
			<select name="blood">
			        <option value="a+">A+</option>
				<option value="a-">A-</option>
				<option value="b+">B+</option>
				<option value="b-">B-</option>
				<option value="o+">O+</option>
				<option value="o-">O-</option>
				<option value="ab+">AB+</option>
				<option value="ab-">AB-</option>
		        </select></div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Father Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="father" value="<?php echo $rs_upd['fname'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Mother Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="mother" value="<?php echo $rs_upd['mname'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Contact:*</div></td>
		   <td><div class="formholder"><input type="number_format"  name="contact" value="<?php echo $rs_upd['mobile_no'];?>" required></div></td>
		 </tr>
                 <tr>
		   <td><div id="formvalue">Permanent Address:*</div></td>
		   <td><div class="formholder"><input type="text"  name="paddr" value="<?php echo $rs_upd['perm_addr'];?>" required></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Current Address:</div></td>
		   <td><div class="formholder"><input type="text"   name="caddr" value="<?php echo $rs_upd['temp_addr'];?>" ></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Email_ID:*</div></td>
		   <td><div class="formholder"><input type="email"  name="mail" value="<?php echo $rs_upd['email'];?>" required></div></td>
		 </tr>
		 </table>
	 </fieldset>
	 

	 <br>
	 
	 <fieldset>
	 <legend>Academic Information</legend>
	     <table>
	     <tr>
		   <td><div id="formvalue">Enrollment No.:*</div></td>
		   <td><div class="formholder"><input name="enroll" type="text" value="<?php echo $rs_upd['enroll'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Password:*</div></td>
		   <td><div class="formholder"><input type="text" name="pass" value="<?php echo $rs_upd['pwd'];?>" required></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Branch:</div></td>
		   <td><div class="formholder">
			<select name="branch">
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
		   <td><div id="formvalue">Batch:</div></td>
		   <td><div class="formholder">
		    <select name="batch">
			        <option value="a1">A1</option>
				<option value="a2">A2</option>
				<option value="a3">A3</option>
				<option value="a4">A4</option>
				<option value="a5">A5</option>
				<option value="a6">A6</option>
				<option value="a7">A7</option>
				<option value="a8">A8</option>
		    </select></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Year of Admission:*</div></td>
		   <td><div class="formholder"><input type="date" name="yoa" value="<?php echo $rs_upd['dob'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Current Semester:</div></td>
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
		 </table>
      </fieldset>


<br>

<fieldset>
	 <legend>Medical History</legend>
	     <table>

		<tr>
		   <td><div id="formvalue">Disability</div></td>
		   <td><div class="formholder"><input type="text" name="disability" value="<?php echo $rs_upd2['disability'];?>"></div></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">Type of Disability</div></td>
		   <td><div class="formholder"><input type="text" name="disability_type" value="<?php echo $rs_upd2['type_of_dis'];?>">
				</div></td>
		 </tr>

	     </table>
</fieldset>

	  <br>
       <div class="formholder">
	   <table>
	<tr>
	<td>
	<a href="?tag=home"> 
	<input type="button" value="Cancel" 	>
	</a>
	</td>
	<td>	 
	<input name="update" type="submit" value="Update record">
	</td>	
	</table>
	</div>
  </form>      
<br><br>
  </article>










<?php	
}

else
{
?>
<!-- for form Register-->








 <article>
	<div id="query_title"></div>
	<table>	
	<tr>
	<td>
	Add New Student
	</td>
	<td>
		<form method="post">
            	<a href="?tag=students"><input type="button" name="students_view" value="View Students" id="students_view"/></a>
       		</form>
	</td>
	</tr>
	</table>
    <form method="POST">
      
	 <fieldset>
	 <legend>Personal Information</legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">First Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="fname" maxlength="20" placeholder="First Name" required></div></td>
		 </tr>

		 <tr>
		   <td><div id="formvalue">Last Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="lname" maxlength="20" placeholder="Last Name" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Date of Birth:*</div></td>
		   <td><div class="formholder"><input type="date"  name="dob" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Gender:</div></td>
		   <td><div class="formholder"><input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female</div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Blood Group:</div></td>
		   <td><div class="formholder">
			<select name="blood">
			        <option value="a+">A+</option>
				<option value="a-">A-</option>
				<option value="b+">B+</option>
				<option value="b-">B-</option>
				<option value="o+">O+</option>
				<option value="o-">O-</option>
				<option value="ab+">AB+</option>
				<option value="ab-">AB-</option>
		        </select></div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Father Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="father" maxlength="20" placeholder="Father Name" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Mother Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="mother" maxlength="20" placeholder="Mother Name" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Contact:*</div></td>
		   <td><div class="formholder"><input type="numbers" maxlength="10" name="contact" required></div></td>
		 </tr>
                 <tr>
		   <td><div id="formvalue">Permanent Address:*</div></td>
		   <td><div class="formholder"><textarea  name="paddr" maxlength="50" required></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Current Address:</div></td>
		   <td><div class="formholder"><textarea  name="caddr" maxlength="50"></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Email_ID:*</div></td>
		   <td><div class="formholder"><input type="email"  name="mail" required></div></td>
		 </tr>
		 </table>
	 </fieldset>
	 
	 <br>
	 
	 <fieldset>
	 <legend>Academic Information</legend>

	     <table>
	     <tr>
		   <td><div id="formvalue">Enrollment No.:*</div></td>
		   <td><div class="formholder"><input name="enroll" type="numbers" maxlength="10" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Password:*</div></td>
		   <td><div class="formholder"><input type="text" name="pass" maxlength="20" required></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Branch:</div></td>
		   <td><div class="formholder">
			<select name="branch">
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
		   <td><div id="formvalue">Batch:</div></td>
		   <td><div class="formholder">
		    <select name="batch">
			        <option value="a1">A1</option>
				<option value="a2">A2</option>
				<option value="a3">A3</option>
				<option value="a4">A4</option>
				<option value="a5">A5</option>
				<option value="a6">A6</option>
				<option value="a7">A7</option>
				<option value="a8">A8</option>
		    </select></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Year of Admission:*</div></td>
		   <td><div class="formholder"><input type="date" name="yoa" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Current Semester:</div></td>
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
		 </table>
      </fieldset>

<br>
<fieldset>
	 <legend>Medical History</legend>
	     <table>

		<tr>
		   <td><div id="formvalue">Disability</div></td>
		   <td><div class="formholder"><input type="text" name="disability" ></div></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">Type of Disability</div></td>
		   <td><div class="formholder"><input type="text" name="disability_type" >
				</div></td>
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
	<input name="submit" type="submit" value="Add Student"> 
	</div>
  </form>      
<br><br>
  </article>



<?php
}

?>

 
</body>
</html>
