<!doctype html>
<?php

if(isset($_POST['submit']) || isset($_POST['view_attendance']))
{
		/*if(empty($s_name))
		$sname="%";
		if(empty($atnval))
		$atnval="%";
		if(empty($doa))
		$doa="%";*/
		
		$atnval="";
		$s_name="";
		$doa="";
	if(isset($_POST['atnval'])){
		$atnval=$_POST['atnval'];}
		
		
	if(isset($_POST['sname'])){
		$s_name=$_POST['sname'];}
		
		
	if(isset($_POST['doa'])){
		
		$doa=$_POST['doa'];}
		
		
		$enr=$_SESSION["enroll"];
		

		
	$query = "SELECT * FROM attendance JOIN crs_teach_stud as t1 JOIN course as t2 Join teacher as t3 
ON t1.student_id='$enr'  and t2.course_id=t1.course_id and t2.course_name LIKE '%{$s_name}' and attendance.attendance LIKE '%{$atnval}' AND attendance.date LIKE '%{$doa}'";
	
	$response = mysql_query($query);
	if($response==true)
	{
		?>
		<table class="example table-autosort:0 " id="TABLE_4"   align="left"  border="0" cellpadding="0" cellspacing="0">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh"><b>Subject Name</b></div></th>
		<th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh"><b>Teacher\'s Name</b></div></th>
		<th class="filterable table-sortable:default table-sortable" title="Click to sort" align="left"><div id="dispinfoh"><b>Date and Time</b></div></th>
		<th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh"><b>Attendance</b></div></th></tr>
		
		<tr>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th></a>
	</tr>

		
		</thead>
		
		
		<?php
			while($row = mysql_fetch_array($response))
			{
			
	$que = "SELECT course_name FROM course where course_id='$row[course_id]'";
	$coursename = mysql_fetch_array(mysql_query($que));


	$qqq = "SELECT teacher.first_name,teacher.last_name  From teacher Left JOIN crs_teach_stud ON teacher.id=crs_teach_stud.teacher_id where `crs_teach_stud`.`course_id`='$row[course_id]'";
	$tname = mysql_fetch_array(mysql_query($qqq));


				echo '<tr><td align="left"><div id="dispinfo">' . 
				$coursename['course_name'] . '</div></td><td align="left"><div id="dispinfo">' . 
				$tname['first_name'] . $tname['last_name']  . '</div></td><td align="left"><div id="dispinfo">' .
				$row['date'] . '</div></td><td align="left"><div id="dispinfo">' .  
				$row['attendance'] . '</div></td>';

				echo '</tr>';
			}

		echo '</table>';
		echo "<br>";
} 
else 
{
	echo "Couldn't issue database query<br />";
}
?>

<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

</head>
<body>
  <article>
	
	<table>	
	<tr>
	
	
	<td>        
	
	</td>
	<td>
		<div class="formholder"><a href="?tag=getatn">
                	<input type="submit" name="rf" value="Refresh" id="button-in"  /></a>
       		</div>
	</td>
	</tr>
	</table>
	<?php
}
else
{
?>

<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

</head>
<body>
  <article>
	<div id="query_title"></div>
	<table>	
	<tr>
	
	<td><div id="myhd">Just view attendance with any constraint (need not be all)       </br>                  </div>
	
	</td>
	<td>        
	
	</td>
	<td>
		<div class="formholder"><form method="post">
            	<a href="?tag=getatn"><input type="submit" name="view_attendance" value="View Your Attendance" id="students_view"/></a>
       		</form></div>
	</td>
	</tr>
	</table>

 

 
<form method="POST">
      
	 <fieldset>
	 <legend><div id="myhd">Add a constraint if you want :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder="First Name"></div></td>
		 </tr>

		
            
			<tr>
		   <td><div id="formvalue">Attendance:</div></td>
		   <td><div class="formholder">
		   <div id="formvalue"><input type="radio" name="atnval" value="y" />Present</div>
                    <div id="formvalue"><input type="radio" name="atnval" value="n" />Absent</div>
                </div>
		   </td>
		 </tr>

            <tr>
		   <td><div id="formvalue">Date of Attendance:</div></td>
		   <td><div class="formholder"><input type="date"  name="doa" ></div></td>
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
	<input type="submit" name="submit" value="Add Constraint" id="button-in"  />
	</td>	
	</tr>
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>
			
            

<?php 
}
?>