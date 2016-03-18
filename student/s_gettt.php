<?php
$enr=$_SESSION["enroll"];
$query = "SELECT distinct venue,time,day,course.course_name,teacher.first_name,teacher.last_name  FROM timetable 
join crs_teach_stud 
join course
join teacher 
where course.course_id=timetable.course_id 
and teacher.id=timetable.teacher_id 
and crs_teach_stud.student_id='$enr'";
//,`last_name`,`gender`,`dob`,`mobile_no`,`batch`,`date_of_adm`, `semester`,`email`,`temp_addr`,`perm_addr`,`fname`,`mname`,`bld_grp`, `branch`,`enroll`, `alter_no`, `pswd` 
$response = mysql_query($query);
if($response==true)
{?>
	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    
<fieldset><legend><div id="myhd">Your Time Table </div></legend>
		 <table class="example table-autosort:0 " id="TABLE_4"   align="left"  border="0" cellpadding="0" cellspacing="0">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		   <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Course</div></th> 
		 <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Teacher</div></th> 
		 <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Venue</div></th> 
		 <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Time</div></th> 
		 <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Day</div></th> </tr>
		 
		 <tr>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th></a>
	</tr></thead>
<?php
		while($row = mysql_fetch_array($response))
		{
$day=$row['day'];
switch($day)
{
case 1:{$day='Mon';break;}
case 2:{$day='Tue';break;}
case 3:{$day='Wed';break;}
case 4:{$day='Thu';break;}
case 5:{$day='Fri';break;}
case 6:{$day='Sat';break;}
case 7:{$day='Sun';break;}
}
		
echo'<tr>
<td><div id="dispinfo">' . 
		$row['course_name'] . '</div></td>
	   
<td><div id="dispinfo">' . 
		$row['first_name'].' '.$row['last_name']. '</div></td>
		   
  <td><div id="dispinfo">' . 
		$row['venue'] . '</div></td>
		
	 <td><div id="dispinfo">' . 
		$row['time'] . '</div></td>
 <td><div id="dispinfo">' . 
		$day . '</div></td>
		 
	
	</tr>
	';}	 
	echo '	 </table>
	 </fieldset>';
		

} 
else 
{
	echo "Couldn't issue database query<br />";
}

?>
