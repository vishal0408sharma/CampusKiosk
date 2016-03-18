<!DOCTYPE html>

<?php

$id="";
$opr="";

if(isset($_GET['operation']))
	$opr=$_GET['operation'];

if(isset($_GET['faculty_id']))
	$id=$_GET['faculty_id'];




//--------------add data-----------------	
if(isset($_POST['submit']))
{

	$tid=$_POST['tid'];
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
	$doj=$_POST['doj'];
	$taddr=$_POST['taddr'];
	$paddr=$_POST['paddr'];
	$department=$_POST['department'];
		if (!empty($department)) {
     $name = test_input($department);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
		<?php }}
	$specialisation=$_POST['specialisation'];
		if (!empty($specialisation)) {
     $name = test_input($specialisation);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
		<?php }}
	$salary=$_POST['salary'];
	$position=$_POST['position'];
		if (!empty($position)) {
     $name = test_input($position);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and white space allowed");
	   </script>
		<?php
		} }
	$username=$_POST['username'];
		if (!empty($username)) {
     $name = test_input($username);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and numbers space allowed");
	   </script>
		<?php }}
	$pass=$_POST['pass'];    
	
$sql_ins=mysql_query("INSERT INTO teacher

						VALUES(		

							'$tid',

							'".mysql_real_escape_string($f_name)."',

							'".mysql_real_escape_string($l_name)."',

							'$gender',

							'$dob',

							'".mysql_real_escape_string($contact)."',

							'".mysql_real_escape_string($mail)."',

							'$doj',

							'$taddr',
							'$paddr',

							'$department',

							'".mysql_real_escape_string($specialisation)."',

							'".mysql_real_escape_string($salary)."',

							'".mysql_real_escape_string($position)."',

							'".mysql_real_escape_string($username)."',

							'".mysql_real_escape_string($pass)."'

							)

					");
					
if($sql_ins==true)
	$msg="Faculty record inserted";
else
	$msg="Insert Error:".mysql_error();

print $msg;
}




