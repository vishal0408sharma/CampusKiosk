<!DOCTYPE html>

<?php
	$student_id=$_GET['student_id'];

if(isset($_POST['submit']))
{
	$receipt_no=$_POST['receipt_no'];
	$sem=$_POST['sem'];
	$amount=$_POST['amount'];


$sql_ins=mysql_query("INSERT INTO fee
						VALUES(							
							'$student_id',
							'$receipt_no',
							'$sem',
							'$amount'
                             )
					");
if($sql_ins==true)
{
	$msg="1 Row Inserted";
	header("Location: ?tag=fee");
}
else
	$msg="Insert Error:".mysql_error();

print $msg;
}


?>


<html lang="en">

<head>


<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/Student_entry.css">    

</head>

<body>

  <article>
<h2><center>Add new Fee record - Enter fee details</center></h2>
	<div id="query_title"></div>
	<table>	
	<tr>
	
	<td>
	<pre>                                                                                       </pre>
	</td>
	<td>
		<form method="post">
            	<a href="?tag=fee"><input type="button" name="fee_view" value="View Fee details" id="fee_view"/></a>
       		</form>
	</td>
	</tr>
	</table>

    <form method="POST">
      
	 <fieldset>
	 <legend>Fee details</legend>
		 <table>
		<tr>
		   <td><div id="formvalue">Student Id*</td>
		   <td><div class="formholder"> <?php echo $student_id;?> </div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Receipt No*</td>
		   <td><div class="formholder"><input type="text"  name="receipt_no" required>*</div></td>
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
		   <td><div id="formvalue">Amount:</td>
		   <td><div class="formholder"><input type="text"  name="amount"></div>
		   </td>
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
	<input name="submit" type="submit" value="Add Fee">
	</td>	
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>


