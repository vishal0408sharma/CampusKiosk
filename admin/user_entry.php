<!DOCTYPE html>

<?php

$id="";
$opr="";

if(isset($_GET['operation']))
	$opr=$_GET['operation'];

if(isset($_GET['id']))
	$id=$_GET['id'];


//--------------add data-----------------	
if(isset($_POST['submit']))
{       
	$u_id=$_POST['uid'];
        $f_name=$_POST['f_name'];
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
	$l_name=$_POST['l_name'];
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
        $type='a';
        $uname=$_POST['uname'];
		if (!empty($uname)) {
     $name = test_input($uname);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
		 ?>
		 <script>
       alert("Only letters and numbers space allowed");
	   </script>
		<?php }}
		
	$pass=$_POST['pass'];



$sql_ins=mysql_query("INSERT INTO admin
                                                VALUES(	
                                                        '$u_id',
                                                        '$f_name',
                                                        '$l_name',
                                                        '$gender',
                                                        '$dob',
                                                        '$contact',
                                                        '$mail',
							'$type',
							'$uname',
							'$pass'
                             )
					");
if($sql_ins==true)
	$msg="1 Row Inserted";
else
	$msg="Insert Error:".mysql_error();

print $msg;
}








//------------------uodate data----------
if(isset($_POST['update']))
{

	$u_id=$_POST['uid'];
        $f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
        $mail=$_POST['mail'];
        $type='a';
        $uname=$_POST['uname'];
	$pass=$_POST['pass'];

        $sql_update=mysql_query("UPDATE admin SET 

							id='$u_id',
                                                        first_name='$f_name',
                                                        last_name='$l_name',
                                                        gender='$gender',
                                                        dob='$dob',
                                                        mobile_number='$contact',
                                                        email='$mail',
							type='$type',
							username='$uname',
							password='$pass'

					    	WHERE 
							id=$id
						
					");

if($sql_update==true)
		header("location:?tag=users");
else
		$msg="Update Fail".mysql_error();

print $msg;

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
	$sql_upd=mysql_query("SELECT * FROM admin WHERE id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	
?>


<!-- for form Upadte-->
 <article>

<div id="query_title"></div>
	<table>	
	<tr>
	<td>
	Update Admin Record
	</td>
	<td>
	<pre>                                                                                                 </pre>
	</td>
	<td>
		<form method="post">
            	<a href="?tag=users"><input type="button" name="admin_view" value="View admins" id="admin_view"/></a>
       		</form>
	</td>
	</tr>
	</table>

    <form method="POST">
      
	 <fieldset>
	 <legend>Admin details</legend>
		 <table>
                    <tr>
		   <td><div id="formvalue">user id:*</div></td>
		   <td><div class="formholder"><input type="text"  name="uid" placeholder="user id"  value="<?php echo $rs_upd['id'];?>"  required></div></td>
		 </tr>

                <tr>
		   <td><div id="formvalue">first name*</div></td>
		   <td><div class="formholder"><input type="text"  name="f_name" placeholder="first name"  value="<?php echo $rs_upd['first_name'];?>" required></div></td>
		 </tr>

                <tr>
		   <td><div id="formvalue">Last name*</div></td>
		   <td><div class="formholder"><input type="text"  name="l_name" placeholder="last name"  value="<?php echo $rs_upd['last_name'];?>" required></div></td>
                 </tr>

		 <tr>
		   <td><div id="formvalue">gender:</td>
                   <td><div class="formholder">
                   <input type="radio" name="gender" value="m" <?php if($rs_upd['gender']=="m") echo "checked";?>> male
                <input type="radio" name="gender" value="f" <?php if($rs_upd['gender']=="f") echo "checked";?>> female</div>

                   </td>

		 <tr>
		   <td><div id="formvalue">date of birth:*</td>
		   <td><div class="formholder"><input type="date"  name="dob"  value="<?php echo $rs_upd['dob'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">contact no. :*</td>
		   <td><div class="formholder"><input type="number_format"  name="contact"  value="<?php echo $rs_upd['mobile_number'];?>" required>*</div></td>
		 </tr>


                 <tr>
		   <td><div id="formvalue">email_id:</td>
		   <td><div class="formholder"><input type="email"  name="mail"  value="<?php echo $rs_upd['email'];?>" required>*</div></td>
		 </tr>


                 <tr>
		   <td><div id="formvalue">Username:*</td>
		   <td><div class="formholder"><input type="text" name="uname"  value="<?php echo $rs_upd['username'];?>" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Password</td>
		   <td><div class="formholder"><input type="text" name="pass"  value="<?php echo $rs_upd['password'];?>" required>*</div></td>
		 </tr>


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
	<input name="update" type="submit" value="Update Record">
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
	Add New Admin
	</td>
	<td>
	<pre>                                                                                                          </pre>
	</td>
	<td>
		<form method="post">
            	<a href="?tag=users"><input type="button" name="admin_view" value="View admins" id="admin_view"/></a>
       		</form>
	</td>
	</tr>
	</table>

    <form method="POST">
      
	 <fieldset>
	 <legend>Admin details</legend>
		 <table>
                    <tr>
		   <td><div id="formvalue">user id:*</div></td>
		   <td><div class="formholder"><input type="text"  name="uid" placeholder="user id" required></div></td>
		 </tr>

                <tr>
		   <td><div id="formvalue">first name*</div></td>
		   <td><div class="formholder"><input type="text"  name="f_name" placeholder="first name" required></div></td>
		 </tr>

                <tr>
		   <td><div id="formvalue">Last name*</div></td>
		   <td><div class="formholder"><input type="text"  name="l_name" placeholder="last name" required></div></td>
                 </tr>

		 <tr>
		   <td><div id="formvalue">gender:</td>
		   <td><div class="formholder"><input type="radio" name="gender" value="m" checked> male
                <input type="radio" name="gender" value="f"> female</div>

                   </td>

		 <tr>
		   <td><div id="formvalue">date of birth:*</td>
		   <td><div class="formholder"><input type="date"  name="dob" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">contact no. :*</td>
		   <td><div class="formholder"><input type="number_format"  name="contact" required>*</div></td>
		 </tr>


                 <tr>
		   <td><div id="formvalue">email_id:</td>
		   <td><div class="formholder"><input type="email"  name="mail" required>*</div></td>
		 </tr>


                 <tr>
		   <td><div id="formvalue">Username:*</td>
		   <td><div class="formholder"><input type="text" name="uname" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Password</td>
		   <td><div class="formholder"><input type="text" name="pass" required>*</div></td>
		 </tr>


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
	<input name="submit" type="submit" value="Add Admin">
	</td>	
	</table>
	</div>
  </form>      
      
<br><br>
  </article>



<?php
}

?>

 
</body>
</html>