//------------------uodate data----------
if(isset($_POST['update']))
{

	$tid=$_POST['tid'];
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
	$mail=$_POST['mail'];
	$doj=$_POST['doj'];
	$taddr=$_POST['taddr'];
	$paddr=$_POST['paddr'];
	$department=$_POST['department'];
	$specialisation=$_POST['specialisation'];
	$salary=$_POST['salary'];
	$position=$_POST['position'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
    

	$sql_update=mysql_query("UPDATE teacher SET 
							id='$tid',
							first_name='$f_name',
							last_name='$l_name',
							gender='$gender',
							dob='$dob',
							mobile_no='$contact',
							email='$mail',
							joining_date='$doj',
							temp_addr='$taddr',
							perm_addr='$paddr',
							dept='$department',
							specialisations='$specialisation',
							salary='$salary',
							position='$position',
							username='$username',
							password='$pass'
						WHERE 
							id=$id
						
					");

if($sql_update==true)
		header("location:?tag=faculty");
else
		$msg="Update Fail".mysql_error();

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



<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM teacher WHERE id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	
?>


<!-- for form Upadte-->
   <article>
	<div id="query_title"></div>
	<table>	
	<tr>
	<td>
	Update Faculty record
	</td>
	<td>
	<pre>                                                                                        </pre>
	</td>
	<td>
		<form method="post">
            	<a href="?tag=faculty"><input type="button" name="faculty_view" value="View teachers" id="faculty_view"/></a>
       		</form>
	</td>
	</tr>
	</table>
    <form method="POST">
	 
	 <fieldset>
	 <legend>Personal Information</legend>
	   <table>
	     <tr>
		   <td><div id="formvalue">First Name:*</td>
		   <td><div class="formholder"><input type="text"  name="fname" placeholder="First Name" value="<?php echo $rs_upd['first_name'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Last Name:*</td>
		   <td><div class="formholder"><input type="text"  name="lname" placeholder="Last Name"  value="<?php echo $rs_upd['last_name'];?>" ></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Date of Birth:*</td>
		   <td><div class="formholder"><input type="date"  name="dob"  value="<?php echo $rs_upd['dob'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Gender:</td>
		   <td>
		<div class="formholder">
		<input type="radio" name="gender" value="male" <?php if($rs_upd['gender']=="male") echo "checked";?>> Male
                <input type="radio" name="gender" value="female" <?php if($rs_upd['gender']=="female") echo "checked";?>> Female
		</div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Contact NO. :*</td>
		   <td><div class="formholder"><input type="numbers"  name="contact"   value="<?php echo $rs_upd['mobile_no'];?>" required>*</div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Temporary Address:</td>
		   <td><div class="formholder"><textarea  name="taddr"   value="<?php echo $rs_upd['temp_addr'];?>" ></textarea></div>
		 </tr>
		 <tr>
		 <tr>
		   <td><div id="formvalue">Permanaent Address:*</td>
		   <td><div class="formholder"><textarea  name="paddr"   value="<?php echo $rs_upd['perm_addr'];?>" required></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Email_ID:</td>
		   <td><div class="formholder"><input type="email"  name="mail"   value="<?php echo $rs_upd['email'];?>" required>*</div></td>
		 </tr>
		 </table>
	 </fieldset> 

     <fieldset>
	     <legend>Teacher Information</legend>
	     <table>
         <tr>
		   <td><div id="formvalue">Teacher ID:*</td>
		   <td><div class="formholder"><input type="text" name="tid"   value="<?php echo $rs_upd['id'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Username:*</td>
		   <td><div class="formholder"><input type="text" name="username"   value="<?php echo $rs_upd['username'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Password</td>
		   <td><div class="formholder"><input type="text" name="pass"   value="<?php echo $rs_upd['password'];?>" required>*</div></td>
		 </tr>
		   <td><div id="formvalue">Date of Joining</td>
		   <td><div class="formholder"><input type="date" name="doj"   value="<?php echo $rs_upd['joining_date'];?>" required>*</div></td>
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
		   <td><div id="formvalue">Position*</td>
		   <td><div class="formholder"><input type="text" name="position"   value="<?php echo $rs_upd['position'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Salary*</td>
		   <td><div class="formholder"><input type="numbers" name="salary"   value="<?php echo $rs_upd['salary'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Specialisation*</td>
		   <td><div class="formholder"><input type="text" name="specialisation"   value="<?php echo $rs_upd['specialisations'];?>" required></div></td>
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
	<input name="update" type="submit" value="update faculty record">
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
	Add New Faculty
	</td>
	<td>
		<form method="post">
            	<a href="?tag=faculty"><input type="button" name="faculty_view" value="View teachers" id="faculty_view"/></a>
       		</form>
	</td>
	</tr>
	</table>
    <form method="POST">
	 
	 <fieldset>
	 <legend>Personal Information</legend>
	   <table>
	     <tr>
		   <td><div id="formvalue">First Name:*</td>
		   <td><div class="formholder"><input type="text"  name="fname" maxlength="20" placeholder="First Name" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Last Name:*</td>
		   <td><div class="formholder"><input type="text"  name="lname" maxlength="20" placeholder="Last Name" ></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Date of Birth:*</td>
		   <td><div class="formholder"><input type="date"  name="dob" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Gender:</td>
		   <td><div class="formholder"><input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female</div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Contact NO. :*</td>
		   <td><div class="formholder"><input type="numbers"  name="contact" maxlength="10" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Temporary Address:</td>
		   <td><div class="formholder"><textarea  name="taddr" maxlength="50" ></textarea></div>
		 </tr>
		 <tr>
		 <tr>
		   <td><div id="formvalue">Permanaent Address:*</td>
		   <td><div class="formholder"><textarea  name="paddr" maxlength="50" required></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Email_ID:</td>
		   <td><div class="formholder"><input type="email"  name="mail" required>*</div></td>
		 </tr>
		 </table>
	 </fieldset> 

     <fieldset>
	     <legend>Teacher Information</legend>
	     <table>
         <tr>
		   <td><div id="formvalue">Teacher ID:*</td>
		   <td><div class="formholder"><input type="text" name="tid" maxlength="10" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Username:*</td>
		   <td><div class="formholder"><input type="text" name="username" maxlength="20" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Password</td>
		   <td><div class="formholder"><input type="text" name="pass" maxlength="20" required>*</div></td>
		 </tr>
		   <td><div id="formvalue">Date of Joining</td>
		   <td><div class="formholder"><input type="date" name="doj" required>*</div></td>
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
		   <td><div id="formvalue">Position*</td>
		   <td><div class="formholder"><input type="text" name="position" maxlength="20" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Salary*</td>
		   <td><div class="formholder"><input type="numbers" name="salary" maxlength="8" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Specialisation*</td>
		   <td><div class="formholder"><input type="text" name="specialisation" maxlength="20" required></div></td>
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
 


<?php
}

?>

 
</body>
</html>
