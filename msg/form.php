<!doctype html>
<?php
if( $_SESSION["whoami"]=='student')
	{
$enr=$_SESSION["enroll"];
}
else if( $_SESSION["whoami"]=='teacher')
	{
	$enr=$_SESSION["id"];
	}
else if( $_SESSION["whoami"]=='admin')
	{
	$enr=$_SESSION["id"];
	}
if(isset($_POST['submit']))
{
	$mem=$_POST['mem'];
	$to=$_POST['to'];
	$bcc=$_POST['bcc'];
	$cc=$_POST['cc'];
	$sub=$_POST['sub'];
	$msg=$_POST['message'];
	if($mem=='teacher')
	{$query = "Insert into msg_teacher(sender_id, sender_type, receiver_id, receiver_cc_id, receiver_bcc_id, subject, msg ) values ('$enr','s','$to','$cc','$bcc','$sub','$msg') ";}
	else if($mem=='student')
	{$query = "Insert into msg_student(sender_id, sender_type, receiver_id, receiver_cc_id, receiver_bcc_id, subject, msg ) values ('$enr','s','$to','$cc','$bcc','$sub','$msg') ";}
	else
	{$query = "Insert into msg_admin(sender_id, sender_type, receiver_id, receiver_cc_id, receiver_bcc_id, subject, msg ) values ('$enr','s','$to','$cc','$bcc','$sub','$msg') ";}
	
	$response = mysql_query($query);
	if($response==true)
	{
	
	?>
	<legend><h1 font size: 20px
font face="sans-Serif" >Message to <?php echo $mem?> Sent</div></legend><?php
} 
else 
{
	echo "Couldn't issue database query<br />";
}
}
else{
?>

<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

</head>
<body>
  <article>
	
 <form method="POST">
      
	 <fieldset>
	 <legend><div id="myhd">Create an email</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">TO:*</div></td>
		   <td><div class="formholder" >
				  <select name="mem" id="selectionType">
                  <option value="admin" selected>Admin</option>
                  <option value="teacher">Faculty</option>
                  <option value="student" >Student</option>
                  </select></div></td>
		   <td><div class="formholder"><input type="text"  name="to" placeholder="Reciever's Id" required></div></td>
		 </tr>

		 <tr>
		   <td><div id="formvalue">BCC:*</div></td>
		   <td><div class="formholder"><input type="text"  name="bcc" placeholder="BCC's id" ></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">CC:*</div></td>
		   <td><div class="formholder"><input type="text"  name="cc" placeholder="CC's id" ></div></td>
		 </tr>
		 
		 <tr>
		   <td><div id="formvalue">Sub:*</div></td>
		   <td><div class="formholder"><input type="text"  name="sub" placeholder="Subject" required></div></td>
		 </tr>
		 
		 <tr>
		   <td><div id="formvalue">Message:*</div></td>
		   <td><div class="formholder" ><textarea  name="message" required></textarea></div>
		 </tr>
		 
		 
		 </table>
      </fieldset>
	  <br>
       
	   
	   <div class="formholder">
	   
	   <table>
	<tr>
	<td>
		<a href="?tag=home"> 
		<input type="button" value="Cancel" >
		</a>
	</td>
	
	<td>	 
	<input name="submit" type="submit" value="Click to send">
	</td>	
	</tr>
	</table>
	</div>
	
  </form> 
  </article>
</body>
</html>
<?php
}?>
 