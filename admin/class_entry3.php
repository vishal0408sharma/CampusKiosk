<!DOCTYPE html>

<?php
	$course_id=$_GET['course_id'];
	$teacher_id=$_GET['teacher_id'];

if(isset($_POST['submit']))
{
	$venue=$_POST['venue'];
	$time=$_POST['time'];
	$day=$_POST['day'];
	$batch=$_POST['batch'];
	$sem=$_POST['sem'];
	
$sql_ins=mysql_query("INSERT INTO timetable
						VALUES(
							'$course_id',							
							'$teacher_id',
							'$venue',							
							'$time',
							'$day',
							'$batch',
							'$sem'
                             )
					");
if($sql_ins==true)
{
	$msg="1 Row Inserted";
	header("Location: ?tag=classes");
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
<h2><center>Add new Class</center></h2>
	<div id="query_title"></div>
	<table>	
	<tr>
	<td>
	Add new class
	</td>
	<td>
	<pre>                                                                                       </pre>
	</td>
	<td>
		<form method="post">
            	<a href="?tag=classes"><input type="button" name="classes_view" value="View all classes" id="classes_view"/></a>
       		</form>
	</td>
	</tr>
	</table>

    <form method="POST">
      
	 <fieldset>
	 <legend>class details</legend>
		 <table>
		<tr>
		   <td><div id="formvalue">Course Id*</td>
		   <td><div class="formholder"> <?php echo $course_id;?> </div></td>
		 </tr>
		
		<tr>
		   <td><div id="formvalue">Teacher Id*</td>
		   <td><div class="formholder"> <?php echo $teacher_id;?> </div></td>
		 </tr>
		
		 <tr>
		   <td><div id="formvalue">Venue*</td>
		   <td><div class="formholder"><input type="text"  name="venue" required>*</div></td>
		 </tr>
		
		<tr>
		   <td><div id="formvalue">Time*</td>
		   <td><div class="formholder"><input type="time"  name="time" required>*</div></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">Day</div></td>
		   <td><div class="formholder">
			<select name="day">
	        		<option value="1">Monday</option>
				<option value="2">Tuesday</option>
				<option value="3">Wednesday</option>
				<option value="4">Thursday</option>
				<option value="5">Friday</option>
				<option value="6">Saturday</option>
	          </select></div></td>
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
	<input name="submit" type="submit" value="Add Class">
	</td>	
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>


